<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    /**
     * Handle user registration and authentication.
     * @throws ValidationException
     */
    public function authenticate(Request $request): JsonResponse
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'username' => [
                'required',
                'string',
                'not_regex:/<[^>]*>?/', // Prevent HTML tags
                'max:255'
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email',
                function ($attribute, $value, $fail) {
                    $allowedDomains = config('emailDomains.allowed_domains');
                    $emailDomain = substr(strrchr($value, "@"), 1);

                    if (!in_array($emailDomain, $allowedDomains)) {
                        $fail('The email domain is not allowed. Please use an approved domain.');
                    }
                },
            ],
            'password' => [
                'required',
                'string',
                'min:8',
            ]
        ]);

        // Check for validation failures
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        // Proceed with handling validated data
        $credentials = $validator->validated();

        // Sanitize input
        $credentials['username'] = strip_tags($request->input('username'));
        $credentials['email'] = strip_tags($request->input('email'));
        $credentials['password'] = Hash::make($credentials['password']); // Hash the password

        // Create the user and save it in the database
        $user = User::create([
            'name' => $credentials['username'],
            'email' => $credentials['email'],
            'password' => $credentials['password'],
            'remember_token' => Str::random(60),
            'last_login_at' => Carbon::now(),
        ]);

        // Log in the user and regenerate session
        Auth::login($user);
        $request->session()->regenerate();

        // Return success response (e.g., redirecting to a welcome page or home)
        return response()->json([
            'message' => 'Registration successful!',
            'redirect' => '/'
        ], 201);
    }
}

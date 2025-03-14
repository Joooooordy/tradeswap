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
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /**
     * Handle user registration and authentication.
     *
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function authenticate(Request $request): JsonResponse
    {
        // Define validation rules
        $rules = [
            'username' => [
                'required',
                'string',
                'max:255',
                'unique:users,name',
                'not_regex:/<[^>]*>?/', // Prevent HTML tags
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
                'confirmed', // matches password_confirmation
                Password::min(8)
                    ->mixedCase()    // upper & lowercase
                    ->letters()      // at least one letter
                    ->numbers()      // at least one number
                    ->symbols(),     // at least one special character
            ],
        ];

        $messages = [
            'username.required' => 'Username is required.',
            'username.not_regex' => 'Username cannot contain HTML or special tags.',
            'username.taken' => 'Username is already taken.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'Password is required.',
            'password.confirmed' => 'Password confirmation does not match.',
            'password.min' => 'Password must be at least 8 characters long.',
            'password.mixed_case' => 'Password must contain both uppercase and lowercase letters.',
            'password.letters' => 'Password must contain at least one letter.',
            'password.numbers' => 'Password must contain at least one number.',
            'password.symbols' => 'Password must contain at least one special character.',
        ];

        // Perform validation
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        // Proceed with handling validated data
        $credentials = $validator->validated();

        // Sanitize username and email input
        $credentials['username'] = strip_tags($credentials['username']);
        $credentials['email'] = strip_tags($credentials['email']);

        // Hash the password
        $credentials['password'] = Hash::make($credentials['password']);

        // Create the user and save to database
        $user = User::create([
            'name' => $credentials['username'],
            'email' => $credentials['email'],
            'email_verified_at' => now(),
            'password' => $credentials['password'],
            'remember_token' => Str::random(60),
            'last_login_at' => Carbon::now(),
        ]);

        // Log the user in and regenerate session
        Auth::login($user);
        $request->session()->regenerate();

        // Return success response (e.g., redirect to dashboard)
        return response()->json([
            'message' => 'Registration successful!',
            'redirect' => '/'
        ], 201);
    }
}

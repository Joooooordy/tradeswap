<?php
namespace App\Http\Controllers;

use App\Models\UserInventory;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch a random selection of 10 items
        $all_items = UserInventory::inRandomOrder()->paginate(11);

        return view('home', compact('all_items'));
    }
}

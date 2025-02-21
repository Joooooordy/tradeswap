<?php

namespace App\Http\Controllers;

class ListController extends Controller
{
    public function showLists()
    {
        return view('wishlist.index');
    }
}

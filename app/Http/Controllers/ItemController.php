<?php

namespace App\Http\Controllers;

use App\Models\WishlistItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\UserInventory;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ItemController extends Controller
{
    /**
     * Write code on Method
     *
     * @return Application|Factory|\Illuminate\View\View|View()
     */
    public function index()
    {
        $products = UserInventory::all();
        return view('items.items', compact('products'));
    }
}

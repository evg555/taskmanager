<?php

namespace App\Http\Controllers;

use App\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Favorite::orderBy('created_at', 'desc')->paginate(5);
        return view('favorites.index', compact('favorites'));
    }
 }

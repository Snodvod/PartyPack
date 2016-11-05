<?php

namespace App\Http\Controllers;

use App\Party;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artist = User::whereHas('type', function($query) {
            $query->where('name', 'artist');
        })->get()->take(1);

        $populars = Party::All()->take(3);

        return view('index', ['artist' => $artist[0], 'populars' => $populars]);
    }
}

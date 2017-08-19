<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Party;


class AdminController extends Controller
{
    public function index() {
        $users = User::whereHas('type', function($query) {
            $query->where('name', 'artist');
        })->get();
        $parties = Party::all();

        return view('admin.index', ['users' => $users, 'parties' => $parties]);
    }
}

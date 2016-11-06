<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Party;

class PartyController extends Controller
{
    public function index()
    {
        $parties = Party::All();

        return view('concepts.index', ['parties' => $parties]);
    }

    public function show($id)
    {
        $party = Party::find($id);
        $comments = $party->comments;

        return view('concepts.detail', ['party' => $party, 'comments' => $comments]);
    }

    public function store(Request $request)
    {
        Party::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

    }
}

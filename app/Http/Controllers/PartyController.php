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

        return response()->json(['data' => $parties], 200);
    }

    public function show($id)
    {
        $party = Party::find($id);

        if (!$party) {
            //JSON RESPONSE IF PARTY DOESN'T EXIST

            return response()->json(['message' => "This Party doesn't exist.", 'code' => 404], 404);
        }

        return response()->json(['data' => $party], 200);
    }

    public function store(Request $request)
    {
        Party::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json(['message' => 'New party is created'], 200);
    }
}

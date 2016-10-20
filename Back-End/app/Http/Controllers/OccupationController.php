<?php

namespace App\Http\Controllers;

use App\Occupation;
use Illuminate\Http\Request;

use App\Http\Requests;

class OccupationController extends Controller
{
    public function index()
    {
        $occupations = Occupation::All();

        return response()->json(['data' => $occupations], 200);
    }

    public function show($id)
    {
        $occupation = Occupation::find($id);

        if (!$occupation) {
            //JSON RESPONSE IF USER DOESN'T EXIST
            return response()->json(['message' => "This Occupation doesn't exist.", 'code' => 404], 404);
        }

        return response()->json(['data' => $occupation], 200);
    }

    public function getUsers($id)
    {
        $occupation = Occupation::find($id);

        if (!$occupation) {
            //JSON RESPONSE IF USER DOESN'T EXIST
            return response()->json(['message' => "This Occupation doesn't exist.", 'code' => 404], 404);
        }
        $users = $occupation->users()->get();

        return response()->json(['data' => $users], 200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {

    }

    //GET USERS
    public function index()
    {
        //GET ALL USERS IN DB 
        $users = User::all();

        //JSON RESPONSE WITH ALL USER(S)
        return response()->json(['data' => $users], 200);
    }

    //GET USER BY ID
    public function show($id)
    {
        //GET USER IN DB BY ID
        $user = User::find($id);

        if (!$user) {
            //JSON RESPONSE IF USER DOESN'T EXIST
            return response()->json(['message' => "This User doesn't exist.", 'code' => 404], 404);
        }

        //JSON RESPONSE WITH ALL USER(S)
        return response()->json(['data' => $user], 200);
    }

    public function getOccupations($id)
    {
        $user = User::find($id);

        if (!$user) {
            //JSON RESPONSE IF USER DOESN'T EXIST
            return response()->json(['message' => "This User doesn't exist.", 'code' => 404], 404);
        }
        $occupations = $user->occupations()->get();

        return response()->json(['data' => $occupations], 200);
    }

    public function getType($id)
    {
        $user = User::find($id);

        $type = $user->type;

        if (!$user) {
            //JSON RESPONSE IF USER DOESN'T EXIST
            return response()->json(['message' => "This User doesn't exist.", 'code' => 404], 404);
        }

        return response()->json(['data' => $type], 200);
    }
}

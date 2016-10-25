<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

use App\Http\Requests;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::All();

        return response()->json(['data' => $types], 200);
    }

    public function getUsers($id)
    {
        $type = Type::find($id);

        $users = $type->users()->get();

        if (!$type) {
            //JSON RESPONSE IF USER DOESN'T EXIST
            return response()->json(['message' => "This Type doesn't exist.", 'code' => 404], 404);
        }

        return response()->json(['data' => $users], 200);
    }
}

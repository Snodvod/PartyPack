<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{

    public function index()
    {
         $artists = User::whereHas('type', function($query) {
            $query->where('name', 'artist');
         })->get();

         return view('artists.index', ['artists' => $artists]);
    }

    public function activateAccount($id)
    {
        $user = User::find($id);

        $user->isActive = !$user->isActive;

        $user->save();

        return redirect('/admin');
    }

    //GET USER BY ID
    public function show($id)
    {
        //GET USER IN DB BY ID
        $user = User::find($id);

        return view('artists.detail', ['artist' => $user]);
    }

    public function showComments($id)
    {
        $user = User::find($id);
        $comments = $user->comments;

        return view('artists.detail', ['artist' => $user, 'comments' => $comments]);
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

        if (!$user) {
            //JSON RESPONSE IF USER DOESN'T EXIST
            return response()->json(['message' => "This User doesn't exist.", 'code' => 404], 404);
        }
        $type = $user->type;

        return response()->json(['data' => $type], 200);
    }

    public function getEvents()
    {
        $user = User::find($id);

        if (!$user) {
            //JSON RESPONSE IF USER DOESN'T EXIST
            return response()->json(['message' => "This User doesn't exist.", 'code' => 404], 404);
        }

        $events = $user->events()->get();

        return response()->json(['data' => $events], 200);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $userName = $user->name;
        $user->delete();
        
        return redirect('/admin')->with('status', "$userName successfully deleted!");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;

class EventController extends Controller
{
    public function __construct()
    {

    }

	//GET USERS
    public function index()
    {
        //GET ALL USERS IN DB 
    	$events = Event::all();

        //JSON RESPONSE WITH ALL USER(S)
    	return response()->json(['data' => $events], 200);
    }

    //GET USER BY ID
    public function show($id)
    {
        //GET USER IN DB BY ID
    	$event = Event::find($id);

    	if(!$event)
    	{
            //JSON RESPONSE IF USER DOESN'T EXIST
    		return response()->json(['message' => "This Event doesn't exist.", 'code' => 404], 404);
    	}

        //JSON RESPONSE WITH ALL USER(S)
    	return response()->json(['data' => $event], 200);
    }
}

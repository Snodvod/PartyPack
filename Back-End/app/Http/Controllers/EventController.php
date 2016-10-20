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

	//GET EVENTS
    public function index()
    {
        //GET ALL EVENTS IN DB 
    	$events = Event::all();

        //JSON RESPONSE WITH ALL EVENT(S)
    	return response()->json(['data' => $events], 200);
    }

    //GET EVENT BY ID
    public function show($id)
    {
        //GET EVENT IN DB BY ID
    	$event = Event::find($id);

    	if(!$event)
    	{
            //JSON RESPONSE IF EVENT DOESN'T EXIST
    		return response()->json(['message' => "This Event doesn't exist.", 'code' => 404], 404);
    	}

        //JSON RESPONSE WITH ALL EVENT(S)
    	return response()->json(['data' => $event], 200);
    }
    
    public function getComments($id)
    {
        $event = Event::find($id);
        $comments = $event->comments()->get();

        if(!$event)
        {
            //JSON RESPONSE IF EVENT DOESN'T EXIST
            return response()->json(['message' => "This Event doesn't exist.", 'code' => 404], 404);
        }

        return response()->json(['data' => $comments], 200);
    }
}

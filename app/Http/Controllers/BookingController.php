<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
    public function index()
    {
    	$bookings = Booking::all();

    	return response()->json(['data' => $occupations], 200);
    }

    public function show($id)
    {
        $booking = Booking::find($id);

        if (!$booking) {
            //JSON RESPONSE IF USER DOESN'T EXIST
            return response()->json(['message' => "This Booking doesn't exist.", 'code' => 404], 404);
        }

        return response()->json(['data' => $booking], 200);
    }

    public function store(Request $request)
    {
    	$booking = Booking::create([
    			'user_id' => $request->get('user_id'),
    			'party_id' => $request->get('party_id')
    		]);

    	$booking->save();

    	return 'success';
    }

    public function update(Request $request, $id)
    {
    	$booking = Booking::find($id);

    	$booking->user_id = $request->get('user_id');
    	$booking->party_id = $request->get('party_id');

    	$booking->save();

    	return 'success';
    }

    public function destroy($id)
    {
    	$booking = Booking::find($id);

    	$booking->delete();

    	return 'success';
    }
}

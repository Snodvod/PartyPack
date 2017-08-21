<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Booking;
use App\Party;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$bookings = Booking::all();

        return view('bookings.index', [
            'bookings' => $bookings
        ]);
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

    public function create(Request $request)
    {
        $parties = Party::all();
        $bookings = Booking::all();
        $userId = Auth::user()->id;
        $partiesArray = [];
        $overlapParties = [];
        $realParties = [];
        $dupes = [];
        $partyIds = [];

        foreach ($parties as $party) {
            $booking = Booking::where('party_id', '=', $party->id)->get();
            $party = Party::where('id', '=', $party->id)->get();
            if($booking->count()) {
                array_push($overlapParties, $booking);
            }
            array_push($partiesArray, $party);
        }

        for ($i = 0; $i < count($overlapParties); $i++) {
            for ($j = 0; $j < count($partiesArray); $j++) {
                if ($overlapParties[$i][0]->party_id === $partiesArray[$j][0]->id) {
                    array_push($dupes, $overlapParties[$i][0]->party_id);
                }
                array_push($partyIds, $partiesArray[$j][0]->id);
            }
        }

        $partyIds = array_unique($partyIds);
        $partyIds = array_diff($partyIds, $dupes);

        foreach ($partyIds as $partyId) {
            $party = Party::where('id', '=', $partyId)->get();
            array_push($realParties, $party);
        }

        if(!count($realParties)) {
            $parties = Party::all();
            array_push($realParties, $parties);
        }

        return view('bookings.create', [
            'parties' => $parties
        ]);
    }

    public function store(Request $request)
    {
        $partyName = $request->party;
        $party = Party::where('name', '=', $partyName)->get();
        $partyId = $party[0]->id;
        $userId = Auth::user()->id;

    	$booking = Booking::create([
    			'user_id' => $userId,
    			'party_id' => $partyId
    		]);

    	$booking->save();

    	return redirect('/bookings')->with('status', "Successfully booked!");
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

    	return redirect('/bookings')->with('status', "Successfully deleted!");
    }
}

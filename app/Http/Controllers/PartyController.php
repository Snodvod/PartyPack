<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Party;
use App\Image;
use Carbon\Carbon;

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

        $artists = $party->users()->whereHas('type', function($query) {
            $query->where('name', 'artist');
        })->get();

        return view('concepts.detail', ['party' => $party, 'comments' => $comments, 'artists' => $artists]);
    }

    public function store(Request $request)
    {
        $file = $request->file('image');
        $fileName = sha1(Carbon::now()).'.'.$file->clientExtension();
        
        $party = Party::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        $party->save();
        $partyId = $party->id;
        var_dump($partyId);

        $image = Image::create([
            'image' => $fileName,
            'imageable_id' => $partyId,
            'imageable_type' => 'App\Party'
        ]);

        $image->save();

        $file->storeAs('/', $fileName, 'public');

        return 'success';
    }
}

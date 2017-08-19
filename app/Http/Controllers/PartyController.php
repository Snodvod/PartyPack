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

        $artists = $party->users()->whereHas('type', function ($query) {
            $query->where('name', 'artist');
        })->get();

        return view('concepts.detail', ['party' => $party, 'comments' => $comments, 'artists' => $artists]);
    }

    public function store(Request $request)
    {
        $file = $request->file('image');
        $artistId = $request->artist;

        $party = Party::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_url' => sha1(Carbon::now()) . '.' . $file->clientExtension()
        ]);
        $party->users()->attach($artistId);
        $party->save();

        if ($file) {
            $partyId = $party->id;
            $fileName = sha1(Carbon::now()) . '.' . $file->clientExtension();
            $image = Image::create([
                'image' => $fileName,
                'imageable_id' => $partyId,
                'imageable_type' => 'App\Party'
            ]);
            $image->save();
            $file->store('img/', $fileName, 'upload');
        }



        return redirect()->to('/concepts');
    }
}

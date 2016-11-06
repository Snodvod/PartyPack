<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function __construct()
    {

    }

    public function sendInvitation()
    {
    	$emailUser = 'jonas.vaneeckhout@student.kdg.be';
    	$nameUser = 'Jos';
    	$data = ['email' => $emailUser, 'name' => $nameUser];

    	Mail::send('email.invitation', $data, function($message) use ($data) 
    	{
    		$emailUser = $data['email'];
            $nameUser = $data['name'];
            $message->to($emailUser, $nameUser)->subject('Hello Party Invite');
    	});

    	return 'success sending invite';
    }


 //    public function emailWinner(Request $request) {
 //        $userId = Auth::id();
 //        $winningUser = DB::table('users')->select('email', 'name')->where('id', $userId)->get();
 //        $emailUser = $winningUser[0]->email;
 //        $nameUser = $winningUser[0]->name;
 //        $data = ['name' => $nameUser, 'email' => $emailUser, 'userId' => $userId];
 //        Mail::send('email.winner', $data, function($message) use ($data) {
 //            $emailUser = $data['email'];
 //            $nameUser = $data['name'];
 //            $message->to($emailUser, $nameUser)->subject('Congratulations, you have won!');
 //        });
 //    }
	// }
}

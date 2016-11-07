<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;

class MailController extends Controller
{
    public function sendInvitation($id)
    {
        $user = User::find($id);
    	$emailUser = $user->email;
    	$nameUser = $user->name;
        $userId = $id;
    	$data = ['email' => $emailUser, 'name' => $nameUser, 'id' => $userId];

    	Mail::send(['html' => 'email.invitation'], $data, function($message) use ($data) 
    	{
    		$emailUser = $data['email'];
            $nameUser = $data['name'];
            $userId = $data['id'];
            $message->from('me@helloparty.com');
            $message->to($emailUser, $nameUser)->subject('Hello Party Invite');
    	});

    	return redirect('/admin');
    }
}

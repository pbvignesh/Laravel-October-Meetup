<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    //
    public function notify(Request $request)
    {
        $email = $request->input('email');
        $channel = $request->input('channel');
        $user = new User;
        $user->sendNotification($email, $channel);

        return view('welcome');
    }
}

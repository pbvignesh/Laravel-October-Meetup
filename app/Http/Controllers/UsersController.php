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

        (new User)->sendNotification($email, $channel);

        return view('welcome');
    }
}

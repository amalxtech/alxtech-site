<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller{

    public function send()
    {

        Log::info('contact message', [
            'time' => Carbon::now('America/New_York'),
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'message' => Input::get('message'),
            'ip' => $_SERVER['REMOTE_ADDR']
        ]);

        return view('contact.success');

    }

}
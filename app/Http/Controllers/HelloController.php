<?php

namespace App\Http\Controllers;

use App\Mail\HelloMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HelloController extends Controller
{
    public function send(Request $request){
        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
        ];

        Mail::to('mmbaleryan@gmail.com')->send(new HelloMail($data));
    }
}

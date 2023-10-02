<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MiyongController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function why()
    {
        return view('why');
    }

    public function service_flow()
    {
        return view('service_flow');
    }

    public function hotel()
    {
        return view('hotel');
    }

    public function contact()
    {
        return view('contact');
    }

    public function cooperation()
    {
        return view('cooperation');
    }

    public function mail_send(Request $request)
    {
    	$data = ['name' => $request->name,
                'mail' => $request->mail,
                'tel' => $request->tel,
                'content' => $request->content,];

        $mail = $request->mail;

        Mail::send('mail', $data, function($message) use ($mail){
            $message->to($mail, 'Test')->subject('【OTAKU】お問い合わせ完了のご案内');
        });

        Mail::send('mail_admin', $data, function($message) {
            $message->to('info@otaku4704.com', 'Test')->subject('【OTAKU】お問い合わせ受け付けのお知らせ');
        });

        return redirect()->to('mail_comp');
    }

    public function mail_comp()
    {
        return view('mail_comp');
    }


}

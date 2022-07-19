<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function login(){
        return view("login");
    }

    public function plans(){
        return view("plans");
    }

    public function index(){
        return view("index");
    }

    public function faqs(){
        return view("faqs");
    }

    public function dashboard(){
        return view("dashboard");
    }

    public function register(){
        return view("register");
    }

    public function transactions(){
        return view("transactions");
    }

    public function reinvest(){
        return view("reinvest");
    }


    public function referrals(){
        return view("referrals");
    }

    public function accountinfo(){
        return view("accountinfo");
    }

    public function contactUs(Request $request)
    {
        // dd($request->all());
        {
            $data =  $this->validate($request, [
                "name" => "required|string",
                "email" => "required|string",
                "subject" => "nullable|string",
                "message" => "required|string",
            ]);
            // Contact::create($data);
            //  Store data in database
             Contact::create($data);
            //  Send mail to admin
            Mail::send('mail', array(
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'messages' => $request->message,
            ), function ($message) use ($request) {
                $message->from($request->email);
                $message->to('emmanuelgodwin558@gmail.com', 'Admin')->subject($request->get('subject'));
            });


            return redirect()->route('index')->with('success', 'We have received your message and would like to thank you for writing to us.');
        }
    }
}

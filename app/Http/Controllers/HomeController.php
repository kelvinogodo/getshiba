<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

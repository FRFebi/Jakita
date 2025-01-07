<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function homepage(): string
    {
        return view('homepage');
    }
    public function register(): string
    {
        return view('register');
    }
    public function login(): string
    {
        return view('login');
    }
    public function homepage2(): string
    {
        return view('homepage2');
    }
    public function homepage3(): string
    {
        return view('homepage3');
    }
}

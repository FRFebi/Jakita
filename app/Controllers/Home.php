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
    public function homepage2(): string
    {
        return view('homepage2');
    }
    public function homepage3(): string
    {
        return view('homepage3');
    }
}

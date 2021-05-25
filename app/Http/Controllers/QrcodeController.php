<?php

namespace App\Http\Controllers;

class QrcodeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function mail()
    {
        return view('view.mail');
    }
    public function vcard()
    {
        return view('view.vcard');
    }
    public function geo()
    {
        return view('view.geo');
    }
    public function url()
    {
        return view('view.url');
    }
    public function phone()
    {
        return view('view.phone');
    }
}

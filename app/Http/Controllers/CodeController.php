<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
class CodeController extends Controller
{
    public function urlcode(Request $request)
    {
        $url = $request->input('url-text');
        $file = 'qrcodes/'.$request->input('url-text').'.eps';
        $data = QrCode::encoding('utf-8')->size(300)->generate($url);
        return view('view.show', compact('data'));

    }
    public function mailcode(Request $request)
    {
        $mail = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        $data = QrCode::encoding('utf-8')->size(300)->email($mail,$subject,$message);
        return view('view.show', compact('data'));

    }
    public function vcardcode(Request $request)
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $address = $request->input('address');
        $url = $request->input('url');
        $size = $request->input('size') ?? 300;
        $vCard = "BEGIN:VCARD\nFN:$name $surname\nTEL:$phone\nADR;TYPE=WORK:$address\nEMAIL:$email\nURL:$url\nEND:VCARD";
        $data = QrCode::encoding('UTF-8')->size($size)->generate($vCard);
        return view('view.show', compact('data'));

    }
    public function geocode(Request $request)
    {
        $enlem = $request->input('enlem');
        $boylam = $request->input('boylam');
        $data = QrCode::encoding('utf-8')->size(300)->geo($enlem,$boylam);
        return view('view.show', compact('data'));

    }
    public function phonecode(Request $request)
    {
        $phone = $request->input('phone');
        $data = QrCode::encoding('utf-8')->size(300)->phoneNumber($phone);
        return view('view.show', compact('data'));

    }
}

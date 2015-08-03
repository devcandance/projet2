<?php

namespace App\Http\Controllers;

use App\Mail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function show($id)
    {
        return view('mail.show');
    }



    public function index()
    {
        $mails = Mail::all();
        return view('mail.index', compact('mails'));
    }


    public function create()
    {
        return view('mail.create');
    }

    public function store(Request $request)
    {
        Mail::create($request->all());
        return redirect()->to('mail.show');
    }


    /**
     * public function show($id)
    {
        // return view('mail.show');

        $mail = Mail::find($id);
        return view('mail.show', compact('mail'));
    }*/


    public function destroy($id)
    {
        Mail::destroy($id);
    }
}
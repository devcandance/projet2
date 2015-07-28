<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $admins = [
            ['pseudo' => 'Tony', 'status' => 'admin'],
            ['pseudo' => 'Jojo', 'status' => 'admin'],
        ];

        $title = 'list admin website';

        return view('users.index', compact('admins', 'title'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view ('users.single', compact('user'));
    }
}

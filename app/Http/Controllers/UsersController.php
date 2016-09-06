<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    public function name($name)
    {
        $user = User::where('name', $name)->first();

        $photos = $user->photos;

        return view('users.show')->with([
            'user' => $user,
            'photos' => $photos
        ]);
    }
}

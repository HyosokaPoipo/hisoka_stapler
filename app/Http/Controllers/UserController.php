<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Input;
class UserController extends Controller
{
    public function store(Request $request)
    {
        \Log::info(Input::all());

        $user = User::create(Input::all());

        return redirect()->back();
    }
}

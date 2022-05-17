<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function loginShow($slug) {
        $list = Lists::where('slug', $slug)->first();

        dd(session()->get('_token'));

        return view('guests.list-login', compact('list'));
    }
}

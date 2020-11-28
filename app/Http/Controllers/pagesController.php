<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function profile() {
        return view('my-profile');
    }

    public function updateProfile() {
        return view('update');
    }
    public function newEvent() {
        return view('new-event');
    }

}

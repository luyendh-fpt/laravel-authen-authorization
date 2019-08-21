<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function hello()
    {
        return "Hello Guest! Not required logged in!";
    }
}

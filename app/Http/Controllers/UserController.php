<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function hello()
    {
        return 'Hello User! You are logged in!';
    }

    public function goodbye()
    {
        return 'Goodbye User! You are logged in!';

    }
}

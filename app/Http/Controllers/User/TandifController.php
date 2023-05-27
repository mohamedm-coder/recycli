<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TandifController extends Controller
{
    public function tandif()
    {
        return view ('user.tandif');
    }
    public function omal()
    {
        return view ('user.omal');
    }
}


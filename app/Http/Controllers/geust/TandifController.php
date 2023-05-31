<?php

namespace App\Http\Controllers\geust;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TandifController extends Controller
{
    public function tandif()
    {
        return view ('geust.tandif');
    }
    public function omal()
    {
        return view ('geust.omal');
    }
    public function one()
    {
        return view ('geust.one');
    }
}


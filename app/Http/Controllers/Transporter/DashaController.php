<?php

namespace App\Http\Controllers\Transporter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashaController extends Controller
{
    public function index()
    {
        return view ('transporter.dasha');
    }
}

<?php

namespace App\Http\Controllers\geust;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class DashController extends Controller
{
    public function index()
    {
            $data=product::all();
            return view('geust.dash',['products'=>$data]);
        
           }
    }


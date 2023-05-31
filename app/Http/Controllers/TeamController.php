<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class TeamController extends Controller
{
    public function index()
{
    return view('team');
}
    public function dashb()
    {
        $data=product::all();
        return view('dashb',['products'=>$data]);
    }

}

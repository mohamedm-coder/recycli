<?php

namespace App\Http\Controllers\geust;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ListController extends Controller
{
   public function index(){
    $data=product::all();
    return view('geust.list',['products'=>$data]);

   }
   
}

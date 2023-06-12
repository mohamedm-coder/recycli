<?php

namespace App\Http\Controllers\geust;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Auth;




class DashController extends Controller
{
    public function index()
    {
            $data=product::all();
            return view('geust.dash',['products'=>$data]);
        
           }
        
           public function wahed()
           {
               $user = Auth::user(); // الحصول على المستخدم الحالي
           
               $products = Product::where('user_id', $user->id)->get();
           
               return view('dash', ['products' => $products]);
           }
         
    }
    


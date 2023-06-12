<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class DashController extends Controller
{
    public function index()
    {
            $data=product::all();
            return view('user.dash',['products'=>$data]);
        
           }
           public function wahed()
           {
               $user = Auth::user(); // الحصول على المستخدم الحالي
           
               $products = Product::where('user_id', $user->id)->get();
           
               return view('user.wahed', ['products' => $products]);
           }
           public function edit(Product $product)
           {
            return $product;
           }
           public function delete($id){
            $data=product::find($id);
            $data->delete();
            return redirect('user/wahed');
        
         }
    }


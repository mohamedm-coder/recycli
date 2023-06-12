<?php

namespace App\Http\Controllers\geust;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Auth;



class ProductController extends Controller
{
    public function index()
    {
        return view ('geust.product.index');
    }
    public function sell()
    {
        return view ('geust.product.sell');
    }
    public function sel(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'description' =>'required',
            'photo' =>'required',
            'prix' =>'required',
            

        ]);
        $requestData=$request->all();
        $photo = $request->file('photo');
        $uploadedFileUrl = Cloudinary::upload($photo->getRealPath())->getSecurePath();

        $product = new product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->prix = $request->prix;
        $product->photo = $uploadedFileUrl;
        $product->user_id = 1;
        $product->save();

     
 
        
        return redirect('dash')->with('categories addes succec');
    

      
    }
    public function search(){
        if (request('search')) {
            $products = product::where('name', 'like', '%' . request('search') . '%')->get();
        } else {
            $products = product::all();
        }
    
        return view('geust.product.search')->with('products', $products);
        
   
    
}
public function addcart($id){
    $product=Product::findorFail($id);
    $cart=session()->get('cart',[]);
    if(isset($cart[$id])){
     
    }
    else{
        $cart[$id]=[
            'name' =>$product->name,
            'description' =>$product->description,
            'photo' =>$product->photo,
            'prix' =>$product->prix,

        ];
    }
    session()->put('cart',$cart);
    return redirect()->back()->with('success','تم اضافة  عنصرك الى السلة ');




}
public function cart(){
    return view('geust.cart');
}

    
}

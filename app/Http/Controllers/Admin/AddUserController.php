<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\google;
use App\Models\don;
use App\Models\product;

class AddUserController extends Controller
{
    public function index(){
        return view('admin.adduser');
    }
    public function users(Request $request){
        $data=new user;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->role='0';
        $data->save();
        return redirect()->back();
    }
    public function loc()
    {
            $data=google::all();
            return view('admin.location',['googles'=>$data]);
        
           }
           public function led()
    {
            $data=don::all();
            return view('admin.leddon',['dons'=>$data]);
        
           }
           
           public function pro()
           {
                   $data=product::all();
                   return view('admin.product',['products'=>$data]);
               
                  }
                  
                   public function delete($id){
                    $data=product::find($id);
                    $data->delete();
                    return redirect('admin/product');
                
                 }
                   public function deletee($id){
                    $data=don::find($id);
                    $data->delete();
                    return redirect('admin/leddon');
                
                   }
                   public function deleteee($id){
                    $data=google::find($id);
                    $data->delete();
                    return redirect('admin/leddon');
                
                   }
                 
           
           
}

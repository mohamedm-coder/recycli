<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class TransporterController extends Controller
{
    public function index(){
        return view('admin.addtransporter');
    }
    public function transporters(Request $request){
        $data=new user;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->role='2';
        $data->save();
        return redirect()->back();
    }
}

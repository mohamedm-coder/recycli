<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\don;

class DonController extends Controller
{
    public function don()
    {
        return view ('user.don');
    }
   
    public function doni()
    {
        $dons = don::all();
        return view ('user.doni')->with('dons',$dons);
    }
    public function dons(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'description' =>'required',
            'photo' =>'required',
            
            

        ]);
        $requestData=$request->all();
        $fileName=time().$request->file('photo')->getClientOriginalName();
        $path=$request->file('photo')->storeAs('images',$fileName,'public');
        $requestData['photo']=  '/storage/'.$path;
        don::create($requestData);
 
        
        return redirect('user/doni')->with('categories addes succec');
    

      
    }
}

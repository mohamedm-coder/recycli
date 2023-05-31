<?php

namespace App\Http\Controllers\geust;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\google;

class LocationController extends Controller
{
    public function google(){
        return view('geust.google');
    }
    public function gen(Request $request)
    {
        $request->validate([
            'address' =>'required',
            'phone' =>'required',
            'photo' =>'required',
            'location' =>'required',
            
            

        ]);
        $requestData=$request->all();
        $fileName=time().$request->file('photo')->getClientOriginalName();
        $path=$request->file('photo')->storeAs('images',$fileName,'public');
        $requestData['photo']= '/storage/'.$path;
        google::create($requestData);
 
        
        return redirect('google')->with('categories addes succec');
    

      
    }
}

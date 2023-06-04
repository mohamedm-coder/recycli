<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kidma;

class TandifController extends Controller
{
    public function tandif()
    {
        return view ('user.tandif');
    }
    public function omal()
    {
        return view ('user.omal');
    }
    public function acc()
    {
        return view ('user.acc');
    }
    

    public function onee()
    {
        return view ('user.onee');
    }
    public function omalss(Request $request)
    {
        $request->validate([
            'phone' =>'required',
            'location' =>'required',
            'address' =>'required',
            
            

        ]);
        $requestData=$request->all();
        kidma::create($requestData);

        return redirect('user/acc')->with('categories addes succec');
    

      
    }
}


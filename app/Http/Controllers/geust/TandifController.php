<?php

namespace App\Http\Controllers\geust;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kidma;

class TandifController extends Controller
{
    public function tandif()
    {
        return view ('geust.tandif');
    }
    public function omal()
    {
        return view ('geust.omal');
    }
    public function one()
    {
        return view ('geust.one');
    }
    public function omals(Request $request)
    {
        $request->validate([
            'phone' =>'required',
            'location' =>'required',
            'address' =>'required',
            
            

        ]);
        $requestData=$request->all();
        kidma::create($requestData);

        return redirect('accept')->with('categories addes succec');
    

      
    }
    public function accept()
    {
        return view ('geust.accept');
    }
}


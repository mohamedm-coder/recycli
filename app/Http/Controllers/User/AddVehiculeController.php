<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicule;
use App\Models\yad;


class AddVehiculeController extends Controller
{
    public function index(){
        $vehicules = Vehicule::all();
        return view('user.transporter')->with('vehicules',$vehicules);
    }
    public function yad(){
        return view('user.yad');
    }
    public function yads(Request $request)
    {
        $request->validate([
            'phone' =>'required',
            'location' =>'required',
            'address' =>'required',
            
            

        ]);
        $requestData=$request->all();
        yad::create($requestData);

        return redirect('user/acc')->with('categories addes succec');
    

      
    }
}

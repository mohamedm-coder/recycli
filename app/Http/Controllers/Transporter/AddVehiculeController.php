<?php

namespace App\Http\Controllers\Transporter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicule;

class AddVehiculeController extends Controller
{
  
    
    public function index(){
        $vehicules = Vehicule::all();
        return view('transporter.vehicule.addvehicule')->with('vehicules',$vehicules);
    }
    
    public function adds(){
       
        return view('transporter.vehicule.adds');
    }
    public function addss(Request $request){
        $requestData=$request->all();
        $fileName=time().$request->file('photo')->getClientOriginalName();
        $path=$request->file('photo')->storeAs('images',$fileName,'public');
        $requestData['photo']= '/storage/'.$path;
        Vehicule::create($requestData);
        return redirect('transporter/addvehicule');
        
    }
    public function delete($id){
        $data=vehicule::find($id);
        $data->delete();
        return redirect('transporter/addvehicule');
    
       }
}

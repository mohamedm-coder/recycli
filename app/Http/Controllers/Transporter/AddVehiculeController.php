<?php

namespace App\Http\Controllers\Transporter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicule;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


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
        $photo = $request->file('photo');
        $uploadedFileUrl = Cloudinary::upload($photo->getRealPath())->getSecurePath();

        $Vehicule = new Vehicule;
        $Vehicule->name = $request->name;
        $Vehicule->matricule = $request->matricule;
        $Vehicule->photo = $uploadedFileUrl;
        $Vehicule->save();
        return redirect('transporter/addvehicule');
        
    }
    public function delete($id){
        $data=vehicule::find($id);
        $data->delete();
        return redirect('transporter/addvehicule');
    
       }
}

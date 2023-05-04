<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicule;

class AddVehiculeController extends Controller
{
    public function index(){
        $vehicules = Vehicule::all();
        return view('user.transporter')->with('vehicules',$vehicules);
    }
}

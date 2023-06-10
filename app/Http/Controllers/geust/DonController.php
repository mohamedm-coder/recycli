<?php

namespace App\Http\Controllers\geust;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\don;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class DonController extends Controller
{
    public function don()
    {
        return view ('geust.don');
    }
   
    public function doni()
    {
        $dons = don::all();
        return view ('geust.doni')->with('dons',$dons);
    }
    public function dons(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'description' =>'required',
            'photo' =>'required',
            
            

        ]);
        $requestData=$request->all();
    
   
        $uploadedFileUrl = Cloudinary::upload($request->file('photo')->getRealPath())->getSecurePath();
       
        don::create($requestData);
        
 
        
        return redirect('doni')->with('categories addes succec');
    

      
    }
}

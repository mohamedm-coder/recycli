<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\don;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

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
        $photo = $request->file('photo');
        $uploadedFileUrl = Cloudinary::upload($photo->getRealPath())->getSecurePath();

        $don = new don;
        $don->name = $request->name;
        $don->description = $request->description;
        $don->photo = $uploadedFileUrl;
        $don->save();
     

    
    
           
 
        
        return redirect('user/doni')->with('categories addes succec');
    

      
    }
}

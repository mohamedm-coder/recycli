<?php

namespace App\Http\Controllers\geust;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\google;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


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
        $photo = $request->file('photo');
        $uploadedFileUrl = Cloudinary::upload($photo->getRealPath())->getSecurePath();

        $google = new google;
        $google->address = $request->address;
        $google->phone = $request->phone;
        $google->location = $request->location;
        $google->photo = $uploadedFileUrl;
        $google->save();       
 
        
        return redirect('google')->with('categories addes succec');
    

      
    }
}

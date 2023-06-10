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
        $uploadedFileUrl = Cloudinary::upload($request->file('photo')->getRealPath())->getSecurePath();

        google::create($requestData);
 
        
        return redirect('google')->with('categories addes succec');
    

      
    }
}

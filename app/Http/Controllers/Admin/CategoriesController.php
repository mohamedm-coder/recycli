<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriesFormRequest;
use App\Http\Support\Str;
use App\Models\Categories;





class CategoriesController extends Controller
{
    public function categories()
    {
        return view('admin.categories.add');
    }
    public function create()
    {
        return view('admin.categories.create');
    } 
     public function store(CategoriesFormRequest $request ){
        $validateData= $request -> validated();
        $categories=new categories;
        $categories->name= $validatedData ['name'];
        $categories->slug = Str::slug($validatedData ['slug']);
        $categories -> description= $validatedData ['description'];
        if($request -> hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/categories/',$filename);
            $categories->image=$filename;
        }
        $categories->meta_description=$validatedData['meta_description'];
        $categories->meta_tittle=$validatedData['meta_tittle'];
        $categories->status=$request->status==true ?'1':'0';
        $categories->save();
        return redirect('admin/categories/add')->with('categories addes succec');

     }

    
}

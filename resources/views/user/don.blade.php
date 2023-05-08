@extends('layouts.user')
@section('content')
<div class="row"> 
    <div class="col-md-12"> 
        <div class="card"> 
            <div class="card-header"> 
                <h4> رجوع</h4>
            
                <a href="{{url('user/product')}}" class="btn btn-primary btn-sm texte white float-end" > back</a>
            
                </div>
                <div class="card-body">
                    <form action= "{{url('user/dons')}}"  method="POST" enctype="multipart/form-data"   >
                        @csrf
                        
                       
                     
                    
                        <div class="mb-3">
                            <label> اسم</label>
                            <input type="text" name="name" class="form-control">


                        </div>
                       
                        <div class="mb-3">
                            <label> وصف</label>
                            <input type="description" name="description" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label> صورة</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                       
                        
                    
                        
                        <div class="col-md-12  mb-3">
                            <button type="submit" > اضافة</button>
                        </div>   


                    </form>
        </div>


        </div>
    </div>
    

</div>
@endsection
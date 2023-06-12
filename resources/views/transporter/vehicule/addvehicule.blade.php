@extends('layouts.transporter')
@section('content')
<div class="row"> 
    <div class="col-md-12"> 
        <div class="card"> 
            <div class="card-header"> 
                <h4> وسائل النقل</h4>
            
                  <a href="adds" class="btn btn-primary btn-sm float-end" >اضافة وسيلة نقل</a>
            
                </div>
                <div class="card-body">
        </div>


        </div>
    </div>
  
        @foreach ($vehicules as $pro)
     
       
        
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
            <div class="card w-100 my-2 shadow-2-strong">
              <img src="{{asset($pro->photo)}}" class="card-img-top" style="aspect-ratio: 1 / 1" />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{$pro['name']}}</h5>
                <p class="card-text">{{$pro['matricule']}}</p>
                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                  <a href={{'delete/'.$pro['id']}} class="btn btn-danger">حذف<i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                </div>
              </div>
            </div>
          </div>
            
        @endforeach

    

</div>
@endsection
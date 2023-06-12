@extends('layouts.user')
@section('content')
<div class="row">
    <div class="row">
      @if(session('message'))
      <div class="alert alert-success">{{session('message')}}</div>
      @endif
      
  
  
     
          @foreach ($products as $pro)
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <img src="{{asset($pro->photo)}}" class="card-img-top" style="aspect-ratio: 1 / 1" />
    
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{$pro['name']}}</h5>
            <p class="card-text">{{$pro['description']}}</p>
            <p class="card-text">{{$pro['prix']}}دينار جزائري</p>
            <a href="{{url('user/wahed/'.$pro->id.'/edit')}}" class="btn btn-success">تعديل</a>
            <a href="{{'delete/'.$pro['id']}}" class="btn btn-danger">حذف</a>

            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
             
            
             
           
  
          
             {{-- <a href={{'delete/'.$pro['id']}} class="btn btn-light border px-2 pt-2 icon-hover">حذف<i class="fas fa-heart fa-lg text-secondary px-1"></i></a>--}}
            </div>
          </div>
        
    </div>
  </div>
  
  
  
  
  @endforeach
@endsection  
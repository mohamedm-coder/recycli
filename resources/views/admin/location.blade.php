@extends('layouts.admin')
@section('content')

    


<div>
<h4>مرحبا بك </h4>
</div>
<div class="row">
<div class="row">

    @foreach ($googles as $pro)
<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
  <div class="card w-100 my-2 shadow-2-strong">
    <img src="{{asset($pro->photo)}}" class="card-img-top" style="aspect-ratio: 1 / 1" />
    <div class="card-body d-flex flex-column">
      <h5 class="card-title">{{$pro['name']}}</h5>
      <p class="card-text">{{$pro['address']}}</p>
      <p class="card-text">{{$pro['phone']}}</p>
      <p class="card-text">{{$pro['location']}}</p>
      <a href={{'deleteee/'.$pro['id']}} class="btn btn-light border px-2 pt-2 icon-hover">حذف<i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
     
    </div>
  
</div>
</div>
@endforeach

</div>
</div>

@endsection
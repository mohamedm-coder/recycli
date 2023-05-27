@extends('layouts.admin')
@section('content')



<div>
<h4>شكرا لك نحن نقدر لك ذلك </h4>
</div>
<div class="row">
<div class="row">
 
      @foreach ($dons as $pr)
  <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
    <div class="card w-100 my-2 shadow-2-strong">
      <img src="{{asset($pr->photo)}}" class="card-img-top" style="aspect-ratio: 1 / 1" />
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{$pr['name']}}</h5>
        <p class="card-text">{{$pr['description']}}</p>
        <a href={{'deletee/'.$pr['id']}} class="btn btn-light border px-2 pt-2 icon-hover">حذف<i class="fas fa-heart fa-lg text-secondary px-1"></i></a>

        <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
         
        
       

      
        
        </div>
      </div>
    
</div>
</div>
@endforeach

  </div>
</div>




    


</section>
@endsection
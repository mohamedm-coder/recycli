@extends('layouts.user')
@section('content')

   
   <ul class="list-group mt-3">
    @forelse($products as $product)
     
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
            <div class="card w-100 my-2 shadow-2-strong">
              <img src="{{asset($product->photo)}}" class="card-img-top" style="aspect-ratio: 1 / 1" />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{$product['description']}}</p>
                <p class="card-text">{{$product['prix']}}Dinar Algerienne</p>
                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                  <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                  {{--<a href={{'delete/'.$product['id']}} class="btn btn-light border px-2 pt-2 icon-hover"> delete<i class="fas fa-heart fa-lg text-secondary px-1"></i></a>--}}
                </div>
              </div>
            </div>
          </div>
    @empty
        <li class="list-group-item list-group-item-danger">User Not Found.</li>
    @endforelse
</ul>


@endsection
@extends('layouts.user')
@section('content')
<div class="container">
  @if (session('success'))
  <div class="alert alert-success">
    {{session('success')}} 
  </div>
  @endif

  

<div class="container">
<div class="row">
  <div class="col-lg-12 col-sm-12 col-12">
  <div class="dropdown">

  <button type="button" class="btn btn-primary" data-toggle="dropdown">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>السلة<span class="badge badge-pill badge-danger">{{count((array)session('cart'))}} </span>
  </button>
  <div class="dropdown-menu">
    <div class="row total-header-section">
      @php $total=0 @endphp
      @foreach ((array) session('cart') as $id=>$details)
      @php $total+=$details['prix']@endphp    
      @endforeach
      <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
        <p>total <span class="text-info">DA{{$total}}</span></p>
      </div>
    </div>
    @if (session('cart'))
    @foreach (session('cart') as $id=>$details)
    <div class="row cart-detail">
      <div class="col-lg-4 col-sm-4 cart-detail-img">
        <img src="{{asset('images')}}/{{$details['photo']}}" />
      </div>
      <div class="col-lg-8 col-sm-8 cart-detail-product">
        <p>{{$details['name']}}</p><span class="price texte-info">da{{$details['prix']}}</span>
      </div>

    </div>
    @endforeach
        
    @endif
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-12 texte center chekout">
        <a href="{{url('user/cart')}}" class="btn">عرض الكل </a>
      </div>
    </div>
</div>
  </div>
</div>
</div>
   
</div>

  <div>
  <h4>مرحبا بك ايها لامستخدم</h4>
</div>
<div class="row">
  <div class="row">
   
        @foreach ($products as $pro)
    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
      <div class="card w-100 my-2 shadow-2-strong">
        <img src="{{asset($pro->photo)}}" class="card-img-top" style="aspect-ratio: 1 / 1" />
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">{{$pro['name']}}</h5>
          <p class="card-text">{{$pro['description']}}</p>
          <p class="card-text">{{$pro['prix']}}دينار جزائري</p>
          <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
           
            <a href={{'addcart/'.$pro['id']}} class="btn btn-primary shadow-0 me-1">اضافة عنصر للسلة</a>
         

        
            <a href={{'delete/'.$pro['id']}} class="btn btn-light border px-2 pt-2 icon-hover">حذف<i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
          </div>
        </div>
      
  </div>
</div>
@endforeach

    </div>
  </div>
  
  
 
  
      
 
 
</section>
@endsection
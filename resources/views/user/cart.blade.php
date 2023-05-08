

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-12">
    <div class="dropdown">
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
        
        {{--<img src="{{asset('img')}}/{{$details['photo']}}" />--}}
        <img src="{{$details['photo']}}" class="card-img-top" style="aspect-ratio: 1 / 1" />
      
      </div>
      <div class="col-lg-8 col-sm-8 cart-detail-product">
        <p>{{$details['name']}}</p><span class="price texte-info">da{{$details['prix']}}</span>
      </div>

    </div>
    @endforeach
        
    @endif
   
</div>
  </div>
</div>
</div>
<form  action="{{url('user/pay')}}" method="POST">
    @csrf

    <input type="hidden" name="amount" value="200">
    <button  type="submit"  class="btn btn-primary shadow-0 me-1" > شراء </button>
</form>
</div>


   
</div>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    
     
   
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">

        body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
  background: #555;
}

.container {
  max-width: 500px;
  max-height: 100%;
  margin: auto;
  background: white;
  padding: 10px;
}
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
  border: 3px solid green; 
}
.btn{
  background-color: rgb(42, 124, 21);
  padding: 15px;
  height: 50px;
  width: 200px;
  color: aliceblue;
}

        







    </style>
</head>
<body>

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
    <div class="center">
    <button  type="submit" class="btn" > شراء </button>
    </div>
   
</form>
</div>


   
</div>
</body>
</html>



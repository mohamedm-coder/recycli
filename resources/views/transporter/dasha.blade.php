@extends('layouts.transporter')
@section('content')
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
  <div>

    <h4>مرحبا بك </h4>
  </div>


  <div class="row">
    <div class="row">

      <div class="w3-third">
        <div class="w3-card w3-container" style="min-height:360px">
        <h3>اضف سيارتك</h3><br>
        <i class="fa fa-shopping-cart w3-margin-bottom w3-text-green" style="font-size:120px"></i>
        <p>نوفر عليك الجهد و الوقت </p>
      
   
      <a href="{{url('transporter/adds')}}" class="w3-button  w3-green">اضافة</a>
        </div>
      </div>


      <div class="w3-third">
        <div class="w3-card w3-container" style="min-height:360px">
        <h3>عرض سيارتك</h3><br>
        <i class="fa fa-shopping-cart w3-margin-bottom w3-text-green" style="font-size:120px"></i>
        <p>نوفر عليك الجهد و الوقت </p>
      
   
      <a href="{{url('transporter/addvehicule')}}" class="w3-button  w3-green">عرض السيارات</a>
        </div>
      </div>
    </div>
  </div>


@endsection
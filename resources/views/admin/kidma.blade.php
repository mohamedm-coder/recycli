@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    
     
   
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">

table {
    border-collapse: collapse;
    margin: auto;
  

}

td, th /* Mettre une bordure sur les td ET les th */ {
    border: 1px solid black;
    padding: 5px;
    height: 15px;
    width: 500px;
    color: rgb(7, 1, 20);
}

        







    </style>
</head>
<body>
<table>
 <tr>
    <th>رقم الهاتف</th>
   
    <th>العنوان</th>
  
    <th>تفاصيل</th>

    <th>حذف</th>
 </tr>
 @foreach ($kidmas as $pro)
 <tr>
    <td>{{$pro['phone']}}</td>
    <td>{{$pro['address']}}</td>
    <td>{{$pro['location']}}</td>
    <td><a href={{'deleteeee/'.$pro['id']}}>delete</a></td>
 </tr>
     
 @endforeach
</table>


@endsection
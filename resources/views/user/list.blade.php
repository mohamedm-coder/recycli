@extends('layouts.user')
@section('content')
<table>
 <tr>
    <td>name</td>
    <td>description</td>
    <td>image</td>
    <td>prix</td>
    <td>delete</td>
 </tr>
 @foreach ($products as $pro)
 <tr>
    <td>{{$pro['name']}}</td>
    <td>{{$pro['description']}}</td>
    <td>{{$pro['image']}}</td>
    <td>{{$pro['prix']}}</td>
    <td><a href={{'delete/'.$pro['id']}}>delete</a></td>
 </tr>
     
 @endforeach
</table>


@endsection
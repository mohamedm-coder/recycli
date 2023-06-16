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
            width: 80%;
            font-family: Arial, sans-serif;
        }

        th, td {
            border: 2px solid black;
            padding: 15px;
            text-align: center;
            font-size: 18px;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #333;
            text-transform: uppercase;
        }

        td a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        td a:hover {
            text-decoration: underline;
        }

        body {
            background-color: #f5f5f5;
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
        @foreach ($yad as $pro)
        <tr>
            <td>{{$pro['phone']}}</td>
            <td>{{$pro['address']}}</td>
            <td>{{$pro['location']}}</td>
            <td><a href={{'deleteeeee/'.$pro['id']}}>حذف</a></td>
        </tr>
        @endforeach
    </table>
@endsection

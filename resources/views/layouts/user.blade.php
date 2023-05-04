<!doctype html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel='stylesheet'href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
   <link rel='stylesheet'href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css'>

 <title>رسكلي</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}

    <!-- Scripts -->
     <link rel="stylesheet" href="{{asset("user/vendors/mdi/css/materialdesignicons.min.css")}}">
  <link rel="stylesheet" href="{{asset("user/vendors/base/vendor.bundle.base.css")}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset("user/vendors/datatables.net-bs4/dataTables.bootstrap4.css")}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset("user/css/style.css")}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset("user/images/favicon.png")}}" />
    @livewireStyles

</head>
<body>

    <div class="container-scroller">
        @include('layouts.user.inc.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('layouts.user.inc.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
      <script src="{{asset("user/vendors/base/vendor.bundle.base.js")}}"></script>
         <script src="{{asset("user/vendors/datatables.net/jquery.dataTables.js")}}"></script>
       <script src="{{asset("user/vendors/datatables.net-bs4/dataTables.bootstrap4.js")}}"></script>
         <script src="{{asset("user/js/off-canvas.js")}}"></script>
        <script src="{{asset("user/js/hoverable-collapse.js")}}"></script>
        <script src="{{asset("user/js/template.js")}}"></script>
          <script src="{{asset("user/js/dashboard.js")}}"></script>
        <script src="{{asset("user/js/data-table.js")}}"></script>
         <script src="{{asset("user/js/jquery.dataTables.js")}}"></script>
         <script src="{{asset("user/js/dataTables.bootstrap4.js")}}"></script>
        






    @livewireStyles
</body>
</html>
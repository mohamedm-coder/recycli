@extends('admin.dashboard')
@section('content')
    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">add user</div>

                <div class="card-body">
<form action="{{url('admin/addtransporters')}}" method="POST">
    @csrf
<div>
    <label>name</label>
    <input type="text" name="name" required=''>
    
</div>
<div>
    <label>email</label>
    <input type="email" name="email"  required=''  >
    
</div>
<div>
    <label>password</label>
    <input type="password" name="password" required=''>
    
</div>
<div>
    <input type="submit">
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
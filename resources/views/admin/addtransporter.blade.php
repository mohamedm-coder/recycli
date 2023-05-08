@extends('admin.dashboard')
@section('content')
    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">اضافة ناقل</div>

                <div class="card-body">
<form action="{{url('admin/addtransporters')}}" method="POST">
    @csrf
    <div class="row mb-3">
        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('الاسم الكامل') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="current-name">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

<div class="row mb-3">
    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('ايمايل') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('كلمة السر') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
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
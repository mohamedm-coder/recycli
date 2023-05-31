@extends('layouts.user')
@section('content')
<div class="row"> 
    <div class="col-md-12"> 
        <div class="card"> 
            <div class="card-header"> 
                <h4> اضافة مواد</h4>
            
                <a href="{{url('product')}}" class="btn btn-primary btn-sm texte white float-end" > back</a>
            
                </div>
                <div class="card-body">
                    <form action= "{{url('product')}}"  method="POST" enctype="multipart/form-data"   >
                        @csrf
                        
                       
                     
                    
                        <div class="row mb-3">
                            <label for="name" >{{ __('اسم') }}</label>

                            <div class="col-mb-3">
                                <input id="name" type="text" class="form-control @error('email') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" >{{ __('وصف') }}</label>

                            <div class="col-mb-3">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" >{{ __('صورة') }}</label>

                            <div class="col-mb-3">
                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo" autofocus>

                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>






                        <div class="row mb-3">
                            <label for="prix" >{{ __('السعر') }}</label>

                            <div class="col-mb-3">
                                <input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix') }}" required autocomplete="prix" autofocus>

                                @error('prix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                    
                        
                        <div class="col-md-12  mb-3">
                            <button type="submit" > اضافة</button>
                        </div>   


                    </form>
        </div>


        </div>
    </div>
    

</div>
@endsection
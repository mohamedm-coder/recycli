@extends('layouts.geust')
@section('content')
<div class="row"> 
   
  
        @foreach ($vehicules as $pro)
     
       
        
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
            <div class="card w-100 my-2 shadow-2-strong">
              <img src="{{asset($pro->photo)}}" class="card-img-top" style="aspect-ratio: 1 / 1" />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{$pro['name']}}</h5>
                <p class="card-text">{{$pro['matricule']}}</p>
                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <form  action="{{url('pay')}}" method="POST">
                        @csrf
              
                  
            <input type="hidden" name="amount" value="200">
            <button  type="submit"  class="btn btn-primary shadow-0 me-1" > نقل بواسطة</a></button>
                </form>
                 
                </div>
              </div>
            </div>
          </div>
            
        @endforeach
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <img src="téléchargement (4).jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">camion</h5>
              <p class="card-text">نقل بضاءع</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                  <form  action="{{url('pay')}}" method="POST">
                      @csrf
            
                
          <input type="hidden" name="amount" value="200">
          <button  type="submit"  class="btn btn-primary shadow-0 me-1" > نقل بواسطة</a></button>
              </form>
               
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <img src="téléchargement (5).jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">ناقل </h5>
              <p class="card-text">نقل و فرز</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                  <form  action="{{url('pay')}}" method="POST">
                      @csrf
            
                
          <input type="hidden" name="amount" value="200">
          <button  type="submit"  class="btn btn-primary shadow-0 me-1" > نقل بواسطة</a></button>
              </form>
               
              </div>
            </div>
          </div>
        </div>

       
        
        

</div>

@endsection
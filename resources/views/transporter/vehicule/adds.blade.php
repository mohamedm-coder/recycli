@extends('layouts.transporter')
@section('content')
<div class="row"> 
    <div class="col-md-12"> 
        <div class="card"> 
            <div class="card-header"> 
                <h4> add categorie</h4>
            
                <a href="{{url('')}}" class="btn btn-primary btn-sm texte white float-end" > back</a>
            
                </div>
                <div class="card-body">
                    <form action="{{url('transporter/addvehicule')}}" method="post" enctype="multipart/form-data"   >
                       @csrf
                        
                       
                     
                    
                        <div class="mb-3">
                            <label> name</label>
                            <input type="text" name="name" class="form-control">


                        </div>
                       
                        <div class="mb-3">
                            <label> matricule</label>
                            <input type="text" name="matricule" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label> photo</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                       
                      
                    
                        
                        <div class="col-md-12  mb-3">
                            <button type="submit" > add</button>
                        </div>   


                    </form>
        </div>


        </div>
    </div>
    

</div>
@endsection
@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>


  <div class="row">
    <div class="row">

      <div class="w3-third">
        <div class="w3-card w3-container" style="min-height:360px">
        <h3>خدمة البيع و الشراء</h3><br>
        <i class="fa fa-shopping-cart w3-margin-bottom w3-text-green" style="font-size:120px"></i>
        <p>نوفر عليك الجهد و الوقت </p>
      
   
      <a href="{{url('admin/product')}}" class="w3-button  w3-green">عرض الموارد </a>
        </div>
      </div>
        
      <div class="w3-third">
        <div class="w3-card w3-container" style="min-height:360px">             
          <h3>خدمة النقل</h3><br>
          <i class="	fa fa-taxi w3-margin-bottom w3-text-green" style="font-size:120px"></i>
              <p>معنا يمكنك الاستفادة من خدمة النقل بضغطة واحدة و بكل سهولة .</p>
              
            <a href="{{url('admin/addtransporter')}}" class="w3-button  w3-green">اضافة ناقل</a>
          </div>
        </div>
  
        <div class="w3-third">
          <div class="w3-card w3-container" style="min-height:360px">  
      <h3>خدمات التنظيف</h3><br>
      <i class="	fa fa-medkit w3-margin-bottom w3-text-green" style="font-size:120px"></i>
      <p>بنقرة واحدة فقط من منزلك يمكنك تنظيف حيك او الاستفادة من خدمة تنظيف منزلك كن ذكيا نحن فقط نقوم بذلك من اجلك.</p>
    <a href="{{url('admin/kidma')}}" class="w3-button  w3-green">طلبات التنظيف</a>
  </div>
    </div>

    <div class="w3-third">
      <div class="w3-card w3-container" style="min-height:360px"> 
      <h3>الابلاغ عن موقع مليئ بالنفايات</h3>
    </header>
    <i class="	fa fa-map-marker w3-margin-bottom w3-text-green" style="font-size:120px"></i>

      <p>يمكنك الابلاغ عن موقع بكل سهولة عبر الخريطة نحن نقدر لك ذلك شكر جزيلا علو وقتك.</p><br>
    
    <a href="{{url('admin/loc')}}" class="w3-button  w3-green">المواقع التي تم الابلاغ عنها </a> 
  </div>
    </div>
    <div class="w3-third">
      <div class="w3-card w3-container" style="min-height:360px"> 
      <h3>طلب عامل تنظيف</h3>
      <i class="	fa fa-user-o w3-margin-bottom w3-text-green" style="font-size:120px"></i>
      <p>يمكنك طلب عامل تنظيف بكل سهولة فقط بنقرة واحدة ما عليك الا مساعدتنا ببعض المعلومات فقط و نحن سنتصل بك فورا.</p><br>
    
    <a href="{{url('admin/kidma')}}" class="w3-button  w3-green">طلبات عامل تنظيف</a>
  </div>
</div>
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:360px"> 
      <h3>طلبات</h3>
      <i class="	fa fa-check-square w3-margin-bottom w3-text-green" style="font-size:120px"></i>

        <p>طلبات الشراء يد بيد.</p><br>
   
    <a href="{{url('admin/yd')}}" class="w3-button  w3-green">اضغط هنا </a>
  </div>
</div>
  
  
 

  


</div>
</div>

</body>
</html>
@endsection
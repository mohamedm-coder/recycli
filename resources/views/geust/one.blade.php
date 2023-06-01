@extends('layouts.geust')
@section('content')

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>


  <div class="row">
    <div class="row">

        <div class="w3-card-4" style="width:33%; margin-top:-1em;padding:10px;border-width:2px;border-color:black;border-style:solid;background-color:white;">
            <header class="w3-container w3-yellow">
              <h3>خدمات البيع و الشراء</h3>
            </header>
            <div class="w3-container">
              <p>بامكانك بيع او شراء منتوجات بكل سهولة</p>
              <hr>
               <i class="fa fa-shopping-cart" aria-hidden="true" ></i>
              <p>يمكنك معنا القيام بشراء المواد المرسكلة او بيع بعض المواد و اكتساب المال من خلالنا ما عليك الى الضغط على بيع و اضافة تفاصيلك .</p><br>
            </div>
            <a href="{{url('dash')}}" class="w3-button  w3-green">شراء منتوج</a>
            <a href="{{url('product')}}" class="w3-button  w3-green">بيع منتوج</a>
          </div>
          <div class="w3-card-4" style="width:33%; margin-top:-1em;padding:10px;border-width:2px;border-color:black;border-style:solid;background-color:white;">
            <header class="w3-container w3-yellow">
              <h3>خدمات النقل</h3>
            </header>
            <div class="w3-container">
              <p>الاستفادة من خدمة النقل بكل سهولة</p>
              <hr>
              <i class="fa fa-taxi" aria-hidden="true"></i>
              <p>معنا يمكنك الاستفادة من خدمة النقل بضغطة واحدة و بكل سهولة .</p>
              <br>
              <br>
              <br>
            </div>
            <a href="{{url('addvehicule')}}" class="w3-button  w3-green">الانتقال لخدمات النقل</a>
          </div>
  
  <div class="w3-card-4" style="width:33%; margin-top:-1em;padding:10px;border-width:2px;border-color:black;border-style:solid;background-color:white;">
    <header class="w3-container w3-yellow">
      <h3>خدمات التنظيف</h3>
    </header>
    <div class="w3-container">
      <p>تمكنك هاته الخدمة من طلب تنظيف منزل او الاشتراك معنا لخدمة تنظيف حيك</p>
      <hr>
      <i class="fa fa-medkit" aria-hidden="true"></i>
      <p>بنقرة واحدة فقط من منزلك يمكنك تنظيف حيك او الاستفادة من خدمة تنظيف منزلك كن ذكيا نحن فقط نقوم بذلك من اجلك.</p><br>
    </div>
    <a href="{{url('tandif')}}" class="w3-button  w3-green">اضغط للاستفادة من الخدمة</a>
  </div>
  <div class="w3-card-4"  style="width:33%; margin-top:1em;padding:10px;border-width:2px;border-color:black;border-style:solid;background-color:white;">
    <header class="w3-container w3-yellow">
      <h3>الابلاغ عن موقع مليئ بالنفايات</h3>
    </header>
    <div class="w3-container">
      <p>يمكنك ذلك بسهولة</p>
      <hr>
      <i class="fa fa-map-marker" aria-hidden="true"></i>
      <p>يمكنك الابلاغ عن موقع بكل سهولة عبر الخريطة نحن نقدر لك ذلك شكر جزيلا علو وقتك.</p><br>
    </div>
    <a href="{{url('google')}}" class="w3-button  w3-green">ابلغ عن موقع من هنا</a> 
  </div>
  <div class="w3-card-4" style="width:33%; margin-top:1em;padding:10px;border-width:2px;border-color:black;border-style:solid;background-color:white;">
    <header class="w3-container w3-yellow">
      <h3>طلب عامل تنظيف</h3>
    </header>
    <div class="w3-container">
      <p>يمكنك طلب عامل تنظيف بكل سهولة </p>
      <hr>
      <i class="fa fa-user-o" aria-hidden="true"></i>
      <p>يمكنك طلب عامل تنظيف بكل سهولة فقط بنقرة واحدة ما عليك الا مساعدتنا ببعض المعلومات فقط و نحن سنتصل بك فورا.</p><br>
    </div>
    <a href="{{url('tandif')}}" class="w3-button  w3-green">اضغط لطلب عامل تنظيف</a>
  </div>
  <div class="w3-card-4" style="width:33%; margin-top:1em;padding:10px;border-width:2px;border-color:black;border-style:solid;background-color:white;">
    <header class="w3-container w3-yellow">
      <h3>تبرع و كن افضل</h3>
    </header>
    <div class="w3-container">
      <p>كن محسنا </p>
      <hr>
      <i class="fa fa-check-square" aria-hidden="true"></i>      <p>يمكنك التبرع حت ببعض المواد التي لن تستفيد منها انت بكل سهولة معنا .</p><br>
    </div>
    <a href="{{url('don')}}" class="w3-button  w3-green">اضغط هنا </a>
  </div>
  


</div>
</div>

</body>
</html>
@endsection
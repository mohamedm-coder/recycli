@extends("layouts.app")
@section("title","رسكلي")
@section('content')

   
       
    <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">تفاصيل أكثر حول الموقع </h5>
            
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
    هنا تجد كل جديد و تفصيل تتعلق بموقعنا 
             </div>
             <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">غلق</button>
             <div class="modal-header">
                <button type="button" class="btn btn-warning"> <a href="{{url('user/google')}}" data-dismiss="modal" data-target="#"  >الابلاغ عن موقع مليئ بالنفايات</a></button>
              </div>            
             </div>
         </div>
         </div>
     </div>
     <div class="modal fade" id="exampleModall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">اهمية الرسكلة</h5>
           
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
   هنا تجد كل جديد و تفصيل تتعلق بموقعنا 
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">غلق</button>
            <div class="modal-header">
               <button type="button" class="btn btn-warning"> <a href="{{url('user/google')}}" data-dismiss="modal" data-target="#"  >الابلاغ عن موقع مليئ بالنفايات</a></button>
               <button type="button" class="btn btn-warning"> <a href="{{url('user/google')}}" data-dismiss="modal" data-target="#"  >الابلاغ عن موقع مليئ بالنفايات</a></button>
             </div>            
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModallll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> خطوات للرسكلة</h5>
           
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
   هنا تجد كل جديد و تفصيل تتعلق بموقعنا 
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">غلق</button>
            <div class="modal-header">
               <button type="button" class="btn btn-warning"> <a href="{{url('user/google')}}" data-dismiss="modal" data-target="#"  >الاالنفايات</a></button>
               <button type="button" class="btn btn-warning"> <a href="{{url('user/google')}}" data-dismiss="modal" data-target="#"  >خطوات الرسكلة</a></button>
             </div>            
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">المواد القابلة للرسكلة</h5>
           
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
   هنا تجد كل جديد و تفصيل تتعلق بموقعنا 
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">غلق</button>
            <div class="modal-header">
               <button type="button" class="btn btn-warning"> <a href="{{url('user/google')}}" data-dismiss="modal" data-target="#"  >الابلاغ عن موقع مليئ بالنفايات</a></button>
               <button type="button" class="btn btn-warning"> <a href="{{url('user/google')}}" data-dismiss="modal" data-target="#"  >الابلاغ عن موقع مليئ بالنفايات</a></button>
             </div>            
            </div>
        </div>
        </div>
    </div>
 
 

 
 <!-- Responsive navbar-->
 
 <!-- Header-->
 
 <!-- Features section-->

 <div class="owl-carousel owl-theme">
    <div class="item">
        <header class="bg-success py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-warning mb-2">رسكلي هو موقع الكتروني يربط جميع من لديه علاقة بمجال الرسكلة</h1>
                            <p class="lead text-white-50 mb-4">نضع هذا الموقع تحت تصرفكم من اجل اكتساب خبرة اوسع و من اجل تفاصيل اكثر نحو عالم الرسكلة</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">خطوة للامام</a>
                               
       
                                <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-light btn-lg px-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        تفاصيل اكثر
                                    </button>
       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
 
        <div class="item">
            <header class=" py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="mh-100" style="width: 90%; height: 425px; ">
                            <img src="https://media.istockphoto.com/id/1371302120/photo/recyclage-du-verre.jpg?s=612x612&w=0&k=20&c=QTP-BCleuGdvtPuWLmyEtkQK2ZW41n4J0Ajo1nxdg4U="  /> 
                          
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="item">
            <header class=" py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="mh-200" style="width: 90%; height:425px; ">
                            <img src="https://media.istockphoto.com/id/1132945386/photo/recycled.jpg?s=612x612&w=0&k=20&c=lPus1WUYBZ_NiTsI4GqkpDeRKoS7Wd_SxwBwLTKJ878="  /> 
                          
                        </div>
                    </div>
                </div>
            </header>
        </div>
    
    

   {{--<div class="w-75 p-3" > 

    <img src="
 </div>

  
<div class="text-center">
    <img src="" class="img-fluid" alt="Responsive image" />

  
 </div>--}}
    
</div>
 <section class="py-5 border-bottom" id="features">
     <div class="container px-5 my-5">
         <div class="row gx-5">
             <div class="col-lg-4 mb-5 mb-lg-0">
                 <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                    <i class="bi bi-collection"></i>
                  
                </div>
                 <h2 class="h4 fw-bolder">المواد القابلة للرسكلة</h2>
                 <p>
                   
 
                    لورق والكرتون تشمل المواد القابلة للرسكلة مجموعة واسعة من المواد التي يمكن إعادة تدويرها واستخدامها مرة أخرى بدلاً من التخلص منها في النفايات. وتشمل هذه المواد الورق و الكرتون البلاستيك: 
                    المعادن
                    الملابس
                    الأخشاب

</p>
                 <a class="text-decoration-none" href="#!"  data-bs-toggle="modal" data-bs-target="#exampleModalll">
                     اضغط للمزيد
                     <i class="bi bi-arrow-right"></i>
                 </a>
             </div>
             <div class="col-lg-4 mb-5 mb-lg-0">
                 <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"> </i></div>
                 <h2 class="h4 fw-bolder">اهمية الرسكلة</h2>
                 <p>1- حماية البيئة

                    2-توفير الموارد الطبيعية
                    
                    3- تقليل تكاليف النفايات.</p>
                 <a class="text-decoration-none" href="#!"  data-bs-toggle="modal" data-bs-target="#exampleModall">
                     اضغط للمزيد
                     <i class="bi bi-arrow-right"></i>
                 </a>
             </div>
             <div class="col-lg-4">
                 <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                 <h2 class="h4 fw-bolder">خطوات الرسكلة</h2>
                 <p>
                   
                 1- جمع المواد القابلة للرسكلة

                    2-الفرز
                    
                    3- المعالجة
</p>
                 <a class="text-decoration-none" href="#!"  data-bs-toggle="modal" data-bs-target="#exampleModallll">
                  اضغط للمزيد
                     <i class="bi bi-arrow-right"></i>
                 </a>
             </div>
         </div>
     </div>
 </section>
 <!-- Pricing section-->
 <section class="bg-light py-5 border-bottom" id="adamat">
     <div class="container px-5 my-5">
         <div class="text-center mb-5">
             <h2 class="fw-bolder">الخدمات المقدمة</h2>
             <p class="lead mb-0">حسب خطط مدروسة من طرفنا</p>
         </div>
         <div class="row gx-5 justify-content-center">
             
             <div class="col-lg-6 col-xl-4">
                 <div class="card mb-5 mb-xl-0">
                     <div class="card-body p-5">
                         <div class="small text-uppercase fw-bold text-muted">خطة 1</div>
                         <div class="mb-3">
                             <span class="display-4 fw-bold">بيع</span>
                             <span class="display-4 fw-bold">شراء</span>
                             <span class="text-muted">/  مواد الرسكلة</span>
                         </div>
                         <ul class="list-unstyled mb-4">
                             <li class="mb-2">
                                 <i class="bi bi-check text-primary"></i>
                                 <strong>تسجيل حساب</strong>
                             </li>
                             <li class="mb-2">
                                 <i class="bi bi-check text-primary"></i>
                                 تسجيل الدخول لحسابك
                             </li>
                             <li class="mb-2">
                                 <i class="bi bi-check text-primary"></i>
                                 مشاهدة عروض البيع 
                             </li>
                             <li class="mb-2">
                                 <i class="bi bi-check text-primary"></i>
                                 امكانية البيع 
                             </li>
                             <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                 امكانية نقل مواد
                             </li>
                             <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                امكانية شراء بعض المواد
                             </li>
                      
                             <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                         حساب مجاني
                             </li>
                         </ul>
                         <div class="d-grid"><a class="btn btn-outline-primary" href="#!">اختر الخطة</a></div>
                     </div>
                 </div>
             </div>
             
             <!-- Pricing card pro-->
             <div class="col-lg-6 col-xl-4">
                 <div class="card mb-5 mb-xl-0">
                     <div class="card-body p-5">
                         <div class="small text-uppercase fw-bold">
                             <i class="bi bi-star-fill text-warning"></i>
                             Pro
                         </div>
                         <div class="mb-3">
                             <span class="display-4 fw-bold">الابلاغ عن موقع مليئ بالنفايات</span>
                             <span class="text-muted">/ </span>
                         </div>
                         <ul class="list-unstyled mb-4">
                             <li class="mb-2">
                                 <i class="bi bi-check text-primary"></i>
                                 <strong>تسجيل حساب</strong>
                             </li>
                             <li class="mb-2">
                                 <i class="bi bi-check text-primary"></i>
                                تسجيل الدخول
                             </li>
                             <li class="mb-2">
                                 <i class="bi bi-check text-primary"></i>
                           اختيار الابلاغ  عن موقع
                             </li>
                             <li class="mb-2">
                                 <i class="bi bi-check text-primary"></i>
                         اختيار الموقع من الخريطة
                             </li>
                             <li class="mb-2">
                                 <i class="bi bi-check text-primary"></i>
                              تصوير صورة
                             </li>
                             <li class="mb-2">
                                 <i class="bi bi-check text-primary"></i>
                                 الابلاغ
                             </li>
                            
                         </ul>
                         <div class="d-grid"><a class="btn btn-primary" href="#!">اختيار الخطة</a></div>
                     </div>
                 </div>
             </div>
             <!-- Pricing card enterprise-->
             <div class="col-lg-6 col-xl-4">
                 <div class="card">
                     <div class="card-body p-5">
                         <div class="small text-uppercase fw-bold text-muted">خدمات النقل</div>
                         <div class="mb-3">
                             <span class="display-4 fw-bold">نقل الموارد</span>
                             <span class="text-muted">/ </span>
                         </div>
                         <ul class="list-unstyled mb-4">
                             <li class="mb-2">
                                 <i class="bi bi-check text-primary"></i>
                                 <strong>تسجيل حساب</strong>
                             </li>
                             <li class="mb-2">
                                 <i class="bi bi-check text-primary"></i>
                                 تسجيل الدخول
                             </li>
                             <li class="mb-2">
                                 <i class="bi bi-check text-primary"></i>
                                 اختر خدمات النقل
                             </li>
                             <li class="mb-2">
                                 <i class="bi bi-check text-primary"></i>
اختيار وسيلة نقل                             </li>
                             <li class="mb-2">
                                 <i class="bi bi-check text-primary"></i>
                            الدفع
                             </li>
                             <li class="mb-2">
                                 <i class="bi bi-check text-primary"></i>
                           هنيئا لك
                             </li>
                            
                         <div class="d-grid"><a class="btn btn-outline-primary" href="#!">اختر خطة</a></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Testimonials section-->
 <section class="py-5 border-bottom">
     <div class="container px-5 my-5 px-5">
         <div class="text-center mb-5">
             <h2 class="fw-bolder">اراء المستخدمين</h2>
             <p class="lead mb-0">عملاءنا يحبون التعامل عبر موقعنا</p>
         </div>
         <div class="row gx-5 justify-content-center">
             <div class="col-lg-6">
                 <!-- Testimonial 1-->
                 <div class="card mb-4">
                     <div class="card-body p-4">
                         <div class="d-flex">
                             <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                             <div class="ms-4">
                                 <p class="mb-1">شكرًا لك على تقديم منتج رائع بهذا الشكل. لقد أحببنا العمل معك ومع الفريق بأكمله ، وسنوصي بك للآخرين!</p>
                                 <div class="small text-muted">- Client Name, Location</div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- Testimonial 2-->
                 <div class="card">
                     <div class="card-body p-4">
                         <div class="d-flex">
                             <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                             <div class="ms-4">
                                 <p class="mb-1">الفريق بأكمله كان مساعدة كبيرة في تجميع الأمور لشركتنا وعلامتنا التجارية</p>
                                 <div class="small text-muted">- Client Name, Location</div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Contact section-->
 <section class="bg-light py-5">
     <div class="container px-5 my-5 px-5">
         <div class="text-center mb-5">
             <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
             <h2 class="fw-bolder">ارائكم</h2>
             <p class="lead mb-0">نحب ان نسمع منكم</p>
         </div>
         <div class="row gx-5 justify-content-center">
             <div class="col-lg-6">
                 <!-- * * * * * * * * * * * * * * *-->
                 <!-- * * SB Forms Contact Form * *-->
                 <!-- * * * * * * * * * * * * * * *-->
                 <!-- This form is pre-integrated with SB Forms.-->
                 <!-- To make this form functional, sign up at-->
                 <!-- https://startbootstrap.com/solution/contact-forms-->
                 <!-- to get an API token!-->
                 <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                     <!-- Name input-->
                     <div class="form-floating mb-3">
                         <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                         <label for="name">الاسم</label>
                         <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                     </div>
                     <!-- Email address input-->
                     <div class="form-floating mb-3">
                         <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                         <label for="email">الايمايل</label>
                         <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                         <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                     </div>
                     <!-- Phone number input-->
                     <div class="form-floating mb-3">
                         <input class="form-control" id="phone" type="tel" placeholder="(213) 666843230" data-sb-validations="required" />
                         <label for="phone">رقم الهاتف</label>
                         <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                     </div>
                     <!-- Message input-->
                     <div class="form-floating mb-3">
                         <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                         <label for="message">رسالتك</label>
                         <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                     </div>
                     <!-- Submit success message-->
                     <!---->
                     <!-- This is what your users will see when the form-->
                     <!-- has successfully submitted-->
                     <div class="d-none" id="submitSuccessMessage">
                         <div class="text-center mb-3">
                             <div class="fw-bolder">تم  رسكلي تشكرك</div>
                             
                             <br />
                             <a href="https://startbootstrap.com/solution/contact-forms">RECYCLII.COM</a>
                         </div>
                     </div>
                     <!-- Submit error message-->
                     <!---->
                     <!-- This is what your users will see when there is-->
                     <!-- an error submitting the form-->
                     <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                     <!-- Submit Button-->
                     <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">ارسل</button></div>
                 </form>
             </div>
         </div>
     </div>
 </section>
 <!-- Footer-->
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
<!-- Section: Social media -->
<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" id="contacts">
<!-- Left -->
<div class="me-5 d-none d-lg-block">
 <span>اتصل بنا عبر مواقع التواصل الاجتماعي:</span>
</div>
<!-- Left -->

<!-- Right -->
<div>
 <a href="https://www.facebook.com/midomom01/" class="me-4 text-reset">
   <i class="fab fa-facebook-f"></i>
 </a>
 <a href="" class="me-4 text-reset">
   <i class="fab fa-twitter"></i>
 </a>
 <a href="" class="me-4 text-reset">
   <i class="fab fa-google"></i>
 </a>
 <a href="" class="me-4 text-reset">
     <i class="fa fa-instagram" aria-hidden="true"></i>
 </a>
 <a href="" class="me-4 text-reset">
   <i class="fab fa-linkedin"></i>
 </a>
 <a href="https://github.com/mido-coder" class="me-4 text-reset">
   <i class="fab fa-github"></i>
 </a>
</div>
<!-- Right -->
</section>
<!-- Section: Social media -->

<!-- Section: Links  -->
<section class="">
<div class="container text-center text-md-start mt-5">
 <!-- Grid row -->
 <div class="row mt-3">
   <!-- Grid column -->
   <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
     <!-- Content -->
     <h6 class="text-uppercase fw-bold mb-4">
       <i class="fas fa-gem me-3"></i>Recycli
     </h6>
     <p>
       معنا دائما افضل
     </p>
   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
     <!-- Links -->
     <h6 class="text-uppercase fw-bold mb-4">
      المنتجات
     </h6>
     <p>
       <a href="#!" class="text-reset">زجاج</a>
     </p>
     <p>
       <a href="#!" class="text-reset">بلاستيك</a>
     </p>
     <p>
       <a href="#!" class="text-reset">ورق</a>
     </p>
     <p>
       <a href="#!" class="text-reset">حديد</a>
     </p>
   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
     <!-- Links -->
     <h6 class="text-uppercase fw-bold mb-4">
       Useful links
     </h6>
     <p>
       <a href="#!" class="text-reset">الاسعار</a>
     </p>
     <p>
       <a href="#!" class="text-reset">اعدادت</a>
     </p>
     <p>
       <a href="#!" class="text-reset">الادوات</a>
     </p>
     <p>
       <a href="#!" class="text-reset">مساعدة</a>
     </p>
   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-center">
     <!-- Links -->
     <h6 class="text-uppercase fw-bold mb-4 ">اتصل بنا</h6>
     <p><i class="fas fa-home me-3"></i> جامعة  الشيخ العربي تبسي</p>
     <p>
       <i class="fas fa-envelope me-3"></i>
       Recycli@gmail.com
     </p>
     <p><i class="fas fa-phone me-3"></i> + 213 666843230</p>
     <p><i class="fas fa-print me-3"></i> + 213 779182538</p>
   </div>
   <!-- Grid column -->
 </div>
 <!-- Grid row -->
</div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
© 2023 Copyright:
<a class="text-reset fw-bold" href="http://recyclii.herokuapp.com/">http://recyclii.herokuapp.com/</a>
<img src="recycli-plus-low-resolution-color-logo.png" height="100px" width="120px" class="rounded-circle"  >
</div>
<!-- Copyright -->
</footer>

@endsection
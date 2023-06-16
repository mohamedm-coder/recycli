<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('user/onee')}}">
          <i class="mdi mdi-home menu-icon  w3-text-green"></i>
          <span class="menu-title">الصفحة الرئيسية</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="fa fa-shopping-cart w3-margin-bottom w3-text-green"></i>
          <span class="menu-title"  >خدمات البيع  </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('user/product')}}">بيع </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('user/wahed')}}">المنتجات المضافة</a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{url('user/don')}}">
          <i class="	fa fa-check-square w3-margin-bottom w3-text-green" style="font-size:15px"></i>
          <span class="menu-title">تبرع</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('user/addvehicule')}}">
          <i class="fa fa-taxi w3-margin-bottom w3-text-green" style="font-size:15px"></i>
          <span class="menu-title">نقل</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('user/tandif')}}">
          <i class="	fa fa-medkit w3-margin-bottom w3-text-green"></i>
          <span class="menu-title">خدمات التنظيف</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('user/google')}}">
          <i class="fa fa-map-marker w3-margin-bottom w3-text-green"></i>
          <span class="menu-title">الابلاغ عن موقع مليئ بالنفايات</span>
        </a>
      </li>
     
    
    </ul>
  </nav>
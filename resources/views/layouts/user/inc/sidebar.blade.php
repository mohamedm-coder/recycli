<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('user/dash')}}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">الصفحة الرئيسية</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title"  >خدمات البيع  </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('user/product')}}">بيع </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('user/cart')}}">مشاهدات المبيعات في السلة</a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{url('user/don')}}">
          <i class="mdi mdi-chart-pie menu-icon"></i>
          <span class="menu-title">تبرع</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('user/addvehicule')}}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">نقل</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/icons/mdi.html">
          <i class="mdi mdi-emoticon menu-icon"></i>
          <span class="menu-title">خدمات التنظيف</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('user/map')}}">
          <i class="mdi mdi-chart-pie menu-icon"></i>
          <span class="menu-title">الابلاغ عن موقع مليئ بالنفايات</span>
        </a>
      </li>
     
    
    </ul>
  </nav>
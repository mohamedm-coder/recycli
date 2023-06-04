<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/dashboard')}}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">الرئيسية</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title"  >الموارد </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/categories/add')}}">اضافة </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/product')}}">مشاهدة</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/forms/basic_elements.html">
          <i class="mdi mdi-view-headline menu-icon"></i>
          <span class="menu-title">الفواتير</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href={{url("admin/leddon")}}>
          <i class="mdi mdi-chart-pie menu-icon"></i>
          <span class="menu-title">التبرعات</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/loc')}}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">المواقع التي تم الابلاغ عنها</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/kidma')}}">
          <i class="mdi mdi-emoticon menu-icon"></i>
          <span class="menu-title">طلبات التنظيف</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">صفحات المستخدمين</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/adduser')}}"> اضافة مستخدم </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/addtransporter')}}"> اضافة ناقل سلع </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> تسجيلات جديدة </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> تسجيل جديد </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> غلق </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="documentation/documentation.html">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">الصفحات</span>
        </a>
      </li>
    </ul>
  </nav>
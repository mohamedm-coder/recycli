<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('transporter/dasha')}}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">الرئيسية</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title"  >سيارات</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('transporter/adds')}}">اضافة سيارة</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('transporter/addvehicule')}}">مشاهدة السيارات</a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <i class="mdi mdi-chart-pie menu-icon"></i>
          <span class="menu-title">تبرع</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">نقل</span>
        </a>
      </li>
     
     
    
    </ul>
  </nav>
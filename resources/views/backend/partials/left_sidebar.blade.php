
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image"> 
          <img  src="/images/faces/iyad.jpg" alt="image"/>  
          <span class="online-status online"></span> </div>
        <div class="profile-name">
          <p class="name">اياد الجالوس</p>
          <p class="designation">مدير الموقع</p>
          <div class="badge badge-teal mx-auto mt-3">Online</div>
        </div>
      </div>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}">
      <span class="menu-title">لوحة التحكم</span></a>
    </li>
    

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> 
        <span class="menu-title">ادارة الاصناف</span>
        <i class="menu-arrow"></i></a>
        <div class="collapse" id="general-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.products') }}">ادارة الاصناف</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.product.create') }}">اضافة صنف جديدة</a></li>
          </ul>
        </div>
      </li>


    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#order-pages" aria-expanded="false" aria-controls="order-pages"> 
        <span class="menu-title">ادارة الطلبات</span>
        <i class="menu-arrow"></i></a>
        <div class="collapse" id="order-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.orders') }}">ادارة الطلبات</a></li>
          </ul>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#category-pages" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">ادارة التصنيفات</span><i class="menu-arrow"></i></a>
          <div class="collapse" id="category-pages">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ route('admin.categories') }}">ادارة التصنيفات</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('admin.category.create') }}">اضافة تصنيف جديد</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#brand-pages" aria-expanded="false" aria-controls="general-pages"> 
            <span class="menu-title">
            ادارة العلامات التجارية</span><i class="dropdown-menu btn-group"></i></a>
            <div class="collapse" id="brand-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brands') }}">ادارة العلامات التجارية</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brand.create') }}">اضافة علامة تجارية</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#division-pages" aria-expanded="false" aria-controls="general-pages"> <span class="menu-title">
            ادارة الثوابث</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="division-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.divisions') }}">ادارة المدن</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.division.create') }}">اضافة مدينة</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.districts') }}">ادارة المناطق</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.district.create') }}">اضافة منطقة</a></li>
              </ul>
            </div>
          </li>


         


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#slider-pages" aria-expanded="false" aria-controls="general-pages"> <span class="menu-title">
            ادارة عارض الصور</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="slider-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.sliders') }}">ادرة عارض الصور</a></li>
              </ul>
            </div>
          </li>


            <li class="nav-item">
              <a class="nav-link"  href="#district-pages">
                <form class="form-inline" action="{{ route('admin.logout') }}" method="post">
                  @csrf
                  <input type="submit" value="تسجيل خروج" class="btn btn-danger">
                </form>
              </a>

            </li>

          </ul>
        </nav>
        <!-- partial -->

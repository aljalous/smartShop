<!-- partial:partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a href="{{ route('admin.index') }}"><img class="smalllogoup" src="{{ asset('images/smartshoplogo.png') }}"
                alt="logo" /></a>
    </div>

    <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
            <li class="nav-item">
                <a href="{{  route('Pictures.show') }}" class="nav-link"><i class="mdi mdi-image-filter"></i>مكتبة الصور</a>
            </li>
            <li class="nav-item ">
                <a href="{{  route('admin.index') }}" class="nav-link"><i class="mdi mdi-email-outline"></i>الرئيسية</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="mdi mdi-calendar"></i>الروزنامة</a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                    data-toggle="dropdown">
                    <i class="mdi mdi-bell-ring"></i>
                    <span class="count">4</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="notificationDropdown">
                    <a class="dropdown-item">
                        <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                        </p>
                        <span class="badge badge-pill badge-warning float-right">مشاهدة الكل</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                                <i class="icon-info mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-medium">Application Error</h6>
                            <p class="font-weight-light small-text">
                                Just now
                            </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-warning">
                                <i class="icon-speech mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-medium">Settings</h6>
                            <p class="font-weight-light small-text">
                                Private message
                            </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-info">
                                <i class="icon-envelope mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-medium">New user registration</h6>
                            <p class="font-weight-light small-text">
                                2 days ago
                            </p>
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                    data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-email-variant"></i>
                    <span class="count">7</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="messageDropdown">
                    <div class="dropdown-item">
                        <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                        </p>
                        <span class="badge badge-info badge-pill float-right">View all</span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">

                        </div>
                        <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                                <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                            </h6>
                            <p class="font-weight-light small-text">
                                The meeting is الغاءled
                            </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="/images/faces/face2.jpg" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                                <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                            </h6>
                            <p class="font-weight-light small-text">
                                New product launch
                            </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="/images/faces/face24.jpg" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                                <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                            </h6>
                            <p class="font-weight-light small-text">
                                Upcoming board meeting
                            </p>
                        </div>
                    </a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="/images/faces/face24.jpg"  class="img-xs rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{ route('admin.update') }}">الملف الشخصي</a>
                    <a class="dropdown-item" href="#district-pages"> <form class="form-inline" action="{{ route('admin.logout') }}" method="post">
                      @csrf
                      <input type="submit" value="تسجيل خروج" class="btn btn-danger">
                  </form> </a>
                </div>
            </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>

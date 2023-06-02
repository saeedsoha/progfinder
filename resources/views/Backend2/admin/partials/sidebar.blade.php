

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" style="height:60px;" href="/"><img src="{{asset('upload/logo/logo.png')}}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset('Backend/assets/images/logo-mini.svg')}}" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle" src="{{$userData->img ? asset($userData->img) : asset('upload/no_user_image.png')}}" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">{{ucfirst($userData->name)}} Admin</h5>
              <span>{{$userData->title}}</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
              </div>
            </a>
          </div>
        </div>
      </li>


      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('dashboard')}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

       {{-- Profile Start --}}
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-account"></i>
          </span>
          <span class="menu-title">Profile</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('profile.edit')}}">Your Profile Setting</a></li>
          </ul>
        </div>
      </li>
      {{-- Profile End --}}

      {{-- Users --}}
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('users')}}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Users</span>
        </a>
      </li>
    {{-- Profile End --}}

    <!-- --------------------  PAGE CONTENT SETTING START  ---------------------------------- -->

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('page.content')}}">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">Page Content Setting</span>
      </a>
    </li>


    <!-- --------------------   PAGE CONTENT SETTING END ---------------------------------- -->

    <!-- --------------------  Page Content setting start ---------------------------------- -->
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Website Content</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Header Setting</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
        </ul>
      </div>
    </li> 
    <!-- --------------------  Page Content setting END ---------------------------------- -->

      {{-- Slidshow Strat  {{route('banner')}} --}}
      <li class="nav-item menu-items">
        <a class="nav-link" href="">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Banner Setting</span>
        </a>
      </li>
      {{-- Slidshow End --}}

      {{-- Category Strat --}}
      {{-- {{route('category')}} --}}
      <li class="nav-item menu-items">
        <a class="nav-link" href="">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Category</span>
        </a>
      </li>
      {{-- Category End --}}


        <!--------- Products Start--------->
        {{-- {{route('product_all')}} --}}
      <li class="nav-item menu-items">
        <a class="nav-link" href="">
          <span class="menu-icon">
            <i class="mdi mdi-chart-bar"></i>
          </span>
          <span class="menu-title">Products</span>
        </a>
      </li>
      <!--------- Products end  --------->


      <!--------- Deal of the day Start--------->
      {{-- {{route('dealOfTheDay')}} --}}
      <li class="nav-item menu-items">
        <a class="nav-link" href="">
          <span class="menu-icon">
            <i class="mdi mdi-contacts"></i>
          </span>
          <span class="menu-title">Deal Of The Day</span>
        </a>
      </li>
      <!--------- Deal of the day Start--------->



      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{asset('Backend/pages/samples/blank-page.html')}}"> Blank Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{asset('Backend/pages/samples/error-404.html')}}"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{asset('Backend/pages/samples/error-500.html')}}"> 500 </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{asset('Backend/pages/samples/login.html')}}"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{asset('Backend/pages/samples/register.html')}}"> Register </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
    </ul>
  </nav>


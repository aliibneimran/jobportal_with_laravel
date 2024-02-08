<header class="main-header" id="header">
  <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
      <!-- Sidebar toggle button -->
      <button id="sidebar-toggler" class="sidebar-toggle">
          <span class="sr-only">Toggle navigation</span>
      </button>

      <span class="page-title">@yield('title')</span>

      <div class="navbar-right">
          <!-- search form -->
          <div class="search-form">
              <form action="index.html" method="get">
                  <div class="input-group input-group-sm" id="input-group-search">
                      <input type="text" autocomplete="off" name="query" id="search-input" class="form-control" placeholder="Search..."/>
                      <div class="input-group-append">
                          <button class="btn" type="button">/</button>
                      </div>
                  </div>
              </form>
          </div>

          <ul class="nav navbar-nav">
              <!-- Offcanvas -->
              <li class="custom-dropdown">
                  <button class="notify-toggler custom-dropdown-toggler">
                      <i class="mdi mdi-bell-outline icon"></i>
                      <span class="badge badge-xs rounded-circle">21</span>
                  </button>
                  <div class="dropdown-notify">
                      <div class="" data-simplebar style="height: 325px">
                          <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tabs">
                                  <div class="media media-sm bg-warning-10 p-4 mb-0">
                                      <div class="media-sm-wrapper">
                                          <a href="user-profile.html">
                                              <img src="{{asset('assets/images/user/user-sm-02.jpg')}}" alt="User Image"/>
                                          </a>
                                      </div>
                                      <div class="media-body">
                                          <a href="user-profile.html">
                                              <span class="title mb-0">John Doe</span>
                                              <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months do things on at.</span>
                                              <span class="time">
                                                  <time>Just now</time>...
                                              </span>
                                          </a>
                                      </div>
                                  </div>

                                  <div class="media media-sm p-4 bg-light mb-0">
                                      <div class="media-sm-wrapper bg-primary">
                                          <a href="user-profile.html">
                                              <i class="mdi mdi-calendar-check-outline"></i>
                                          </a>
                                      </div>
                                      <div class="media-body">
                                          <a href="user-profile.html">
                                              <span class="title mb-0">New event added</span>
                                              <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                                              <span class="time">
                                                  <time>10 min ago...</time>...
                                              </span>
                                          </a>
                                      </div>
                                  </div>

                                  <div class="media media-sm p-4 mb-0">
                                      <div class="media-sm-wrapper">
                                          <a href="user-profile.html">
                                              <img
                                                  src="{{asset('assets/images/user/user-sm-03.jpg')}}"
                                                  alt="User Image"
                                              />
                                          </a>
                                      </div>
                                      <div class="media-body">
                                          <a href="user-profile.html">
                                              <span class="title mb-0">Sagge Hudson</span>
                                              <span class="discribe">On disposal of as landlord Afraid at highly months do things on at.</span>
                                              <span class="time">
                                                  <time>1 hrs ago</time>...
                                              </span>
                                          </a>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>

                      <footer class="border-top dropdown-notify-footer">
                          <div class="d-flex justify-content-between align-items-center py-2 px-4"><span>Last updated 3 min ago</span>
                              <a id="refress-button" href="javascript:" class="btn mdi mdi-cached btn-refress"></a>
                          </div>
                      </footer>
                  </div>
              </li>
              <!-- User Account -->
              <li class="dropdown user-menu">
                  <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                    @if (Auth::guard('admin')->check())
                      <img src="{{asset('assets/images/user/user-xs-01.jpg')}}" class="user-image rounded-circle" alt="Admin"/>
                      <span class="d-none d-lg-inline-block">{{ Auth::guard('admin')->user()->name }}</span>
                    @elseif (Auth::guard('company')->check())
                        <img src="{{asset('uploads/'.($comDetails->image ?? ''))}}" class="user-image rounded-circle" alt="Image" width="30" height="30"/>
                      <span class="d-none d-lg-inline-block">{{ Auth::guard('company')->user()->name }}</span>
                    @endif
                  </button>

        @if (Auth::guard('admin')->check())
                  <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                          <a class="dropdown-link-item" href="user-profile.html">
                              <i class="mdi mdi-account-outline"></i>
                              <span class="nav-text">My Profile</span>
                          </a>
                      </li>
                      <li>
                          <a class="dropdown-link-item" href="email-inbox.html">
                              <i class="mdi mdi-email-outline"></i>
                              <span class="nav-text">Message</span>
                              <span class="badge badge-pill badge-primary">24</span>
                          </a>
                      </li>
                      <li>
                          <a class="dropdown-link-item" href="user-activities.html">
                              <i class="mdi mdi-diamond-stone"></i>
                              <span class="nav-text">Activitise</span>
                          </a>
                      </li>
                      <li>
                          <a class="dropdown-link-item" href="user-account-settings.html">
                              <i class="mdi mdi-settings"></i>
                              <span class="nav-text">Account Setting</span>
                          </a>
                      </li>
                      <li class="dropdown-footer">
                          <a href="{{ route('admin_logout')}}" class="dropdown-link-item"><i class="mdi mdi-logout"></i> Log Out</a>
                      </li>
                  </ul>
        @elseif (Auth::guard('company')->check())
        <ul class="dropdown-menu dropdown-menu-right">
            <li>
                <a class="dropdown-link-item" href="{{route('company_profile')}}">
                    <i class="mdi mdi-account-outline"></i>
                    <span class="nav-text">My Profile</span>
                </a>
            </li>
            <li>
                <a class="dropdown-link-item" href="email-inbox.html">
                    <i class="mdi mdi-email-outline"></i>
                    <span class="nav-text">Message</span>
                    <span class="badge badge-pill badge-primary">24</span>
                </a>
            </li>
            <li>
                <a class="dropdown-link-item" href="user-activities.html">
                    <i class="mdi mdi-diamond-stone"></i>
                    <span class="nav-text">Activitise</span>
                </a>
            </li>
            <li>
                <a class="dropdown-link-item" href="user-account-settings.html">
                    <i class="mdi mdi-settings"></i>
                    <span class="nav-text">Account Setting</span>
                </a>
            </li>
            <li class="dropdown-footer">
                <a href="{{ route('company_logout')}}" class="dropdown-link-item"><i class="mdi mdi-logout"></i> Log Out</a>
            </li>
        </ul>
        @endif
              </li>
          </ul>
      </div>
  </nav>
</header>

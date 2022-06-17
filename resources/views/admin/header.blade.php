<div class="header">
      <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
        
      </div>
      <div class="header-right">
        <div class="dashboard-setting user-notification">
          <div class="dropdown">
            <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
              <i class="dw dw-settings2"></i>
            </a>
          </div>
        </div>
        <div class="user-notification">
          <div class="dropdown">
            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
              <i class="icon-copy dw dw-notification"></i>
              <span class="badge notification-active"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="notification-list mx-h-350 customscroll">
                <ul>
                  <li>
                    <a href="#">
                      <img src="{{asset('admin/vendors/images/img.jpg')}}" alt="" />
                      <h3>John Doe</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="user-info-dropdown">
          <div class="dropdown">
            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
              <span class="user-icon">
                <img src="{{asset('admin/vendors/images/photo1.jpg')}}" alt="" />
              </span>
              <span class="user-name">{{ Auth::user()->fullname }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
              <a class="dropdown-item" href=""><i class="dw dw-user1"></i> Profile</a>
              <a class="dropdown-item" href=""><i class="dw dw-settings2"></i> Setting</a>
              <a class="dropdown-item" href=""><i class="dw dw-help"></i> Help</a>
              <form action="{{ url('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item">
                      <i class="dw dw-logout"></i> Log Out
                  </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
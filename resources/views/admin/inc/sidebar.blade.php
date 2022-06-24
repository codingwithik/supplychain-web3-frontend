
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/home" class="brand-link">
      <img src="/images/streams-fav.png" alt="Streams Logo" width="200px" height="50px" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">StreamsFoundation</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @if(Auth::user()->hasRole('superadmin'))
            <a href="/admin/home" class="d-block">SuperAdmin</a>
          @else
            <a href="/admin/home" class="d-block">Admin</a>
          @endif
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="/admin/home" class="{{ Request::is('/admin/home') ? 'nav-link active' : 'nav-link' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>

          @if(Auth::user()->hasRole('superadmin'))
            <li class="nav-item has-treeview">
              <a href="/admin/users" class="{{ request()->is('/admin/users') ? 'nav-link active' : 'nav-link' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Users
                </p>
              </a>
            
            </li>
          @endif
          
          <li class="nav-item has-treeview">
              

            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
                Members
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            
              <ul class="nav nav-treeview">
              
                <li class="nav-item">
                  <a href="/admin/members" class="{{ Request::is('/admin/members') ? 'nav-link active' : 'nav-link' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      Members
                    </p>
                  </a>
                </li>
                
                @if(Auth::user()->hasRole('superadmin'))
                <li class="nav-item has-treeview">
                  <a href="/admin/teams" class="{{ Request::is('/admin/teams') ? 'nav-link active' : 'nav-link' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      Team Members
                    </p>
                  </a>
                </li>
                @endif

              </ul>
            
          </li>


          <li class="nav-item has-treeview">
              

            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                News
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            
              <ul class="nav nav-treeview">
              

                <li class="nav-item has-treeview">
                  <a href="/admin/events" class="{{ Request::is('/admin/events') ? 'nav-link active' : 'nav-link' }}">
                    <i class="nav-icon fas fa-bookmark"></i>
                    <p>
                      Events
                    </p>
                  </a>
                </li>
                
                <li class="nav-item has-treeview">
                  <a href="/admin/blogs" class="{{ Request::is('/admin/blogs') ? 'nav-link active' : 'nav-link' }}">
                    <i class="nav-icon fas fa-newspaper"></i>
                    <p>
                      Blog
                    </p>
                  </a>
                </li>
                
              </ul>
            
          </li>

          <li class="nav-item has-treeview">
              

            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                Projects
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            
              <ul class="nav nav-treeview">
              
                <li class="nav-item has-treeview">
                  <a href="/admin/projects" class="{{ Request::is('/admin/projects') ? 'nav-link active' : 'nav-link' }}">
                    <i class="nav-icon fas fa-warehouse"></i>
                    <p>
                      Projects
                    </p>
                  </a>
                </li>
                
                <li class="nav-item has-treeview">
                  <a href="/admin/donations" class="{{ Request::is('/admin/donations') ? 'nav-link active' : 'nav-link' }}">
                    <i class="nav-icon fas fa-money-bill-wave"></i>
                    <p>
                      Donations
                    </p>
                  </a>
                </li>

              </ul>
            
          </li>


          <li class="nav-item has-treeview">
            <a href="/admin/images" class="{{ Request::is('/admin/images') ? 'nav-link active' : 'nav-link' }}">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>

          

          <li class="nav-item has-treeview">
            <a href="/admin/schools" class="{{ Request::is('/admin/schools') ? 'nav-link active' : 'nav-link' }}">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Schools
              </p>
            </a>
          </li>


          <li class="nav-item has-treeview">
              

            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Ecommerce
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            
              <ul class="nav nav-treeview">
              
                <li class="nav-item has-treeview">
                  <a href="/admin/products" class="{{ Request::is('/admin/products') ? 'nav-link active' : 'nav-link' }}">
                    <i class="nav-icon fas fa-box"></i>
                    <p>
                      Products
                    </p>
                  </a>
                </li>

                <li class="nav-item has-treeview">
                  <a href="/admin/orders" class="{{ Request::is('/admin/orders') ? 'nav-link active' : 'nav-link' }}">
                    <i class="nav-icon fas fa-cart-plus"></i>
                    <p>
                      Orders
                    </p>
                  </a>
                </li>

              </ul>
            
          </li>
          
          <li class="nav-item has-treeview">
            <a href="/admin/subscriptions" class="{{ Request::is('/admin/subscriptions') ? 'nav-link active' : 'nav-link' }}">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Subscriptions
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
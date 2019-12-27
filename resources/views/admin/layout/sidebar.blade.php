<!-- Main Sidebar Container -->
<aside class="main-sidebar  elevation-4" style="">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="{{asset('admin/dist/img/dc.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Dc Regina</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview ">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item ">
            <a href="{{route('catalog.index') }}" class="nav-link">
              <i class="fas fa-book-open nav-icon"></i>
              <p>Catalog</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('category.index') }}" class="nav-link">
              <i class="far fa-list-alt nav-icon"></i>
              <p>Category</p>
            </a>
        </li>


        <li class="nav-item">
          <a href="{{route('portfolio.index') }}" class="nav-link">
              <i class=" fas fa-briefcase"></i>
            <p style="margin-left:13px;">
              Portfolio
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{route('product.index') }}" class="nav-link">
            <i class=" fas fa-boxes nav-icon"></i>
              <p>Product list</p>
            </a>
        </li>


        <li class="nav-item">
            <a href="./index2.html" class="nav-link">
              <i class="far fa-user nav-icon"></i>
              <p>User</p>
            </a>
        </li>



          <li class="nav-header">Extra</li>
        <li class="nav-item">
          <a href="pages/calendar.html" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Calendar
              <span class="badge badge-info right">2</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('gallery.index')}}" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Gallery
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              Mailbox
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/mailbox/mailbox.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inbox</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/mailbox/compose.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Compose</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/mailbox/read-mail.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Read</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

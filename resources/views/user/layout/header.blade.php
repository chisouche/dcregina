<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="{{route('home') }}#page-top">DCREGINA LTD</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item  {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
              <a class="nav-link js-scroll-trigger" href="{{route('home') }}#page-top">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{route('products') }}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{route('home') }}#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{route('catalog') }}">Catalogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{route('home') }}#about">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{route('home') }}#contact">Contact us</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

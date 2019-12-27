@extends('user/portfolioapp')

@section('portfolio-content')
<!-- Photo grid -->
<!-- Header -->
<header class="masthead">

<section class="bg-dark page-section" id="portfolio">
<div class="container top" ><br><br><br>
<div class="row">
  <div class="col-lg-12 text-center">
    <h2 class="text-left section-heading text-uppercase">Product List<br>
    <small class="text-left section-heading text-uppercase">A list of our available products</small>
</h2>
  </div>
</div>
<br>

<div id="custom-search-input">
  <div class="input-group col-md-12">
   <input type="text" class="  search-query form-control" placeholder="Search" />
    <span class="input-group-text" type="button" id="btn">
      <i  class=" fa fa-search"></i>
    </span>
  </div>
</div>

<br>

<div class="row">
  <div class="col-md-4 col-sm-6 portfolio-item">
    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
      <div class="portfolio-hover">
        <div class="portfolio-hover-content">
          <i class="fas fa-plus fa-3x"></i>
        </div>
      </div>
        <img class="img-fluid" src="{{asset('user/img/portfolio/01-thumbnail.jpg')}}" alt="">
    </a>
    <div class="portfolio-caption">
      <h4>Threads</h4>
      <p class="text-muted">Illustration</p>
    </div>
  </div>
  <div class="col-md-4 col-sm-6 portfolio-item">
    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
      <div class="portfolio-hover">
        <div class="portfolio-hover-content">
          <i class="fas fa-plus fa-3x"></i>
        </div>
      </div>
      <img class="img-fluid" src="{{asset('user/img/portfolio/02-thumbnail.jpg')}}" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Explore</h4>
          <p class="text-muted">Graphic Design</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Finish</h4>
          <p class="text-muted">Identity</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Lines</h4>
          <p class="text-muted">Branding</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Southwest</h4>
          <p class="text-muted">Website Design</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Window</h4>
          <p class="text-muted">Photography</p>
        </div>
      </div>
    </div>
  </div>
</section>
</header>

<!-- Portfolio Modals -->
  <!-- Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <!--image one-->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="">
              <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Window</h4>
              <p class="text-muted">Photography</p>
            </div>
          </div>
          <!--image two-->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="">
              <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Window</h4>
              <p class="text-muted">Photography</p>
            </div>
          </div>
          <!--image three-->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="">
              <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Window</h4>
              <p class="text-muted">Photography</p>
            </div>
          </div>
          <!--image four-->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="">
              <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Window</h4>
              <p class="text-muted">Photography</p>
            </div>
          </div>
          <!--image five-->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="">
              <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Window</h4>
              <p class="text-muted">Photography</p>
            </div>
          </div>
          <!--image six-->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="">
              <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Window</h4>
              <p class="text-muted">Photography</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"></div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <!--image one-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image two-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image three-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image four-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image five-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image six-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"></div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <!--image one-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image two-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image three-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image four-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image five-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image six-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal 4-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"></div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <!--image one-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image two-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image three-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image four-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image five-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image six-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal 5-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"></div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <!--image one-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image two-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image three-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image four-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image five-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image six-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal 6-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"></div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <!--image one-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image two-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image three-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image four-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image five-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
        <!--image six-->
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <img class="img-fluid" src="{{asset('user/img/portfolio/03-thumbnail.jpg')}}"alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

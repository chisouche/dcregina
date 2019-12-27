@extends('user/app')

@section('main-content')

<!-- Header -->
<header class="masthead">
  <div class="view" style="background-image: url('img/Microscope.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <div class="container">
    <div class="intro-text">
      <div class="intro-lead-in">Welcome!</div>
      <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" style="background-color: #fed136; border-color: #fed136;" href="#services">See more</a>
    </div>
  </div>
</div>
</header>
<!--==========================
About Us Section
============================-->
<section id="about">
  <div class="container">

    <header class="section-header">
      <h3>About Us</h3>
    </header>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" style="height: 500px;">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/Microscope.jpg" alt="First slide" style="height: 500px;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/Microscope.jpg" alt="Second slide" style="height: 500px;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/Microscope.jpg" alt="Third slide" style="height: 500px;">
        </div>
      </div>
    </div>

    <div class="row about-cols">
      <div class="col-md-12 wow fadeInUp">
        <div class="about-col">
          <p>
            Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

          </p>
        </div>
      </div>
    </div>

  </div>
</section><!-- #about -->

<!-- Services -->
<section class="page-section" id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Services</h2>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">E-Commerce</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>

      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
        </span>
          <h4 class="service-heading">Responsive Design</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Web Security</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
    </div>
  </div>
</section>

    <!-- Portfolio Grid -->
<section class="bg-light page-section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Portfolio</h2>
        <h3 class="section-subheading text-muted">Check out our projects.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" href="{{route('category1') }}">
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

<!-- Portfolio Grid2 -->
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link"  href="{{route('category2') }}">
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

<!-- Portfolio Grid3-->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="{{route('category3') }}">
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

<!-- Portfolio Grid4 -->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="{{route('category4') }}">
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

<!-- Portfolio Grid5 -->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="{{route('category5') }}">
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

<!-- Portfolio Grid6 -->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="{{route('category6') }}">
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


<!--==========================
    Ceo Section
  ============================-->
  <section id="team">
    <div class="container">
      <div class="section-header wow fadeInUp">
        <h3>Team</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </div>

      <div class="row">
        <div class="col-lg-8 col-md-9 wow fadeInUp">
          <div class="member">
            <img src="img/team-1.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #ceo -->

<!-- Contact Section-->
  <section id="contact" class="section-bg wow fadeInUp">
    <div class="container">

      <div class="section-header">
        <h3>Contact Us</h3>
        <p>For more information feel free to contact us</p>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>Address</h3>
            <address>A108 Adam Street, NY 535022, USA</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3>Phone Number</h3>
            <p><a href="155895548855">+1 5589 55488 55</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="ion-ios-email-outline"></i>
            <h3>Email</h3>
            <p><a href="mailto:info@example.com">info@example.com</a></p>
          </div>
        </div>

      </div>

      <div class="form">
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validation"></div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>
  </section><!-- #contact -->



@endsection

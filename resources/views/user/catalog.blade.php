@extends('user/portfolioapp')

@section('portfolio-content')

<!-- Header -->
<header class="masthead">
  <section class="bg-dark page-section" id="portfolio">
    <br><br><br>
    <div class="container"
      <h2>Catalouge</h2>
      <div class="row">
        <div class="column" style="background-color:#d6bd69;">
          <h2 class="section-heading text-uppercase">Column 1</h2>
          <button class="btn"><i class="fa fa-download"></i>
            <a  class ="download"href="/files/download-file.pdf" download >Download</a>
          </button>
        </div>
        <div class="column" style="background-color:#ab9c68;">
          <h2>Column 2</h2>
          <button class="btn"><i class="fa fa-download"></i>
            <a  class ="download"href="/files/download-file.pdf" download >Download</a>
          </button>
        </div>
      </div>

      <div class="row">
        <div class="column" style="background-color:#ab9c68;">
          <h2>Column 3</h2>
          <button class="btn" ><i class="fa fa-download"></i>
            <a  class ="download"href="/files/download-file.pdf" download >Download</a>
          </button>
        </div>
        <div class="column" style="background-color:#d6bd69;">
          <h2>Column 4</h2>
          <button class="btn" ><i class="fa fa-download"></i>
            <a  class ="download"href="/files/download-file.pdf" download >Download</a>
          </button>
        </div>
      </div>
    </div>
  </section>
</header>

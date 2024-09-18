<section class="inner-hero">
   <img class="img-fluid" style="width: -webkit-fill-available; height: 350px;"
    src="{{ asset('../../storage/'.$header) }}" alt="">
  <div class="container">
    <h1 class="hero-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="500">
      {{$title}}
    </h1>
    <h1 class="hero-subtitle aos-init aos-animate" data-aos="fade-up" data-aos-duration="500">
      {{$breadcrumb}}
    </h1>
  </div>
  <div class="icon-section">
    <img class="icon" src="{{ asset('../../storage/'.$icon) }}" alt="">
  </div>
</section>
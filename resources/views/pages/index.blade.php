@extends('layouts.app')
    @section('content')
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('assets/img/unsplash-1.jpg') }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                <a href="#" class="primary-btn">Read More</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/img/unsplash-2.jpg') }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="primary-btn">Read More</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/img/unsplash-3.jpg') }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                <a href="#" class="primary-btn">Read More</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>

    <!-- End of carousel -->
    <div class="feature">
      <div class="feature-items">
        <div class="feature-content set-bg" data-setbg="{{ asset('assets/img/unsplash-3.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/unsplash-3.jpg') }}&quot;);">
          <h3>PERSONAL TRAINING</h3>
          <p>The Sopranos manages to address the biases<br> and benefits of therapy</p>
          <a href="#" class="primary-btn">Read More</a>
        </div>
      </div>
      <div class="feature-items">
        <div class="feature-content set-bg" data-setbg="{{ asset('assets/img/unsplash-3.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/unsplash-3.jpg') }}&quot;);">
          <h3>GROUP TRAINING</h3>
          <p>Strep throat is very common during the flu<br> seasons and it can be preceded</p>
          <a href="#" class="primary-btn">Read More</a>
        </div>
      </div>
      <div class="feature-items">
        <div class="feature-content set-bg" data-setbg="{{ asset('assets/img/unsplash-3.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/unsplash-3.jpg') }}&quot;);">
          <h3>SPORTS NUTRITION</h3>
          <p>A Human Being’s right to life implies his right to<br> have the free and unrestricted</p>
          <a href="#" class="primary-btn">Read More</a>
        </div>
      </div>
    </div>  
    <!-- End of feature -->
    <div class="about">
      <div class="about-contents">
        <div class="about-text">
          <h3>WELCOME TO SCULPTURE CLASSIC </h3>
          <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, quo? Rerum, magni quis mollitia velit labore sunt, ullam nam quisquam recusandae, consequatur dignissimos rem beatae itaque? Beatae, voluptatum. Voluptatem labore, in veniam blanditiis, ad eos, ipsum impedit aut delectus corporis aspernatur sunt est? Veniam maxime minus totam, quidem, dicta iusto similique, odio sed aut facere architecto aliquid! Deleniti eius reiciendis, voluptatibus quasi error accusamus pariatur excepturi fugit, harum exercitationem nam. Cupiditate eos ducimus, ipsa nisi repellat libero doloribus voluptate eius!</P>
          <a href="#" class="primary-btn">Read More</a>
        </div>
        <div class="about-image">
          <img class="image-about" src="{{ asset('assets/img/about.png') }}" alt="...">
        </div>
      </div>
    </div>
    {{-- END OF TRAINERS --}}
<div class="lure">
  <div class="lure-item">
    <h3>lorem, ipsum</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, totam!</p>
  </div>
  <div class="lure-btn">
    <a href="#" class="primary-btn">BOOK NOW</a>
  </div>
</div>
{{-- END OF LURE --}}
<div class="footer">
  <div class="footer-home">
    <h3>SCULPTURE CLASSIC</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quae molestias minima, ipsa a mollitia perspiciatis ea optio quibusdam officiis exercitationem hic voluptates debitis eaque, repellat non quasi sit voluptatem natus! Corrupti illo fugiat doloremque officia aliquid, sed tenetur facere.</p>
    <h4>FOLLOW US</h4>
    <ul class="social">
      <li><a href="#" class="social-item"><img src="" alt="..."></a></li>
      <li><a href="#" class="social-item"><img src="" alt="..."></a></li>
      <li><a href="#" class="social-item"><img src="" alt="..."></a></li>
      <li><a href="#" class="social-item"><img src="" alt=",,,"></a></li>      
    </ul>
  </div>
  <div class="footer-blog">
    <h3>OUR BLOG</h3>
    <p>Lorem ipsum dolor sit.</p><br><br>
    <p>Lorem ipsum dolor sit.</p><br><br>
    <p>Lorem ipsum dolor sit.</p><br><br>
  </div>
  <div class="footer-programs">
    <h3>PROGRAMS</h3>
    <p>Lorem ipsum</p><br>
    <p>Lorem ipsum</p><br>
    <p>Lorem ipsum</p><br>
    <p>Lorem ipsum</p><br>
  </div>
  <div class="footer-info">
    <h3>GET INFO</h3>
    <p>Lorem ipsum</p><br>
    <p>Lorem ipsum</p><br>
    <p>Lorem ipsum</p><br>
    <p>Lorem ipsum</p><br>
  </div>
</div>
{{-- END OF FOOTER --}}
<div class="copywrite">
  <p>Copyright ©2021 All rights reserved.</p>
</div>
</div>   
 @endsection

         

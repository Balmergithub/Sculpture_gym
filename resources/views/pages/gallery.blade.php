@extends('layouts.app') 
 
@section('content')
{{-- <h1>{{$title}}</h1> --}}
<div class="gallery-page">
    <div class="gallery-intro">
        <div class="page-about">    
            <div class="intro">
                <div class="intro-image data-setbg="{{ asset('assets/img/theme-1.jpg') }} style="background-image: url(&quot;{{ asset('assets/img/theme-1.jpg') }}&quot;);">
                    <div class="intro-content">
                        <h3>OUR GALLERY</h3>
                    </div>
                </div>        
            </div>  
        <div class="gallery-items">
            <div class="gallery">
                <div class="gallery-1">
                    <div class="gallery-item"><img src="" alt="..."></div>
                    <div class="gallery-item"><img src="" alt="..."></div>
                    <div class="gallery-item"><img src="" alt="..."></div>
                </div>
                <div class="gallery">
                    <div class="gallery-item"><img src="" alt="..."></div>
                    <div class="gallery-item"><img src="" alt="..."></div>
                    <div class="gallery-item"><img src="" alt="..."></div>
                </div>
                <div class="gallery">
                    <div class="gallery-item"><img src="" alt="..."></div>
                    <div class="gallery-item"><img src="" alt="..."></div>
                    <div class="gallery-item"><img src="" alt="..."></div>
                </div>
            </div>                
        </div>        
    </div>
    {{-- END OF GALLERY --}}
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
</div>           
@endsection
        

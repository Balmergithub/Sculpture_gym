@extends('layouts.app') 
 
@section('content')
    {{-- <h1>{{$title}}</h1> --}}
<div class="about-page">    
    <div class="intro">
      <div class="intro-image" data-setbg="{{ asset('assets/img/theme-1.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/theme-1.jpg') }}&quot;);">
          <div class="intro-content">
              <h3>About Sculpture Classic</h3>
          </div>
      </div>        
    </div>  
    {{-- END OF INTRO --}}
    <div class="body-content">
        <div class="body-title" data-setbg="{{ asset('assets/img/text-img-bg.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/text-img-bg.jpg') }}&quot;);">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, quisquam?</h3>
        </div> 
    </div>
    {{-- END OF BODY --}}
    <div class="m-detail">
        <div class="a-detail">
          <h3>Lorem, ipsum.</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, aperiam dolores tenetur iste natus odit, consectetur nesciunt voluptatem ipsam explicabo debitis incidunt quae officia! Dicta architecto placeat error autem, tempore fuga quos cumque nam impedit quasi officia iusto, sapiente corporis enim quisquam explicabo! Deserunt in veritatis quasi! Deserunt, quos fugiat.</p>
        </div>
        <div class="b-detail">
          <h3>Lorem, ipsum.</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatum, ex enim reprehenderit sunt temporibus alias numquam ratione a suscipit ea necessitatibus aliquam consectetur, tempore ducimus neque debitis labore placeat nam est officiis aut rem optio itaque. Ipsa quam earum voluptatibus exercitationem laboriosam eius a corrupti ea ab, tempora error.</p>
        </div>
    </div>
    {{-- END OF DETAILS --}}
<div class="trainers">
    <h3>TRAINERS</h3>
    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>
    <div class="trainers-content">
          <div class="trainers-image" data-setbg="{{ asset('assets/img/text-img-bg.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/text-img-bg.jpg') }}&quot;);">
            <div class="trainers-detail">
              <p>Lorem, ipsum</p>
            </div>
          </div>      
          <div class="trainers-image"  data-setbg="{{ asset('assets/img/text-img-bg.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/text-img-bg.jpg') }}&quot;);">
            <div class="trainers-detail">
              <p>Lorem, ipsum</p>
            </div>
          </div>     
          <div class="trainers-image"  data-setbg="{{ asset('assets/img/text-img-bg.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/text-img-bg.jpg') }}&quot;);">
            <div class="trainers-detail">
              <p>Lorem, ipsum</p>
            </div>
          </div> 
          <div class="trainers-image"  data-setbg="{{ asset('assets/img/text-img-bg.jpg') }}" style="background-image: url(&quot;{{ asset('assets/img/text-img-bg.jpg') }}&quot;);">
            <div class="trainers-detail">
              <p>Lorem, ipsum</p>
            </div>
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
        

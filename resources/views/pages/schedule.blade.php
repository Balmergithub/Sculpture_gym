@extends('layouts.app') 
 
@section('content')
{{-- <h1>{{$title}}</h1> --}}
<div class="page-schedule">    
        <div class="intro">
            <div class="intro-image data-setbg="{{ asset('assets/img/theme-1.jpg') }} style="background-image: url(&quot;{{ asset('assets/img/theme-1.jpg') }}&quot;);">
                <div class="intro-content">
                    <h3>About Sculpture Classic</h3>
                </div>
            </div>        
        </div>  
{{-- END OF SCHEDULE-INTRO --}}
<div class="schedule-table">
    <h3>Classtime Table</h3>
    <div class="timetable-nav">
        <ul class="nav-tnav">
            <li class="active" data-tsfilter="all">all class</li>
            <li data-tsfilter="Aerobics">Aerobics</li>
            <li data-tsfilter="Zumba">Zumba</li>
            <li data-tsfilter="Pilates">Pilates</li>
            <li data-tsfilter="Tabata">Tabata</li>
            <li data-tsfilter="Dancing">Dancing</li>
        </ul>
    </div>
    <div class="classtime">
        <div class="classtime-table">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                        <th>Sunday</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="workout-time">10.00</td>
                        <td class="hover-bg ts-item" data-tsmeta="crossfit">
                            <span>10.00 - 14.00</span>
                            <h6>Crossfit lv1</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="crossfit">
                            <span>10.00 - 15.00</span>
                            <h6>Crossfit lv1</h6>
                            </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="lunge">
                            <span>10.00 - 13.00</span>
                            <h6>Lunge Ball Bur</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="lunge">
                            <span>10.00 - 13.30</span>
                            <h6>Lunge Ball Bur</h6>
                        </td>
                    </tr>
                    <tr>
                        <td class="workout-time">14.00</td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="lunge">
                            <span>14.00 - 17.00</span>
                            <h6>Lunge Ball Bur</h6>
                            </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="crossfit">
                            <span>14.00 - 17.00</span>
                            <h6>Crossfit lv1</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="walls">
                            <span>14.00 - 15.30</span>
                            <h6>Walls to Knees</h6>
                            </td>
                            <td></td>
                    </tr>
                    <tr>
                        <td class="workout-time">16.00</td>
                        <td class="hover-bg ts-item" data-tsmeta="lunge">
                            <span>16.00 - 18.00</span>
                        <   h6>Lunge Ball Bur</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="candy">
                            <span>16.00 - 19.00</span>
                            <h6>Candy</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="candy">
                            <span>16.00 - 19.00</span>
                            <h6>Candy</h6>
                        </td>
                        <td class="hover-bg ts-item" data-tsmeta="ppsr">
                            <span>16.00 - 17.00</span>
                            <h6>Ppsr</h6>
                        </td>
                        <td class="hover-bg ts-item" data-tsmeta="murph">
                            <span>16.00 - 20.00</span>
                            <h6>murph</h6>
                            </td>
                        </tr>
                        <tr>
                        <td class="workout-time">18.00</td>
                        <td class="hover-bg ts-item" data-tsmeta="walls">
                            <span>18.00 - 20.00</span>
                            <h6>Walls to Knees</h6>
                        </td>
                        <td class="hover-bg ts-item" data-tsmeta="ppsr">
                            <span>18.00 - 20.00</span>
                            <h6>ppsr</h6>
                        </td>
                        <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="chelsea">
                            <span>18.00 - 22.00</span>
                            <h6>Chelsea</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="annie">
                            <span>18.00 - 22.00</span>
                            <h6>annie</h6>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="workout-time">20.00</td>
                        <td class="hover-bg ts-item" data-tsmeta="lunge">
                            <span>21.00 - 23.00</span>
                            <h6>Lunge Ball Bur</h6>
                        </td>
                        <td class="hover-bg ts-item" data-tsmeta="walls">
                            <span>20.00 - 22.00</span>
                            <h6>Walls to Knees</h6>
                        </td>
                        <td class="hover-bg ts-item" data-tsmeta="walls">
                            <span>20.30 - 23.00</span>
                            <h6>Walls to Knees</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="crossfit">
                            <span>22.00 - 23.00</span>
                            <h6>Crossfit Lv2</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="crossfit">
                            <span>21.00 - 23.00</span>
                            <h6>Crossfit Lv2</h6>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>              
</div> 
{{-- END OF TIMETABLE  --}}
<div class="ad-title">
    <h3>Our Classes</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, beatae.</p>
</div>
<div class="ad-block">
    <div class="ad-item">
        <div class="ad-background">
            <img src="" alt="...">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores nihil similique, molestiae dignissimos in ad ipsam illum porro nam minus?</p>
            <a href="" class="primary-button">READ MORE</a>
        </div>
    </div>
    <div class="ad-item">
        <div class="ad-background">
            <img src="" alt="...">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores nihil similique, molestiae dignissimos in ad ipsam illum porro nam minus?</p>
            <a href="" class="primary-button">READ MORE</a>
        </div>
    </div>
    <div class="ad-item">
        <div class="ad-background">
            <img src="" alt="...">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores nihil similique, molestiae dignissimos in ad ipsam illum porro nam minus?</p>
            <a href="" class="primary-button">READ MORE</a>
        </div>
    </div>
    <div class="ad-item">
        <div class="ad-background">
            <img src="" alt="...">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores nihil similique, molestiae dignissimos in ad ipsam illum porro nam minus?</p>
            <a href="" class="primary-button">READ MORE</a>
        </div>
    </div>
{{-- END OF AD BLOCK --}}
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
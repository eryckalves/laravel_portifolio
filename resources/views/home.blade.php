@extends('layouts.app')

@section('customCSS')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet"> 
@endsection


@section('content')

<section class="hero" id="hero">

    <div class="container">
        <h2 class="sub-headline">
            <span class="first-letter">W</span>elcome
        </h2>
        <h1 class="headline">Eryck Alves</h1>
        <div class="headline-description">
            <div class="separator">
                <div class="line line-left"></div>
                <div class="asterisk"><i class="fas fa-laptop-code"></i></div>
                <div class="line line-right"></div>
            </div>
            <div class="single-animation">
                <h5 class="text-danger">At Maintenance</h5>
                <a href="#" class="btn cta-btn">Explore</a>
            </div>
        </div>
    </div>

 </section>

 <section class="gallery-favorite">
    <div class="container">
        <div class="gallery-info">
            <div class="gallery-description padding-right animate-left">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">G</span>allery
                    </h2>
                    <h1 class="headline headline-dark">Favorite</h1>
                    <div class="asterisk"><i class="far fa-images"></i></div>
                </div>
                <p>Lorem ipsum dolor sit amet.</p>
                <a id="aboutUs" href="#" class="btn body-btn">About US</a>
            </div>

            <div class="gallery-info-img animate-right gallery-bg">
                <div class="image-group padding-left">
                    <a class="animate-left" href="{{asset('images/gallery1.jpg')}}" data-lightbox="roadtrip" data-title="Photo 1"><img src="{{asset('images/gallery1.jpg')}}" alt=""></a>        
                    <a class="animate-left" href="{{asset('images/gallery2.jpg')}}" data-lightbox="roadtrip" data-title="Photo 2"><img src="{{asset('images/gallery2.jpg')}}" alt=""></a>
                    <a class="animate-left" href="{{asset('images/gallery3.jpg')}}" data-lightbox="roadtrip" data-title="Photo 3"><img src="{{asset('images/gallery3.jpg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
 </section>

 <section class="tecnology-used between">
     <div class="container">
        <div class="global-headline">
            <div class="animate-top">
                <h2 class="sub-headline">
                    <span class="first-letter">T</span>ecnology
                </h2>
            </div>
            <div class="animate-bottom">
                <h1 class="headline headline-dark">Language</h1>
                <div class="asterisk"><i class="far fa-file-code"></i></div>
            </div>    
        </div>
        <div class="global-tecnology tecnology-grid-custom animate-bottom">
            <div class="swiper-container">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="img-Box"><img src="{{asset('images/laravel.jpg')}}" alt=""></div>
                        <div class="swiper-details">
                            <i class="fab fa-laravel"></i>
                            <h3>Laravel</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-Box"><img src="{{asset('images/reactjs.jpg')}}" alt=""></div>
                        <div class="swiper-details">
                            <i class="fab fa-react"></i>
                            <h3>Reactjs</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-Box"><img src="{{asset('images/javascript.jpg')}}" alt=""></div>
                        <div class="swiper-details">
                            <i class="fab fa-js-square"></i>
                            <h3>Javascript</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-Box"><img src="{{asset('images/html.jpg')}}" alt=""></div>
                        <div class="swiper-details">
                            <i class="fab fa-html5"></i>
                            <h3>hmlt</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-Box"><img src="{{asset('images/css.png')}}" alt=""></div>
                        <div class="swiper-details">
                            <i class="fab fa-css3-alt"></i>
                            <h3>css3</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-Box"><img src="{{asset('images/bootstrap.png')}}" alt=""></div>
                        <div class="swiper-details">
                            <i class="fab fa-bootstrap"></i>
                            <h3>bootstrap4</h3>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
     </div>
 </section>

 <section class="team-our-ppl">
    <div class="container">
        <div class="gallery-info">
            <div class="image-group padding-right">

                <div class="card-person animate-left">
                    <div class="card-person-box">
                        <img src="{{asset('images/eryckalves.jpg')}}" alt="team person1">
                        <h4 class="title">Eryck Alves</h4>
                        <h5 class="sub-title"><i class="fas fa-arrow-right"></i> FullStack</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, quibusdam.</p>
                    </div>
                </div>

                <div class="card-person animate-right">
                    <div class="card-person-box">
                        <img src="{{asset('images/coffee.jpg')}}" alt="team person2">
                        <h4 class="title">Coffee</h4>
                        <h5 class="sub-title"><i class="fas fa-arrow-right"></i> Full Power</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, quibusdam.</p>
                    </div>
                </div>

                <div class="card-person animate-left">
                    <div class="card-person-box">
                        <img src="{{asset('images/computer.jpg')}}" alt="team person3">
                        <h4 class="title">Computer</h4>
                        <h5 class="sub-title"><i class="fas fa-arrow-right"></i> Computer Master</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, quibusdam.</p>
                    </div>
                </div>

            </div>
            <div class="gallery-description animate-right">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">T</span>eam
                    </h2>
                    <h1 class="headline headline-dark">Our People</h1>
                    <div class="asterisk"><i class="fas fa-users"></i></div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, fugit.</p>
                <a id="socialMedia" href="#" class="btn body-btn">Social Media</a>
            </div>
        </div>
    </div>
 </section>

 <section class="discovery between">
    <div class="container">
       <div class="global-headline">
           <div class="animate-top">
               <h2 class="sub-headline">
                   <span class="first-letter">D</span>iscovery
               </h2>
           </div>
           <div class="animate-bottom">
               <h1 class="headline headline-dark">Area</h1>
           </div>
       </div>
       <div class="discovery-chart">
            <div class="chart-container animate-chart-left">
                <canvas id="myChart" width="50" height="50"></canvas>
            </div>
            <div class="chart-container animate-chart-right">
                <canvas id="myChartHorizontal" width="50" height="50"></canvas>
            </div>
        </div>
    </div>
</section>

<section class="test">
    <div class="container">
        <div class="gallery-info">
            <div class="gallery-description padding-right animate-left">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">T</span>est
                    </h2>
                    <h1 class="headline headline-dark">Area51</h1>
                    <div class="asterisk"><i class="fas fa-sort-amount-up-alt"></i></div>
                </div>
                <p>Using Semantic UI</p>
                <a href="https://semantic-ui.com/introduction/getting-started.html" class="btn body-btn">CodeS</a>
            </div>

            <div class="ui inverted segment animate-left">
                <p>Lorem ipsum, dolor sit amet <img class="ui mini spaced image" src="{{asset('images/test3.jpg')}}"> consectetur adipisicing elit. Labore, quod.</p>
                <div class="ui inverted divider"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero officiis illum illo. <img class="ui mini spaced image" src="{{asset('images/test4.jpg')}}"></p>
                <h4 class="ui horizontal inverted divider">
                  Horizontal Divider
                </h4>
            </div> 

        </div>
    </div>
</section>

@endsection

@section('customJS')
<script src="{{ asset('js/home.js') }}" defer></script>
<script src="{{ asset('js/lightbox.js') }}" defer></script>
<script src="{{ asset('js/swiper.min.js') }}" defer></script>
<script src="{{ asset('js/Chart.min.js') }}" defer></script>
<script src="{{ asset('js/parallax.min.js') }}" defer></script>
@endsection
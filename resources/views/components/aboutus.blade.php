@extends('layout.app')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">About Us</h1>
          <ul class="breadcumb-menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>About Us</li>
          </ul>
        </div>
      </div>
    </div>
    <!--==============================  About Area  ==============================-->
    <div class="space">
      <div class="container">
        <div class="row">
          <div class="col-xl-6">
            <div class="img-box1">
              <div class="img1">
                <img src={!! $aboutsection->_image ?? "" !!} alt="About" />
              </div>
              <div class="shape1">
                <img src="{{ asset('/assets/img/normal/about_shape_1.svg') }}" alt="shape" />
              </div>
            </div>
          </div>
          <div class="col-xl-6 pe-xl-4">
            <div class="title-area mb-35">
              <span class="sub-title">
              {!! $aboutsection->_subtitle ?? "" !!}
                <span class="shape right"><span class="dots"></span></span>
              </span>
              <h2 class="sec-title">
              {!! $aboutsection->_title ?? "" !!}
              </h2>
            </div>
            <p class="mt-n2 mb-35">
            {!! $aboutsection->_description ?? "" !!}
            </p>
            <div class="about-media-wrap">
              @foreach($aboutcomponent as $about_component)
              <div class="about-media">
                <div class="about-media_icon">
                  <img src={{ $about_component->_image ?? "" }} alt="icon" />
                </div>
                <div class="media-body">
                  <h3 class="about-media_title box-title">
                  {{ $about_component->_title ?? "" }}
                  </h3>
                  <p class="about-media_text">
                  {{ $about_component->_subtitle ?? "" }}
                  </p>
                </div>
              </div>
              @endforeach
            </div>
            <div class="btn-group">
              <a href="{{ url('about-us') }}" class="ot-btn">Discover more</a>
              <div class="customer-avater-wrap">
                <div class="customer-avater-group">
                </div>
                <p class="mb-0">
                  <span class="text-theme fs-md fw-bold">500k+</span> Happy
                  Customers
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==============================
About Area  
==============================-->
    <div class="overflow-hidden bg-smoke space">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 pe-xxl-5 text-center text-xl-start">
            <div class="title-area mb-35">
              <span
                class="sub-title justify-content-center justify-content-xl-start"
              >
                <span class="shape left d-inline-block d-xl-none"
                  ><span class="dots"></span
                ></span>
                {!! $aboutsectiontwo->_subtitle ?? "" !!}
                <span class="shape right"><span class="dots"></span></span>
              </span>
              <h2 class="sec-title">
              {!! $aboutsectiontwo->_title ?? "" !!}
              </h2>
            </div>
            <p class="mt-n2 mb-40">
            {!! $aboutsectiontwo->_description ?? "" !!}
            </p>
            
          @foreach($aboutsectiontwoall as $aboutsectiontwo_all)
            <div class="skill-feature">
              <h3 class="skill-feature_title">{!! $aboutsectiontwo_all->_title ?? "" !!}</h3>
              <div class="progress">
                <div class="progress-bar" style="width: {!! $aboutsectiontwo_all->_subtitle ?? '' !!}">
                  <div class="progress-value">{!! $aboutsectiontwo_all->_subtitle ?? "" !!}</div>
                </div>
              </div>
            </div>
          @endforeach
          </div>
          <div class="col-xl-6 mt-40 mt-xl-0">
            <div class="img-box2">
              <div class="img1">
                <img src= {!! $aboutsectiontwo->_image ?? "" !!} alt="About" style="height:490px;width:550px;"/>
              </div>
              <div class="ot-video" data-overlay="title" data-opacity="2">
                <img src={!! companyprofile()->_image ?? "" !!} alt="Video" style="height:257px;width:257px;"/>
                <a
                  href={!! $aboutsectiontwo->_videourl ?? "" !!}
                  class="play-btn popup-video"
                  ><i class="fas fa-play"></i
                ></a>
              </div>
              <div class="shape1">
                <img src="{{ asset('/assets/img/normal/about_shape_2.svg') }}" alt="shape" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==============================
Counter Area  
==============================-->
    <div class="bg-dark2 py-5" style="margin-bottom: 65px;">
      <div class="container py-4">
        <div class="row gx-0 justify-content-between">
        @foreach($allcounter as $counter)
          <div class="col-6 col-lg-3 counter-card-wrap">
            <div class="counter-card style2">
              <div class="counter-card_icon">
                <img src={!! $counter->_logo ?? "" !!} alt="icon" />
              </div>
              <div class="media-body">
                <h2 class="counter-card_number text-white">
                  <span class="counter-number">{!! $counter->_amount ?? "" !!}</span>+
                </h2>
                <p class="counter-card_text text-white" style="text-align: center;">{!! $counter->_name ?? "" !!}</p>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
      </div>
    </div>
    <!--==============================
Team Area  
==============================-->
    <section class="space" id="team-sec">
      <div class="container">
        <div class="title-area text-center">
          <span class="sub-title justify-content-center">
            <span class="shape left"><span class="dots"></span></span>
            {!! $teachersection->_subtitle ?? "" !!}
            <span class="shape right"><span class="dots"></span></span>
          </span>
          <h2 class="sec-title">{!! $teachersection->_title ?? "" !!}</h2>
        </div>
        <div
          class="row slider-shadow ot-carousel"
          data-slide-show="4"
          data-lg-slide-show="3"
          data-md-slide-show="2"
          data-xs-slide-show="1"
          data-arrows="true"
        >
        @foreach($teachersectionall as $teacher_section)
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="ot-team team-box">
              <div class="team-img">
                <img src={!! $teacher_section->_image ?? "" !!} alt="Team" />
                <div class="team-social">
                  <div class="play-btn"><i class="far fa-plus"></i></div>
                </div>
              </div>
              <div class="team-content">
                <h3 class="box-title" style="min-height:80px;">
                  <a href="{{ url('team-details.html') }}">{!! $teacher_section->_title ?? "" !!}</a>
                </h3>
                <span class="team-desig">{!! $teacher_section->_subtitle ?? "" !!}</span>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </section>
    
    <!--==============================
    Video Area  
    ==============================-->
    <section class="space-top bg-auto" data-bg-src="assets/img/bg/bg_map_1.png">
      <div class="">
        <div class="container">
          <div class="title-area text-center">
            <span class="sub-title justify-content-center">
              <span class="shape left"><span class="dots"></span></span>
              {!! $watchstory->_subtitle ?? '' !!}
              <span class="shape right"><span class="dots"></span></span>
            </span>
            <h2 class="sec-title">
            {!! $watchstory->_title ?? '' !!}
            </h2>
            <div class="btn-group pb-3 mt-30 justify-content-center">
              <a href="{{ url('/contact') }}" class="ot-btn">Contact Us</a>
              <a href="{{ url('apply-now') }}" class="ot-btn style3">Book Now</a>
            </div>
          </div>
          <div
            class="ot-video text-center"
            data-overlay="title"
            data-opacity="5"
            data-pos-for=".testi-sec"
            data-sec-pos="bottom-half"
          >
            <img src={!! $watchstory->_image ?? '' !!} alt="Video"/>
            <a
              href={!! $watchstory->_videourl ?? '' !!}
              class="play-btn style3 popup-video"
              ><i class="fas fa-play"></i
            ></a>
          </div>
        </div>
      </div>
    </section>
    <!--==============================
    Testimonial Area  
    ==============================-->
    <section class="space-bottom">
      <div class="testi-sec space" data-bg-src="assets/img/bg/bg_map_2.png">
        <div class="container">
          <div class="title-area text-center">
            <span class="sub-title justify-content-center">
              <span class="shape left"><span class="dots"></span></span>
              Testimonials
              <span class="shape right"><span class="dots"></span></span>
            </span>
            <h2 class="sec-title">What Customers Say About Us</h2>
          </div>
          <div
            class="row slider-shadow ot-carousel"
            id="testiSlide1"
            data-slide-show="3"
            data-lg-slide-show="2"
            data-md-slide-show="2"
            data-sm-slide-show="1"
          >
          @foreach($allreviews as $all_reviews)
            <div class="col-lg-6">
              <div class="testi-card">
                <div class="testi-card__rating">
                  <i class="fa-solid fa-star-sharp"></i
                  ><i class="fa-solid fa-star-sharp"></i
                  ><i class="fa-solid fa-star-sharp"></i
                  ><i class="fa-solid fa-star-sharp"></i
                  ><i class="fa-solid fa-star-sharp"></i>
                </div>
                <p class="testi-card__text">
                  “{!! $all_reviews->_description ?? '' !!}”
                </p>
                <div class="testi-card__profile">
                  <div class="testi-card__avater">
                    <img
                      src={!! $all_reviews->_image ?? '' !!}
                      alt="Avater"
                    />
                  </div>
                  <div class="media-body">
                    <h3 class="testi-card__name">{!! $all_reviews->_title ?? '' !!}</h3>
                    <span class="testi-card__desig">{!! $all_reviews->_subtitle ?? '' !!}</span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!--==============================
	Subscribe Area
==============================-->
    <section
      class=" "
      data-pos-for=".footer-wrapper"
      data-sec-pos="bottom-half"
    >
      <div class="container">
        <div
          class="newsletter-wrap"
          data-bg-src="assets/img/bg/subscribe_bg_1.svg"
        >
          <h2 class="sec-title text-white mb-2">
            Get Special Offers And More From Travon
          </h2>
          <p class="text-white fs-md mb-4" style="text-align: center;">
            Sign up now and get the best deals straight in your inbox!
          </p>
          <form class="newsletter-form">
            <div class="form-group">
              <input
                class="form-control"
                type="email"
                placeholder="Email Address"
                required=""
              />
              <i class="fal fa-envelope"></i>
            </div>
            <button type="submit" class="ot-btn">Subscribe</button>
          </form>
        </div>
      </div>
    </section>
@endsection

@push('script')
<script>
   
</script>
@endpush
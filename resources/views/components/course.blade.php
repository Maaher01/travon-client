@extends('layout.app')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">Tours</h1>
          <ul class="breadcumb-menu">
            <li>Home</li>
            <li>Tours</li>
          </ul>
        </div>
      </div>
    </div>
    <!--==============================
Tour Area
==============================-->
    <section class="ot-tour-wrapper space-top space-extra-bottom">
      <div class="container">
        <div class="row">
          <div class="col-xxl-8 col-lg-7">
            <div class="row">
              @foreach($allcourses as  $allcourses)
              <div class="col-xl-6 col-lg-12 col-md-6 mb-30">
                <div class="tour-card">
                  <div class="tour-card__img">
                    <img src={!! $allcourses->_image !!} alt="Tour Image"> 
                    <span class="tour-card__tag">
                      <i class="far fa-heart"></i>
                    </span>
                  </div>
                  <div class="tour-card__content">
                    <div class="tour-card__top">
                      <a href="https://www.google.com/maps" class="tour-card__location">
                        <i class="fa-light fa-location-dot"></i> {!! $allcourses->_location !!}
                      </a>
                      <!-- <div class="tour-card__rating">
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                      </div> -->
                    </div>
                    <h3 class="tour-card__title">
                      <a href="{{ url('/tour-details')."/". $allcourses->id ?? "" }}">{!! $allcourses->_title !!}</a>
                    </h3><div class="tour-meta">
                      <span>
                        <i class="fa-light fa-clock"></i> {!! $allcourses->_duration !!}</span> 
                        <span><i class="fa-light fa-user-group"></i> 50+</span>
                      </div><div class="tour-card__bottom">
                        <span class="tour-card__price">From <span class="price">${!! $allcourses->_from !!}</span></span> 
                        <a href="{{ url('/tour-details')."/". $allcourses->id ?? "" }}" class="link-btn">See Details 
                          <i class="fas fa-arrow-up-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
          <div class="col-xxl-4 col-lg-5">
            <aside class="sidebar-area">
              <!-- <div class="widget widget_search">
                <form class="search-form">
                  <input type="text" placeholder="Enter Keyword" />
                  <button type="submit"><i class="far fa-search"></i></button>
                </form>
              </div> -->
              <!-- <div class="widget widget_categories">
                <h3 class="widget_title">Categories</h3>
                <ul>
                  <li>
                    <a href="{{ url('blog.html') }}">New York</a>
                  </li>
                  <li>
                    <a href="{{ url('blog.html') }}">Europe</a>
                  </li>
                  <li>
                    <a href="{{ url('blog.html') }}">Life Style</a>
                  </li>
                  <li>
                    <a href="{{ url('blog.html') }}">Trip & Ticket</a>
                  </li>
                  <li>
                    <a href="{{ url('blog.html') }}">Swizerland</a>
                  </li>
                </ul>
              </div> -->
              <div class="widget">
                <h3 class="widget_title">Recent Blogs</h3>
                <div class="recent-post-wrap">
                @foreach($recentblogs as $recent)
                  <div class="recent-post">
                    <div class="media-img">
                      <a href="{{ url('blog-details.html') }}"
                        ><img
                          src={!! $recent->_image !!}
                          alt="Blog Image"
                      /></a>
                    </div>
                    <div class="media-body">
                      <h4 class="post-title">
                        <a class="text-inherit" href="{{ url('blog-details')."/".$recent->id }}"
                          >{!! $recent->_title !!}</a
                        >
                      </h4>
                      <div class="recent-post-meta">
                        <a><i class="fas fa-calendar-days"></i>{!! $recent->_heading !!}</a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <!-- <div class="widget widget_tag_cloud">
                <h3 class="widget_title">Popular Tags</h3>
                <div class="tagcloud">
                  <a href="{{ url('blog.html') }}">Adventure</a>
                  <a href="{{ url('blog.html') }}">Beach</a>
                  <a href="{{ url('blog.html') }}">Destinations</a>
                  <a href="{{ url('blog.html') }}">Parks</a>
                  <a href="{{ url('blog.html') }}">Lifestyle</a>
                  <a href="{{ url('blog.html') }}">Tourisms</a>
                  <a href="{{ url('blog.html') }}">Hotels</a>
                  <a href="{{ url('blog.html') }}">Transport</a>
                  <a href="{{ url('blog.html') }}">Tourist</a>
                </div>
              </div> -->
              <div class="widget widget_banner">
                <div class="offer-banner">
                  <div class="banner-logo">
                    <img src="{{ asset('/assets/img/logo-white.svg') }}" alt="Travon" />
                  </div>
                  <span class="banner-subtitle">Happy Holiday</span>
                  <h3 class="banner-title">Adventure Tour</h3>
                  <div class="offer">
                    <h6 class="offer-title">
                      <span class="text-theme">Travon</span> Special
                    </h6>
                    <p class="offer-text">
                      <span class="text-theme">30% off</span> On All Booking
                    </p>
                  </div>
                  <a href="{{ url('contact.html') }}" class="ot-btn">Get A Quote</a>
                </div>
              </div>
            </aside>
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
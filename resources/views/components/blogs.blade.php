@extends('layout.app')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">Blogs</h1>
          <ul class="breadcumb-menu">
            <li><a href="{{ url('index.html') }}">Home</a></li>
            <li>Blogs</li>
          </ul>
        </div>
      </div>
    </div>
    <!--==============================
Blog Area
==============================-->
    <section class="ot-blog-wrapper space-top space-extra-bottom">
      <div class="container">
        <div class="row">
          <div class="col-xxl-8 col-lg-7">
            @foreach($allblogs as $blog)
            <div class="ot-blog blog-single has-post-thumbnail">
              <div class="blog-img">
                <a href="{{ url('blog-details.html') }}"
                  ><img src={!! $blog->_image !!} alt="Blog Image"
                /></a>
              </div>
              <div class="blog-content">
                <div class="blog-meta">
                  <a><i class="fa-solid fa-user"></i>{!! $blog->_subtitle !!}</a>
                  <a><i class="fa-solid fa-calendar-days"></i>{!! $blog->_heading !!}</a>
                  <a><i class="fa-solid fa-tag"></i>{!! $blog->_subheading !!}</a>
                </div>
                <h2 class="blog-title">
                  <a href="{{ url('/blog-details')."/". $blog->id ?? "" }}"
                    >{!! $blog->_title !!}</a
                  >
                </h2>
                <p class="blog-text">
                {!! Str::limit($blog->_description, 245, '...') !!}
                </p>
                <a href="{{ url('/blog-details')."/". $blog->id ?? "" }}" class="ot-btn"
                  >Read More<i class="fas fa-arrow-right ms-2"></i
                ></a>
              </div>
            </div>
            @endforeach
            <div class="ot-pagination text-center">
              <ul>
                <li><a href="{{ url('blog.html') }}">1</a></li>
                <li><a href="{{ url('blog.html') }}">2</a></li>
                <li><a href="{{ url('blog.html') }}">3</a></li>
                <li>
                  <a href="{{ url('blog.html') }}"><i class="far fa-arrow-right"></i></a>
                </li>
              </ul>
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


@endsection

@push('script')
<script>
   
</script>
@endpush
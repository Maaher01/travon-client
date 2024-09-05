@extends('layout.app')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">Image & Video Gallery</h1>
          <ul class="breadcumb-menu">
            <li><a href="{{ url('/about-us') }}">Home</a></li>
            <li>Image & Video Gallery</li>
          </ul>
        </div>
      </div>
    </div>
    <!--==============================
Gallery Area  
==============================-->
    <div class="space">
      <div class="container">
        <div class="title-area text-center">
          <span class="sub-title justify-content-center">
            <span class="shape left"><span class="dots"></span></span>
             Images
            <span class="shape right"><span class="dots"></span></span>
          </span>
          <h2 class="sec-title">Image Gallery</h2>
        </div>
        <div class="row gy-30 masonary-active">
        @foreach($allgalleryimage as $allgallery_image)
          <div class="col-md-6 col-xxl-auto filter-item">
            <div class="gallery-card">
              <div class="gallery-img">
                <img
                  src={!! $allgallery_image->_image ?? "" !!}
                  alt="gallery image"
                />
                <a
                  href={!! $allgallery_image->_image ?? "" !!}
                  class="gallery-btn popup-image"
                  ><i class="fas fa-eye"></i
                ></a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!--==============================
Gallery Area  
==============================-->
    <div class="bg-smoke space">
      <div class="container">
        <div class="title-area text-center">
          <span class="sub-title justify-content-center">
            <span class="shape left"><span class="dots"></span></span>
            {!! $videosection->_subtitle ?? "" !!}
            <span class="shape right"><span class="dots"></span></span>
          </span>
          <h2 class="sec-title">{!! $videosection->_title ?? "" !!}</h2>
        </div>
        <div class="row gy-30 masonary-active">
          @foreach($allvideo as $all_video)
          <div class="col-md-6 col-xxl-auto filter-item">
            <div class="gallery-video">
              <div class="gallery-img">
                <img
                  src={!! $all_video->_image ?? "" !!}
                  alt="gallery image" 
                />
                <a
                  href={!! $all_video->_videourl ?? "" !!}
                  class="play-btn popup-video"
                  ><i class="far fa-play"></i
                ></a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!--==============================
	Subscribe Area
==============================-->
    <section
      class="bg-smoke"
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
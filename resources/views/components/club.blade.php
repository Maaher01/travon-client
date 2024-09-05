@extends('layout.app')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">{!! $club->_title ?? '' !!} </h1>
          <ul class="breadcumb-menu">
            <li>Clubs</a></li>
            <li>{!! $club->_title ?? '' !!}  </li>
          </ul>
        </div>
      </div>
    </div>
    <!--==============================
        Blog Area
    ==============================-->
    <section class="ot-blog-wrapper blog-details space-top space-extra-bottom">
      <div class="container">
        
      @foreach($clubsection as $club_section)
      
        <div class="row">
          <div class="col-xxl-12 col-lg-7">
            <div class="ot-blog blog-single">
              <div class="blog-img">
                <img src={!! $club_section->_image ?? '' !!} alt="Blog Image" width="100%" />
              </div>
              <div class="blog-content">
                <!--<div class="blog-meta">-->
                  
                <!--  <a href="#"-->
                <!--    ><i class="fa-solid fa-calendar-days"></i>{!! date("F j, Y", strtotime($club_section->created_at ?? "")); !!}</a-->
                <!--  >-->
                <!--</div>-->
                <h2 class="blog-title">
                {!! $club_section->_title ?? '' !!}
                </h2>
                <p>
                {!! $club_section->_description ?? '' !!}
                </p>
                
                
              </div>
              
            </div>
            
          </div>
          
        </div>


        @endforeach
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
@extends('layout.app')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">Our Team</h1>
          <ul class="breadcumb-menu">
            <li>Home</li>
            <li>Our Team</li>
          </ul>
        </div>
      </div>
    </div>
    <section class="space-top space-extra-bottom">
      <div class="container">
        <div class="row">
          
        
        @foreach($teachersectionall as $teacher_section)
        <!-- Single Item -->
          <div class="col-md-6 col-lg-4 col-xl-3 mb-30">
            <div class="ot-team team-box">
              <div class="team-img">
                <img src={!! $teacher_section->_image ?? "" !!} alt="Team"  />
                <div class="team-social">
                  <div class="play-btn"><i class="far fa-plus"></i></div>
                </div>
              </div>
              <div class="team-content">
                <h3 class="box-title">
                  <a href="{{ url('/team-details')."/". $teacher_section->id ?? "" }}">{!! $teacher_section->_title ?? "" !!}</a>
                </h3>
                <span class="team-desig">{!! $teacher_section->_subtitle ?? "" !!}</span>
              </div>
            </div>
          </div>
          @endforeach
          <!-- Single Item -->
          
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
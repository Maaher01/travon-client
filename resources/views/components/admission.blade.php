@extends('layout.app')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">Admission</h1>
          <ul class="breadcumb-menu">
            <li>Academic Info</li>
            <li>Admission</li>
          </ul>
        </div>
      </div>
    </div>
    <!--==============================
Feature Area  
==============================-->
<div class="space">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-12">
            <div class="title-area mb-30 text-center text-xl-start">
              <span
                class="sub-title justify-content-center justify-content-xl-start"
              >
                <span class="shape left d-inline-block d-xl-none"
                  ><span class="dots"></span
                ></span>
                  Admission
                <span class="shape right"><span class="dots"></span></span>
              </span>
              <h2 class="sec-title"> {!! $whychoose->_title ?? "" !!}</h2>
            </div>
            <p class="mt-n2 mb-35 text-center text-xl-start">
            <h2 class="sec-title"> Admission Requirement and Guideline </h2>
            </p>
            <div class="feature-media-wrap mt-50">
            @foreach($admissionsection as $admission_section)
              <div class="feature-media" style="max-width:600px;">
                <div class="feature-media__icon">
                  <i class="{!! $admission_section->_subtitle ?? '' !!}"></i>
                </div>
                <div class="media-body">
                  <h3 class="feature-media__title">{!! $admission_section->_title ?? ""!!}</h3>
                  <p class="feature-media__text">
                  {!! $admission_section->_description ?? ""!!}
                  </p>
                </div>
              </div>
            @endforeach  
            </div>
          </div>
        </div>
      </div>
    </div>
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
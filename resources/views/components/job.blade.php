@extends('layout.app')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">{!! $jobsection->_title ?? "" !!}</h1>
          <ul class="breadcumb-menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>{!! $jobsection->_title ?? "" !!}</li>
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
          <div class="col-xxl-12 col-lg-7">
            <div class="row">
              @foreach($jobsectioncomponent as  $jobsection_component)
              <div class="col-xl-4 col-lg-12 col-md-4 mb-30">
                <div class="tour-card">
                  <div class="tour-card__img">
                    <img src={!! $jobsection_component->_image ?? "" !!} alt="Tour Image" style="min-height:280px;"/>
                  </div>
                  <div class="tour-card__content">
                    <h3 class="tour-card__title">
                      <a href={!! $jobsection_component->_link ?? "" !!}>{!! $jobsection_component->_title ?? "" !!}</a>
                    </h3>
                    <div class="tour-meta">
                      <b><i class="fa-light fa-clock"></i> {!! $jobsection_component->_subtitle ?? "" !!}</b>
                    </div>
                    <span class="mt-50"> {!! $jobsection_component->_description ?? "" !!}</span>
                    <div class="tour-card__bottom">
                      <a href={!! $jobsection_component->_link ?? "" !!} class="link-btn"
                        >Details <i class="fas fa-arrow-up-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
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
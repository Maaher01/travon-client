@extends('layout.app')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">Destinations</h1>
          <ul class="breadcumb-menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Destinations</li>
          </ul>
        </div>
      </div>
    </div>
    <section class="space-top space-extra-bottom">
      <div class="container">
        <div class="row">

        @foreach($alldepartment as $all_department)
          <div class="col-xl-3 col-lg-4 col-md-6 mb-35">
            <div class="trip-box">
              <div class="trip-box__img">
                <img src={!! $all_department->_image ?? "" !!} alt="Trip image"/>
              </div>
              <div class="trip-box__content">
                <h2 class="trip-box__title box-title">
                  <i class="fas fa-location-dot"></i>
                  <a href="{{ url('destination-details')."/".$all_department->id }}">{!! $all_department->_title ?? "" !!}</a>
                </h2>
              </div>
            </div>
          </div>
        @endforeach

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
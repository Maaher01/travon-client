@extends('layout.app')

@section('content')
<!--==============================
Breadcumb
============================== -->

<div class="breadcumb-wrapper" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
  
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">{!! $departmentdetails->_title ?? "" !!}</h1>
          <ul class="breadcumb-menu">
            <li><a href="{{ url('/departments') }}">Destinations</a></li>
            <li>{!! $departmentdetails->_title ?? "" !!}</li>
          </ul>
        </div>
      </div>
    </div>
    
    
    <!--==============================
    Main Area
    ==============================-->
    <section class="space-top space-extra-bottom">
      <div class="container">
        <div class="row">
            <div class="col-xxl-12">
    <!--==============================
    Slider Area
    ==============================-->
    
   
              <div class="destination-details">
                <p class="mb-4">
                {!! $departmentdetails->_description ?? "" !!}
                </p>
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
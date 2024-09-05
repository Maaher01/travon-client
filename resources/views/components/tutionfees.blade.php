@extends('layout.app')

@section('content')

<!--============================== Breadcumb ============================= -->
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">Contact Us</h1>
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
    <!--============================== Quote Area ==============================-->
    <div class="space">
      <div class="container">
        <div class="row gy-40">
        <div class="col-xxl-12 col-lg-12">
            <aside class="sidebar-area">
              <div class="widget widget_banner">
                <div class="offer-banner">
                  <div class="banner-logo">
                    <img src="http://127.0.0.1:8000/assets/img/logo-white.svg" alt="Travon">
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
                  <a href="/contact" class="ot-btn">Contact</a>
                </div>
              </div>
            </aside>
          </div>
      </div>
    </div>
</div>

@endsection

@push('script')
<script>
   
</script>
@endpush
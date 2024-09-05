@extends('layout.app')

@section('content')

<!--============================== Breadcumb ============================= -->
<div class="breadcumb-wrapper" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">Result</h1>
          <ul class="breadcumb-menu">
            <li>Home</li>
            <li>Result</li>
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
                  
                  <span class="banner-subtitle">Thank You</span>
                  <h3 class="banner-title mt-50" style="max-width:100%;margin-top:40px;">For Any Kind of Queary Related to Result</h3>
                  <div class="offer">
                    <h6 class="offer-title">
                      <span style="color:black;font-size:48px;">Please Contact Examination Cell
                    </h6>
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
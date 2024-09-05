@extends('layout.app')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title"> {!! $noticedetails->_title ?? "" !!}</h1>
          <ul class="breadcumb-menu">
            <li><a href="{{ url('/') }}">Notice Board</a></li>
            <li>{!! $noticedetails->_title ?? "" !!}</li>
          </ul>
        </div>
      </div>
    </div>
    <!--==============================
        Blog Area
    ==============================-->
    <section class="ot-blog-wrapper blog-details space-top space-extra-bottom">
      <div class="container">
        <div class="row">
          <div class="col-xxl-12">
            <div class="ot-blog blog-single">
              <div class="blog-img">
              <iframe src={!! $noticedetails->_image ?? "" !!} title="No Notice Found" style="height:700px;" frameborder="0"></iframe>

              </div>
              <div class="blog-content">
                <div class="blog-meta">
                  <a href="{{ url('blog.html') }}"
                    ><i class="fa-solid fa-calendar-days"></i>{!! date("F j, Y", strtotime($noticedetails->_date ?? "")); !!}</a
                  >
                </div>
                <h2 class="blog-title">
                 {!! $noticedetails->_title ?? "" !!}
                </h2>
                <p>
                {!! $noticedetails->_description ?? "" !!}
                </p>
                
                
                </div>
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
          <p class="text-white fs-md mb-4">
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
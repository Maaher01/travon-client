@extends('layout.app')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">News & Events</h1>
          <ul class="breadcumb-menu">
            <li>Academic Info</li>
            <li>News & Events</li>
          </ul>
        </div>
      </div>
    </div>
    <!--==============================
Blog Area
==============================-->
    <section class="ot-blog-wrapper space-top space-extra-bottom">
      <div class="container">
        <div class="row">

        @foreach($allnewsfeed as $allnews_feed)
          <div class="col-xxl-4 col-lg-12">
            

            <div class="ot-blog blog-single has-post-thumbnail">
              <div
                class="blog-img ot-carousel"
                data-arrows="true"
                data-slide-show="1"
                data-fade="true"
              >
                <a href="{{ url('/news-event-details')."/".$allnews_feed->id ?? "" }}"
                  ><img src={!! $allnews_feed->_image ?? "" !!} alt="Blog Image" style="min-height:300px;"
                /></a>
                <
              </div>
              <div class="blog-content">
                <div class="blog-meta">
                  
                  <a href="{{ url('blog.html') }}"
                    ><i class="fa-solid fa-calendar-days"></i>{!! date("F j, Y", strtotime($allnews_feed->_date ?? "")); !!}</a
                  >
                  
                </div>
                <p class="blog-text">
                {!! $allnews_feed->_title ?? "" !!}
                </p>
                <a href="{{ url('/news-event-details')."/".$allnews_feed->id ?? "" }}" class="ot-btn"
                  >Read More<i class="fas fa-arrow-right ms-2"></i
                ></a>
              </div>
            </div>
         </div>
        @endforeach

        </div>
      </div>
    </section>


@endsection

@push('script')
<script>
   
</script>
@endpush
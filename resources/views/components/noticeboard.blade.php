@extends('layout.app')

@section('content')
<!--============================== Breadcumb ============================== -->
<div class="breadcumb-wrapper" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">Notice Board</h1>
          <ul class="breadcumb-menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Notice Board</li>
          </ul>
        </div>
      </div>
    </div>
<!--============================== Quote Area  ==============================-->
<div class="col-xxl-12 col-lg-12">
    <aside class="sidebar-area">
        <div class="widget">
        <h3 class="widget_title">Notice Board</h3>
        <div class="recent-post-wrap">
            

            @foreach($allnotice as $all_notice)
            <div class="recent-post">
                
                <div class="media-body">
                    <h4 class="post-title" style="width:70%;float:left;">
                        <a class="text-inherit" href="{{ url('/noticeboarddetails')."/". $all_notice->id ?? "" }}"> {!! $all_notice->_description ?? '' !!}</a>
                    </h4>
                    <div class="recent-post-meta" style="width:30%;float:right;">
                    <a href="http://127.0.0.1:8000/blog.html"><i class="fas fa-calendar-days"></i>{!! date("F j, Y", strtotime($all_notice->_date ?? "")); !!}</a>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach


        </div>
    </aside>
</div>


@endsection

@push('script')
<script>
   
</script>
@endpush
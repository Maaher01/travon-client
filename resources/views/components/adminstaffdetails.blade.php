@extends('layout.app')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{!! $teacherdetails->_title ?? "" !!}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Team</a></li>
                    <li>{!! $teacherdetails->_title ?? "" !!}</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Team Area  
==============================-->
    <section class="space">
        <div class="container">
            <div class="about-card">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="about-card__img">
                            <img class="w-100" src={!! $teacherdetails->_image ?? "" !!} alt="team image">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-card__box">
                            <div class="about-card__top">
                                <div>
                                    <h2 class="about-card__title">{!! $teacherdetails->_title ?? "" !!}</h2>
                                    <span class="about-card__desig">{!! $teacherdetails->_subtitle ?? "" !!}</span>
                                </div>
                            </div>
                            {!! $teacherdetails->_description ?? "" !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--==============================
	Subscribe Area
==============================-->
    <section class=" " data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
        <div class="container">
            <div class="newsletter-wrap" data-bg-src="assets/img/bg/subscribe_bg_1.svg">
                <h2 class="sec-title text-white mb-2">Get Special Offers And More From Travon</h2>
                <p class="text-white fs-md mb-4" style="text-align: center;">Sign up now and get the best deals straight in your inbox!</p>
                <form class="newsletter-form">
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Email Address" required="">
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
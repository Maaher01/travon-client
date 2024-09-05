@extends('layout.app')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{!! $memberdetails->_title ?? "" !!}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Instructors</a></li>
                    <li>{!! $memberdetails->_title ?? "" !!}</li>
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
                            <img class="w-100" src={!! $memberdetails->_image ?? "" !!} alt="team image">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-card__box">
                            <div class="about-card__top">
                                <div>
                                    <h2 class="about-card__title">{!! $memberdetails->_title ?? "" !!}</h2>
                                    <span class="about-card__desig">{!! $memberdetails->_subtitle ?? "" !!}</span>
                                </div>
                            </div>
                            {!! $memberdetails->_description ?? "" !!}
                            
                            
                            <!-- <div class="about-info-wrap">
                                <p class="about-info"><i class="fal fa-calendar-days"></i><strong>Born on:</strong>May 23, 1987</p>
                                <p class="about-info"><i class="fal fa-city"></i><strong>lives in:</strong>Switzerland</p>
                                <p class="about-info"><i class="fal fa-envelope"></i><strong>Email:</strong><a href="{{ url('mailto:michelm@travon.com') }}">michelm@travon.com</a></p>
                                <p class="about-info"><i class="fal fa-phone"></i><strong>Phone:</strong><a href="{{ url('tel:+16322543654') }}">+163 2254 3654</a></p>
                                <p class="about-info"><i class="fal fa-school"></i><strong>Education:</strong>University of Boxon</p>
                            </div> -->
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
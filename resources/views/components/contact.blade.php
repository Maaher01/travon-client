@extends('layout.app')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper background-image" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
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
    <!--==============================
Quote Area  
==============================-->
    <div class="space">
      <div class="container">
        <div class="row gy-40">
          <div class="col-xl-5">
            <div class="contact-info-wrap">
              <!-- <div class="shape-img">
                <img src="assets/img/shape/contact_shape.png" alt="shape" />
              </div> -->
              <h3 class="border-title2">Contact Info</h3>
              @foreach(getcontactcomponents() as $contact_component)
              <div class="contact-info-box mb-4">
                <div class="contact-info">
                  <!-- <h4 class="contact-info__title">{{ $contact_component->_title }}</h4> -->
                  <div>{!! $contact_component->_description !!}</div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="col-xl-7">
            <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d116877.42721443667!2d90.40090741795633!3d23.732411968921575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3755b7b0d18e10c5%3A0x82d8093ead15a1c3!2sPlot%20%23%2019%2C%20Block-%20A%2C%20Ward%3A%2070%2C%20Dhaka%201360!3m2!1d23.7324338!2d90.48330899999999!5e0!3m2!1sen!2sbd!4v1720080812828!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==============================
Contact Area  
==============================-->
    <div class="space-bottom" data-bg-src="assets/img/bg/contact_bg_1.png">
      <div class="container">
          @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                <strong>Success!</strong> {{ session('success') }}
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                <strong>Error!</strong> {{ session('error') }}
            </div>
        @endif
        <form action="{{ url('messagesubmit') }}" method="POST" class="contact-form">
            @csrf
          <h3 class="form-title">Make An Appointement</h3>
          <div class="row">
            <div class="form-group col-md-6">
              <input
                type="text"
                class="form-control style3"
                name="name"
                id="name"
                placeholder="Your Name *"
              />
              <i class="fal fa-user"></i>
            </div>
            <div class="form-group col-md-6">
              <input
                type="email"
                class="form-control style3"
                name="email"
                id="email"
                placeholder="Email Address"
              />
              <i class="fal fa-envelope"></i>
            </div>
            <div class="form-group col-md-6">
              <input
                type="tel"
                class="form-control style3"
                name="mobile"
                id="mobile"
                placeholder="Mobile Number *"
              />
              <i class="fal fa-phone"></i>
            </div>
            <div class="form-group col-md-6">
              <input
                type="text"
                class="form-control style3"
                name="topic"
                id="topic"
                placeholder="Query Topic"
              />
              <i class="fal fa-file-invoice"></i>
            </div>
            <div class="form-group col-12">
              <textarea
                name="message"
                id="message"
                cols="30"
                rows="3"
                class="form-control style3"
                placeholder="Your Message *"
              ></textarea>
              <i class="fal fa-pencil"></i>
            </div>
            <div class="form-btn col-12">
              <button class="ot-btn">Send Message Now</button>
            </div>
          </div>
          <p class="form-messages mb-0 mt-3"></p>
        </form>
      </div>
    </div>
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
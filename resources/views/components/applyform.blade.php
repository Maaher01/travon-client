@extends('layout.app')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">Apply Now</h1>
          <ul class="breadcumb-menu">
          <li><a href="{{ url('/') }}">Home</a></li>
            <li>Apply</li>
          </ul>
        </div>
      </div>
    </div>
    <!--==============================
Contact Area  
==============================-->
<div class="space-bottom my-5" data-bg-src="assets/img/bg/contact_bg_1.png">
      <div class="container-fluid">
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
        <form action="{{ url('studentregistration') }}" method="POST" class="contact-form">
            @csrf
          <h3 class="form-title">Personal Information</h3>
          <div class="row">
            <div class="form-group col-md-6">
              <input
                type="text"
                class="form-control style3"
                name="name"
                id="name"
                placeholder="Full Name"
              />
              <i class="fal fa-user"></i>
            </div>
            <div class="form-group col-md-6">
              <input
                type="text"
                class="form-control style3"
                name="fathername"
                id="fathername"
                placeholder="Father's Name"
              />
              <i class="fal fa-user"></i>
            </div>
            <div class="form-group col-md-6">
              <input
                type="text"
                class="form-control style3"
                name="mothername"
                id="mothername"
                placeholder="Mother's Name"
              />
              <i class="fal fa-user"></i>
            </div>
            <div class="form-group date-picker col-md-6">
              <input
                type="date"
                class="form-control style3 p-3"
                name="dob"
                id="dob"
                placeholder="Date of Birth"
              />
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
            <div class="form-group col-12">
              <textarea
                name="address"
                id="address"
                class="form-control style3"
                placeholder="Permanent Address"
              ></textarea>
              <i class="fal fa-address-book"></i>
            </div>
            <div class="form-group col-md-6">
              <input
                type="tel"
                class="form-control style3"
                name="mobile"
                id="mobile"
                placeholder="Mobile Number *"
              />
              <i class="fal fa-mobile"></i>
            </div>
            <div class="form-group col-md-6">
              <input
                type="tel"
                class="form-control style3"
                name="parentmobile"
                id="parentmobile"
                placeholder="Parent's Mobile"
              />
              <i class="fal fa-mobile"></i>
            </div>
            <div class="form-group col-md-6">
              <select class="form-control style3" name="tribal" id="tribal">
                <option value="" disabled selected>Tribal?</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <select class="form-control style3" name="freedom" id="freedom">
                <option value="" disabled selected>
                  Freedom fighter's child/grandchild?
                </option>
                <option value="1">Yes</option>
                <option value="0">No</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <select class="form-control style3" name="interest" id="interest">
                <option value="" disabled selected>
                  Interested in studying
                </option>
                <option value="computer">Computer</option>
                <option value="architecture">Architecture</option>
                <option value="civil">Civil</option>
                <option value="electrical">Electrical</option>
                <option value="textile">Textile</option>
                <option value="telecommunication">Telecommunication</option>
                <option value="apparel">Apparel Manufacturing</option>
                <option value="graphhics">Graphics Design</option>
                <option value="electronics">Electronics</option>
              </select>
            </div>
          </div>
          <!--<p class="form-messages mb-0 mt-3"></p>-->
          <h3 class="form-title mt-4">Academic Information</h3>
          <div class="row">
            <div class="form-group col-md-6">
              <select
                class="form-control style3"
                name="qualification"
                id="qualification"
              >
                <option value="" disabled selected>Latest Qualification</option>
                <option value="ssc">SSC</option>
                <option value="hsc">HSC</option>
                <option value="dakhil">Dakhil</option>
                <option value="vocational">Vocational</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <input
                type="text"
                class="form-control style3"
                name="passyear"
                id="passyear"
                placeholder="Passing Year *"
              />
              <i class="fal fa-graduation-cap"></i>
            </div>
            <div class="form-group col-md-6">
              <input
                type="text"
                class="form-control style3"
                name="group"
                id="group"
                placeholder="Group (Ex: Science/Arts etc.)"
              />
              <i class="fal fa-building"></i>
            </div>
            <div class="form-group col-md-6">
              <input
                type="text"
                class="form-control style3"
                name="board"
                id="board"
                placeholder="Board"
              />
              <i class="fal fa-globe"></i>
            </div>
            <div class="form-group col-md-6">
              <input
                type="text"
                class="form-control style3"
                name="sscroll"
                id="sscroll"
                placeholder="SSC Roll No."
              />
              <i class="fal fa-sort-numeric-asc"></i>
            </div>
            <div class="form-group col-md-6">
              <input
                type="text"
                class="form-control style3"
                name="sscnumber"
                id="sscnumber"
                placeholder="SSC Registration No."
              />
              <i class="fal fa-sort-numeric-asc"></i>
            </div>
            <div class="form-group col-md-6">
              <input
                type="text"
                class="form-control style3"
                name="gpa"
                id="gpa"
                placeholder="GPA"
              />
              <i class="fal fa-sort-numeric-asc"></i>
            </div>
            <div class="form-btn col-12">
              <button class="ot-btn mt-4">Submit</button>
            </div>
          </div>
          <!--<p class="form-messages mb-0 mt-3"></p>-->
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
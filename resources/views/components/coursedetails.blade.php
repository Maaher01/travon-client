@extends('layout.app')

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src={!! breadcrumbimage()->_image ?? "" !!}>
      <div class="container">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">{!! $tourdetails->_title ?? "" !!}</h1>
          <ul class="breadcumb-menu">
            <li><a href="{{ url('index.html') }}">Tour</a></li>
            <li>{!! $tourdetails->_title ?? "" !!}</li>
          </ul>
        </div>
      </div>
    </div>
    <!--==============================
Tour Area
==============================-->
    <section class="ot-tour-wrapper space-top space-extra-bottom">
      <div class="container">
        <div class="row">
          <div class="col-xxl-8 col-lg-7">
            <div class="tour-details">
              <div class="tour-header">
                <h2 class="tour-title">{!! $tourdetails->_title ?? "" !!}</h2>
                <div class="meta-box-wrap">
                  <div class="meta-box">
                    <div class="meta-box_icon">
                      <i class="fal fa-circle-dollar"></i>
                    </div>
                    <div class="media-body">
                      <h5 class="meta-box_title">From</h5>
                      <p class="meta-box_text">${!! $tourdetails->_from ?? "" !!}</p>
                    </div>
                  </div> 
                  <div class="meta-box">
                    <div class="meta-box_icon">
                      <i class="fal fa-clock"></i>
                    </div>
                    <div class="media-body">
                      <h5 class="meta-box_title">Duration</h5>
                      <p class="meta-box_text">{!! $tourdetails->_duration ?? "" !!}</p>
                    </div>
                  </div>
                  <div class="meta-box">
                    <div class="meta-box_icon">
                      <i class="fal fa-location-dot"></i>
                    </div>
                    <div class="media-body">
                      <h5 class="meta-box_title">Location</h5>
                      <p class="meta-box_text">{!! $tourdetails->_location ?? "" !!}</p>
                    </div>
                  </div>
                  <div class="meta-box">
                    <div class="meta-box_icon">
                      <i class="fal fa-users"></i>
                    </div>
                    <div class="media-body">
                      <h5 class="meta-box_title">Group Size</h5>
                      <p class="meta-box_text">{!! $tourdetails->_groupsize ?? "" !!} People</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tour-img">
                <img src={!! $tourdetails->_image !!} alt="Tour Image" />
              </div>
              <ul class="nav tour-tab" id="tourTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a
                    class="nav-link ot-btn active"
                    id="description-tab"
                    data-bs-toggle="tab"
                    href="{{ url('#tourDescription') }}"
                    role="tab"
                    aria-controls="tourDescription"
                    aria-selected="true"
                    >Information</a
                  >
                </li>
                <!-- <li class="nav-item" role="presentation">
                  <a
                    class="nav-link ot-btn"
                    id="plan-tab"
                    data-bs-toggle="tab"
                    href="{{ url('#plan') }}"
                    role="tab"
                    aria-controls="plan"
                    aria-selected="false"
                    >Tour Plan</a
                  >
                </li>
                <li class="nav-item" role="presentation">
                  <a
                    class="nav-link ot-btn"
                    id="photos-tab"
                    data-bs-toggle="tab"
                    href="{{ url('#photos') }}"
                    role="tab"
                    aria-controls="photos"
                    aria-selected="false"
                    >Tour Photos</a
                  >
                </li> -->
                <li class="nav-item" role="presentation">
                  <a
                    class="nav-link ot-btn"
                    id="location-tab"
                    data-bs-toggle="tab"
                    href="{{ url('#location') }}"
                    role="tab"
                    aria-controls="location"
                    aria-selected="false"
                    >Location</a
                  >
                </li>
              </ul>
              <div class="tab-content" id="productTabContent">
                <div
                  class="tab-pane fade show active"
                  id="tourDescription"
                  role="tabpanel"
                  aria-labelledby="description-tab"
                >
                  <div class="tour-description">
                    <h3 class="inner-title">Description</h3>
                    <p>{!! $tourdetails->_description !!}</p>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="plan"
                  role="tabpanel"
                  aria-labelledby="plan-tab"
                >
                  <div class="tour-plan">
                    <h3 class="inner-title">Tour Plan</h3>
                    <div class="accordion" id="planAccordion">
                      <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-1">
                          <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse-1"
                            aria-expanded="false"
                            aria-controls="collapse-1"
                          >
                            Day 01: Departure
                          </button>
                        </div>
                        <div
                          id="collapse-1"
                          class="accordion-collapse collapse"
                          aria-labelledby="collapse-item-1"
                          data-bs-parent="#planAccordion"
                        >
                          <div class="accordion-body">
                            <p class="faq-text">
                              Authoritatively engage transparent users for
                              standard compliant vortal. Continually seize
                              technically sound applications rather than an
                              expanded array of methodologies. Competently
                              envisioneer fully researched "outside the box"
                              thinking via team building technologies.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-card active">
                        <div class="accordion-header" id="collapse-item-2">
                          <button
                            class="accordion-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse-2"
                            aria-expanded="true"
                            aria-controls="collapse-2"
                          >
                            Day 02: Adventure Begins
                          </button>
                        </div>
                        <div
                          id="collapse-2"
                          class="accordion-collapse collapse show"
                          aria-labelledby="collapse-item-2"
                          data-bs-parent="#planAccordion"
                        >
                          <div class="accordion-body">
                            <p class="faq-text">
                              Authoritatively engage transparent users for
                              standard compliant vortal. Continually seize
                              technically sound applications rather than an
                              expanded array of methodologies. Competently
                              envisioneer fully researched "outside the box"
                              thinking via team building technologies.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-3">
                          <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse-3"
                            aria-expanded="false"
                            aria-controls="collapse-3"
                          >
                            Day 03: Airplain Tour
                          </button>
                        </div>
                        <div
                          id="collapse-3"
                          class="accordion-collapse collapse"
                          aria-labelledby="collapse-item-3"
                          data-bs-parent="#planAccordion"
                        >
                          <div class="accordion-body">
                            <p class="faq-text">
                              Authoritatively engage transparent users for
                              standard compliant vortal. Continually seize
                              technically sound applications rather than an
                              expanded array of methodologies. Competently
                              envisioneer fully researched "outside the box"
                              thinking via team building technologies.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-4">
                          <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse-4"
                            aria-expanded="false"
                            aria-controls="collapse-4"
                          >
                            Day 04: Jungle Sufary
                          </button>
                        </div>
                        <div
                          id="collapse-4"
                          class="accordion-collapse collapse"
                          aria-labelledby="collapse-item-4"
                          data-bs-parent="#planAccordion"
                        >
                          <div class="accordion-body">
                            <p class="faq-text">
                              Authoritatively engage transparent users for
                              standard compliant vortal. Continually seize
                              technically sound applications rather than an
                              expanded array of methodologies. Competently
                              envisioneer fully researched "outside the box"
                              thinking via team building technologies.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-5">
                          <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse-5"
                            aria-expanded="false"
                            aria-controls="collapse-5"
                          >
                            Day 05: Explore Culloden
                          </button>
                        </div>
                        <div
                          id="collapse-5"
                          class="accordion-collapse collapse"
                          aria-labelledby="collapse-item-5"
                          data-bs-parent="#planAccordion"
                        >
                          <div class="accordion-body">
                            <p class="faq-text">
                              Authoritatively engage transparent users for
                              standard compliant vortal. Continually seize
                              technically sound applications rather than an
                              expanded array of methodologies. Competently
                              envisioneer fully researched "outside the box"
                              thinking via team building technologies.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-6">
                          <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse-6"
                            aria-expanded="false"
                            aria-controls="collapse-6"
                          >
                            Day 06: Loch Ness and the Isle of Skye
                          </button>
                        </div>
                        <div
                          id="collapse-6"
                          class="accordion-collapse collapse"
                          aria-labelledby="collapse-item-6"
                          data-bs-parent="#planAccordion"
                        >
                          <div class="accordion-body">
                            <p class="faq-text">
                              Authoritatively engage transparent users for
                              standard compliant vortal. Continually seize
                              technically sound applications rather than an
                              expanded array of methodologies. Competently
                              envisioneer fully researched "outside the box"
                              thinking via team building technologies.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-7">
                          <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse-7"
                            aria-expanded="false"
                            aria-controls="collapse-7"
                          >
                            Day 07: Walk the Walls of Stirling Castle
                          </button>
                        </div>
                        <div
                          id="collapse-7"
                          class="accordion-collapse collapse"
                          aria-labelledby="collapse-item-7"
                          data-bs-parent="#planAccordion"
                        >
                          <div class="accordion-body">
                            <p class="faq-text">
                              Authoritatively engage transparent users for
                              standard compliant vortal. Continually seize
                              technically sound applications rather than an
                              expanded array of methodologies. Competently
                              envisioneer fully researched "outside the box"
                              thinking via team building technologies.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-8">
                          <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse-8"
                            aria-expanded="false"
                            aria-controls="collapse-8"
                          >
                            Day 08: Journey to Thriving Glasgow
                          </button>
                        </div>
                        <div
                          id="collapse-8"
                          class="accordion-collapse collapse"
                          aria-labelledby="collapse-item-8"
                          data-bs-parent="#planAccordion"
                        >
                          <div class="accordion-body">
                            <p class="faq-text">
                              Authoritatively engage transparent users for
                              standard compliant vortal. Continually seize
                              technically sound applications rather than an
                              expanded array of methodologies. Competently
                              envisioneer fully researched "outside the box"
                              thinking via team building technologies.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-9">
                          <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse-9"
                            aria-expanded="false"
                            aria-controls="collapse-9"
                          >
                            Day 09: Farewell Glasgow
                          </button>
                        </div>
                        <div
                          id="collapse-9"
                          class="accordion-collapse collapse"
                          aria-labelledby="collapse-item-9"
                          data-bs-parent="#planAccordion"
                        >
                          <div class="accordion-body">
                            <p class="faq-text">
                              Authoritatively engage transparent users for
                              standard compliant vortal. Continually seize
                              technically sound applications rather than an
                              expanded array of methodologies. Competently
                              envisioneer fully researched "outside the box"
                              thinking via team building technologies.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-10">
                          <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse-10"
                            aria-expanded="false"
                            aria-controls="collapse-10"
                          >
                            Day 10: Return
                          </button>
                        </div>
                        <div
                          id="collapse-10"
                          class="accordion-collapse collapse"
                          aria-labelledby="collapse-item-10"
                          data-bs-parent="#planAccordion"
                        >
                          <div class="accordion-body">
                            <p class="faq-text">
                              Authoritatively engage transparent users for
                              standard compliant vortal. Continually seize
                              technically sound applications rather than an
                              expanded array of methodologies. Competently
                              envisioneer fully researched "outside the box"
                              thinking via team building technologies.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="photos"
                  role="tabpanel"
                  aria-labelledby="photos-tab"
                >
                  <div class="tour-photos">
                    <div class="row g-4 masonary-active">
                      <div class="col-md-6 filter-item">
                        <div class="tour-photo">
                          <img
                            src="{{ asset('/assets/img/trip/tour_inner_1.jpg') }}"
                            alt="Image"
                          />
                        </div>
                      </div>
                      <div class="col-md-6 filter-item">
                        <div class="tour-photo">
                          <img
                            src="{{ asset('/assets/img/trip/tour_inner_2.jpg') }}"
                            alt="Image"
                          />
                        </div>
                      </div>
                      <div class="col-md-6 filter-item">
                        <div class="tour-photo">
                          <img
                            src="{{ asset('/assets/img/trip/tour_inner_3.jpg') }}"
                            alt="Image"
                          />
                        </div>
                      </div>
                      <div class="col-md-6 filter-item">
                        <div class="tour-photo">
                          <img
                            src="{{ asset('/assets/img/trip/tour_inner_4.jpg') }}"
                            alt="Image"
                          />
                        </div>
                      </div>
                      <div class="col-md-6 filter-item">
                        <div class="tour-photo">
                          <img
                            src="{{ asset('/assets/img/trip/tour_inner_5.jpg') }}"
                            alt="Image"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="location"
                  role="tabpanel"
                  aria-labelledby="location-tab"
                >
                  <div class="tour-location">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuzsoft!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                      allowfullscreen=""
                      loading="lazy"
                    ></iframe>
                  </div>
                </div>
              </div>
              <!-- Comment Form -->
              <!-- <div class="ot-comment-form">
                <div class="form-title">
                  <h3 class="blog-inner-title">Leave A Reply</h3>
                  <p class="text">
                    Your email address will not be published. Required fields
                    are marked *
                  </p>
                </div>
                <div class="row">
                  <div
                    class="form-group rating-select d-flex align-items-center"
                  >
                    <label>Your Rating</label>
                    <p class="stars">
                      <span>
                        <a class="star-1" href="{{ url('#') }}">1</a>
                        <a class="star-2" href="{{ url('#') }}">2</a>
                        <a class="star-3" href="{{ url('#') }}">3</a>
                        <a class="star-4" href="{{ url('#') }}">4</a>
                        <a class="star-5" href="{{ url('#') }}">5</a>
                      </span>
                    </p>
                  </div>
                  <div class="col-12 form-group">
                    <textarea
                      placeholder="Write a Message"
                      class="form-control"
                    ></textarea>
                    <i class="text-title far fa-pencil-alt"></i>
                  </div>
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      placeholder="Your Name"
                      class="form-control"
                    />
                    <i class="text-title far fa-user"></i>
                  </div>
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      placeholder="Your Email"
                      class="form-control"
                    />
                    <i class="text-title far fa-envelope"></i>
                  </div>
                  <div class="col-12 form-group">
                    <input
                      id="reviewcheck"
                      name="reviewcheck"
                      type="checkbox"
                    />
                    <label for="reviewcheck"
                      >Save my name, email, and website in this browser for the
                      next time I comment.<span class="checkmark"></span
                    ></label>
                  </div>
                  <div class="col-12 form-group mb-0">
                    <button class="ot-btn">Post Review</button>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
          <div class="col-xxl-4 col-lg-5">
            <aside class="sidebar-area">
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
              <div class="widget widget_book">
                <div class="widget-tour-book">
                  <div class="top">
                    <h4 class="title">Book This Tour</h4>
                    <!-- <p class="price">$250.00 per person</p> -->
                  </div>
                  <form action="{{ route('bookings') }}" method="POST" class="widget-form">
                  @csrf
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        name="fullname"
                        id="fullname"
                        placeholder="Your Name"
                      />
                      <i class="fal fa-user"></i>
                    </div>
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        name="email"
                        id="email"
                        placeholder="Your Email"
                      />
                      <i class="fal fa-envelope"></i>
                    </div>
                    <div class="form-group">
                      <input
                        type="tel"
                        class="form-control"
                        name="phone"
                        id="phone"
                        placeholder="Phone Number"
                      />
                      <i class="fal fa-phone"></i>
                    </div>
                    <div class="form-group">
                      <select
                        name="tickettype"
                        id="tickettype"
                        class="form-select nice-select"
                      >
                        <option value="" disabled selected hidden>
                          Ticket Types
                        </option>
                        <option value="0">Basic Ticket</option>
                        <option value="1">Standard Ticket</option>
                        <option value="2">VIP Ticket</option>
                      </select>
                      <i class="fal fa-chevron-down"></i>
                    </div>
                    <div class="row">
                      <div class="col-6 form-group">
                        <select
                          name="adult"
                          id="adult"
                          class="form-select nice-select"
                        >
                          <option value="" disabled selected hidden>
                            Adult
                          </option>
                          <option value="1">1 Person</option>
                          <option value="2">2 Person</option>
                          <option value="3">3 Person</option>
                        </select>
                        <i class="fal fa-chevron-down"></i>
                      </div>
                      <div class="col-6 form-group">
                        <select
                          name="child"
                          id="child"
                          class="form-select nice-select"
                        >
                          <option value="" disabled selected hidden>
                            Child
                          </option>
                          <option value="1">1 Person</option>
                          <option value="2">2 Person</option>
                          <option value="3">3 Person</option>
                        </select>
                        <i class="fal fa-chevron-down"></i>
                      </div>
                    </div>
                    <div class="form-group">
                      <input
                        type="date"
                        class="form-control"
                        name="date"
                        id="date"
                        placeholder="mm/dd/yyyyy"
                      />
                      <!-- <i class="fal fa-calendar-alt"></i> -->
                    </div>
                    <div class="form-group">
                      <textarea
                        name="message"
                        id="message"
                        cols="30"
                        rows="3"
                        class="form-control"
                        placeholder="Message (if any)"
                      ></textarea>
                      <i class="fal fa-pencil"></i>
                    </div>
                    <div class="form-btn">
                      <button class="ot-btn w-100">Book now</button>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                  </form>
                </div>
              </div>
              <div class="widget">
                <h3 class="widget_title">Last Minute Deals</h3>
                <div class="recent-post-wrap">
                  @foreach($latestdeals as $deals)
                  <div class="recent-post">
                    <div class="media-img">
                      <a href="{{ url('blog-details.html') }}"
                        ><img
                          src={!! $deals->_image !!}
                          alt="Blog Image"
                      /></a>
                    </div>
                    <div class="media-body">
                      <h4 class="post-title">
                        <a class="text-inherit" href="{{ url('blog-details.html') }}"
                          >{!! $deals->_title !!}</a
                        >
                      </h4>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="widget widget_banner">
                <div class="offer-banner">
                  <div class="banner-logo">
                    <img src="{{ asset('/assets/img/logo-white.svg') }}" alt="Travon" />
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
                  <a href="{{ url('contact.html') }}" class="ot-btn">Get A Quote</a>
                </div>
              </div>
            </aside>
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
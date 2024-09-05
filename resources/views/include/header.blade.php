<!--============================== Sidemenu ============================== -->
<div class="sidemenu-wrapper d-none d-lg-block">
      <div class="sidemenu-content">
        <button class="closeButton sideMenuCls">
          <i class="far fa-times"></i>
        </button>
        <div class="widget footer-widget">
          <div class="ot-widget-about">
            <div class="about-logo">
              <a href="/"
                ><img src="{!! companyprofile()->_image ?? "" !!}" alt="Travon institute"
                style="width:150px;"/></a>
            </div>
            <p class="about-text">
            {{  companyprofile()->_description ?? "" }}
            </p>
            <div class="ot-social">
              @foreach(sociallinkinfo() as $sociallink)
              <a href={!! $sociallink->_url ?? "" !!}
                ><i class="{!! $sociallink->_title ?? "" !!}"></i
              ></a>
              @endforeach
            </div>
          </div>
        </div>
        <div class="widget footer-widget">
          <h3 class="widget_title">Contact Us</h3>
          <div class="ot-widget-contact">
            <div class="info-box">
              <div class="info-box_icon">
                <i class="fas fa-location-dot"></i>
              </div>
              <p class="info-box_text">
                {{  companyprofile()->_website ?? "" }}
              </p>
            </div>
            <div class="info-box">
              <div class="info-box_icon">
                <i class="fas fa-phone"></i>
              </div>
              <p class="info-box_text">
                <a href="tel:+11234567890" class="info-box_link"
                  >{{  companyprofile()->_mobile ?? "" }}</a
                >
              </p>
            </div>
            <div class="info-box" style="width:350px;">
              <div class="info-box_icon">
                <i class="fas fa-envelope"></i>
              </div>
              <p class="info-box_text">
                <a href="mailto:principal@glandgroup.com" class="info-box_link"
                  >{{  companyprofile()->_email  ?? "" }}</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
      <button class="searchClose"><i class="fal fa-times"></i></button>
      <form action="/result">
        <input type="text" placeholder="Search Your Result" />
        <button type="submit"><i class="fal fa-search"></i></button>
      </form>
    </div>

<!--============================== Mobile Menu ============================== -->

  <div class="ot-menu-wrapper">
      <div class="ot-menu-area text-center">
        <button class="ot-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
          <a href="/"
            ><img src="{!! companyprofile()->_image ?? "" !!}" alt="Travon institute"
          style="width:150px;"/></a>
        </div>
        <div class="ot-mobile-menu">
         <ul>
        @foreach(mainmenu() as $main_menu)
          @if (!submenu($main_menu->id)->isEmpty()) 
          <li class="menu-item-has-children">
            <a href="{!! $main_menu->_url ?? '' !!}">{!! $main_menu->_title ?? '' !!}</a>
            <ul class="sub-menu">
              @foreach(submenu($main_menu->id) as $submenu)
              <li>
                <a href="{!! $submenu->_url ?? '' !!}">{!! $submenu->_title ?? '' !!}</a>
              </li>
              @endforeach
            </ul>
          </li>
          @else
          <li><a href="{!! $main_menu->_url ?? '' !!}">{!! $main_menu->_title ?? '' !!}</a></li>
          @endif
        @endforeach
      </ul>
        </div>
      </div>
    </div>

<!--============================== Header Area ==============================-->
<header class="ot-header header-layout1">
      <div class="header-top">
        <div class="container">
          <div
            class="row justify-content-center justify-content-lg-between align-items-center"
          >
            <div class="col-auto d-none d-lg-block">
              <div class="header-links">
                <ul>
                  <li>
                    <i class="fal fa-phone"></i
                    ><a href="tel:+256214203215">{{  companyprofile()->_phone ?? "" }}</a>
                  </li>
                  <li class="d-none d-xl-inline-block">
                    <i class="fal fa-envelope"></i
                    ><a href="mailto:principal@glandgroup.com">{{  companyprofile()->_email  ?? "" }}</a>
                  </li>
                  <li>
                  <i class="fal fa-location-dot"></i>{{  companyprofile()->_website ?? "" }}
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-auto">
              <div class="header-links">
                <ul>
                  <!-- <li class="d-none d-lg-inline-block">
                    <i class="far fa-user"></i
                    ><a href="contact.html">Login / Register</a>
                  </li> -->
                  <li>
                    <div class="header-social">
                      <span class="social-title">Follow Us:</span>
                      @foreach(sociallinkinfo() as $sociallink)
                      <a href={!! $sociallink->_url ?? "" !!}
                        ><i class="{!! $sociallink->_title ?? "" !!}"></i
                      ></a>
                      @endforeach
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
          <div class="container">
            <div class="row align-items-center justify-content-between">
              <div class="col-auto">
                <div class="header-logo pt-0 pb-0">
                  <a href="/"><img src="{!! companyprofile()->_image ?? "" !!}" alt="Travon" /></a>
                </div>
              </div>
              <div class="col-auto">
                <nav class="main-menu d-none d-xl-inline-block">
                  <ul>
                      @foreach(mainmenu() as $main_menu)
                        <li style="margin-right:0px;">
                          <a href={!! $main_menu->_url ?? "" ; !!} >{!! $main_menu->_title ?? "" ; !!}</a>
                      </li>
                      @endforeach
                  </ul>
                </nav>
                <button
                  type="button"
                  class="ot-menu-toggle d-inline-block d-xl-none"
                >
                  <i class="far fa-bars"></i>
                </button>
              </div>
              <div class="col-auto d-none d-xxl-block">
                <div class="header-button">
                  <button type="button" class="icon-btn searchBoxToggler">
                    <i class="far fa-search"></i>
                  </button>
                  <a href="#" class="icon-btn sideMenuToggler"
                    ><i class="fa-regular fa-bars"></i
                  ></a>

                  <a href="/apply-now" class="ot-btn ml-25">Book Your Stay</a>
                </div>
              </div>
            </div>
          </div>
          <div class="logo-bg" style="width:15%;"></div>
        </div>
      </div>
    </header>
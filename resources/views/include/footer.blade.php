<!--============================== Footer Area ==============================-->

<footer class="footer-wrapper footer-layout1">
      <div class="widget-area">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-md-6 col-xl-3">
              <div class="widget footer-widget">
                <div class="ot-widget-about">
                  <div class="about-logo">
                    <a href="index.html"
                      ><img src="{!! companyprofile()->_image ?? "" !!}" alt="Travon institute"
                      style="width:150px;"/></a>
                  </div>
                  <p class="about-text text-justify">
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
            </div>
            <div class="col-md-6 col-xl-auto">
              <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">Quick Links</h3>
                <div class="menu-all-pages-container">
                  <ul class="menu">
                  @foreach(mainmenu() as $main_menu)
                    <li><a href={!! $main_menu->_url ?? "" ; !!}>{!! $main_menu->_title ?? "" ; !!}</a></li>
                  @endforeach
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-auto">
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
                  <div class="info-box">
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
            <div class="col-md-6 col-xl-auto">
              <div class="widget footer-widget">
                <h3 class="widget_title">Gallery Showcase</h3>
                <div class="sidebar-gallery">
                  @foreach(galleryrandimage() as $galleryrandimage)
                  <div class="gallery-thumb">
                    <img
                      src={!! $galleryrandimage->_image ?? "" !!}
                      alt="Gallery Image"
                    />
                    <a
                      href={!! $galleryrandimage->_image ?? "" !!}
                      class="gallery-btn popup-image"
                      ><i class="fas fa-plus"></i
                    ></a>
                  </div>
                  
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright-wrap style2">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
              <p class="copyright-text">
                Copyright <i class="fal fa-copyright"></i> {{ now()->year }}
                <a href="https://www.softintechnology.com/" target="_blank">Softin Technology Ltd.</a>. All Rights Reserved.
              </p>
            </div>
            <!--<div class="col-lg-6 text-end d-none d-lg-block">-->
            <!--  <div class="footer-links">-->
            <!--    <ul>-->
            <!--      <li><a href="about.html">Terms of Use</a></li>-->
            <!--      <li><a href="about.html">Privacy Environmental Policy</a></li>-->
            <!--    </ul>-->
            <!--  </div>-->
            <!--</div>-->
          </div>
        </div>
      </div>
    </footer>

    <!--*******************************		Code End  Here  ******************************** -->
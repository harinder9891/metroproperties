<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('frontend/landing-pages/01/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/landing-pages/01/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/landing-pages/01/css/style.css')}}">
    
    <style>.page {opacity: 0;} .page.animated {opacity: 1;} .ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="{{asset('frontend/landing-pages/01/images/ie8-panel/warning_bar_0000_us.jpg')}}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Header-->
      <header class="page-header text-center section-shadow-bottom">
        <div class="container">
          <div class="row row-10 align-items-center justify-content-sm-between mb-0">
            <div class="col-sm-6 text-sm-left">
              <!--Brand--><a class="brand" href="index.html"><img src="{{asset('frontend/landing-pages/01/images/logo-bl.png')}}" alt="" width="205" height="38"/></a>
            </div>
            <div class="col-sm-6 text-sm-right">
              <div class="heading-4 text-primary">Call us:<a class="pl-2" href="tel:#">0405-555-510</a></div>
            </div>
          </div>
        </div>
      </header>

      <!--Swiper-->
      <section class="section position-relative">
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
              <div class="box-booking">
                <h3>The best properties for</h3>
                <h1>our clients</h1>
                <!--RD Mailform-->
                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" id="form1">
                    @csrf
                    <div class="form-wrap">
                    <label class="form-label-outside" for="booking-name">Your Name <span class="text-primary">*</span></label>
                    <input class="form-input required" id="booking-name" type="text" name="name" >
                    <span id="error_form1_name" class="error"></span>
                  </div>  
                  <div class="form-wrap">
                    <label class="form-label-outside" for="booking-email">Your E-mail <span class="text-primary">*</span></label>
                    <input class="form-input required" id="booking-email" type="email" name="email">
                    <span id="error_form1_email" class="error"></span>
                    
                  </div>
                  <div class="form-wrap">
                    <label class="form-label-outside" for="booking-phone">Your Phone <span class="text-primary">*</span></label>
                    <input class="form-input required" id="booking-phone" type="text" name="phone" >
                    <span id="error_form1_phone" class="error"></span>
                  </div>
                  <button class="button button-primary button-block" type="button" onclick="validateForm(1)">Get a quote</button>
                  <span id="success_form1" class="error"></span>
                </form>

              </div>
            </div>
          </div>
        </div>
        <div class="swiper-container swiper-slider" data-loop="true" data-autoplay="5329" data-simulate-touch="false">
          <div class="swiper-wrapper">
            <div class="swiper-slide" data-slide-bg="{{asset('frontend/landing-pages/01/images/page_slide01.jpg')}}"></div>
            <div class="swiper-slide" data-slide-bg="{{asset('frontend/landing-pages/01/images/page_slide02.jpg')}}"></div>
            <div class="swiper-slide" data-slide-bg="{{asset('frontend/landing-pages/01/images/page_slide03.jpg')}}"></div>
          </div>
          <!--Swiper Pagination-->
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <!-- Features-->
      <section class="section section-md bg-default section-shadow-bottom">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-7 col-md-6">
              <h3>Why people choose us</h3>
              <div class="services">
                <div class="unit align-items-end unit-spacing-md">
                  <div class="unit-left">
                    <div class="icon novi-icon icon-xl text-primary fl-real-estate-3-house153"></div>
                  </div>
                  <div class="unit-body">
                    <h4 class="services-title text-primary"><a href="#">Excellent reputation</a></h4>
                  </div>
                </div>
                <p class="services-text">Metro Properties Australia has an excellent reputation in the market and in the communities we serve. Our team lives in the communities we serve, making us fully motivated and dedicated.</p>
              </div>
              <div class="services">
                <div class="unit align-items-end unit-spacing-md">
                  <div class="unit-left">
                    <div class="icon novi-icon icon-xl text-primary fl-real-estate-3-house143"></div>
                  </div>
                  <div class="unit-body">
                    <h4 class="services-title text-primary"><a href="#">We are resourceful</a></h4>
                  </div>
                </div>
                <p class="services-text">Our real estate agency is a valued firm in the community with thousands of high profile contacts that we have developed from almost 60 years in the business.</p>
              </div>
              <div class="services">
                <div class="unit align-items-end unit-spacing-md">
                  <div class="unit-left">
                    <div class="icon novi-icon icon-xl text-primary fl-real-estate-3-plan1"></div>
                  </div>
                  <div class="unit-body">
                    <h4 class="services-title text-primary"><a href="#">Years of experience</a></h4>
                  </div>
                </div>
                <p class="services-text">The volume of transactions we have successfully negotiated has provided us with industry expertise and excellent negotiation techniques that we use to help our clients.</p>
              </div>
            </div>
            <div class="col-lg-5 col-md-6">
              <h3>Our advantages</h3>
              <ul class="list-marked heading-4">
                <li><a href="#">Teamwork</a></li>
                <li><a href="#">Market Knowledge</a></li>
                <li><a href="#">Training</a></li>
                <li><a href="#">Flexibility</a></li>
                <li><a href="#">Guidance</a></li>
                <li><a href="#">Negotiation</a></li>
                <li><a href="#">Affordable Pricing</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA-->
      <section class="parallax-container" data-parallax-img="{{asset('frontend/landing-pages/01/images/parallax-01.jpg')}}">
        <div class="parallax-content">
          <div class="container">
            <div class="row">
              <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                <div class="box-cta bg-primary-9">
                  <h2>Providing Various Properties</h2>
                  <p>At our agency, we work with various types of residential real estate properties. From small family homes to lofts and penthouses, we have a lot to offer our clients. Feel free to browse our website for the most popular properties or contact our realtors directly to find out more.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Video-->
      <section class="section bg-default section-lg text-center section-shadow-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <h3>Meet Metro Properties</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/9xkxT2hY634?si=aYI_iAJi5Gv_DIq2" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

      <!-- CTA-->
      <section class="parallax-container" data-parallax-img="{{asset('frontend/landing-pages/01/images/parallax-02.jpg')}}">
        <div class="parallax-content">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                <div class="box-cta bg-white-9">
                  <h2 class="text-primary">Lots of Useful Benefits</h2>
                  <p class="text-gray-550">Every property we sell includes a variety of useful benefits that will make your life easier and more comfortable. From fully equipped parking spaces to terraces and supermarkets located nearby, there are a lot of options that will be a nice addition to your desired real estate property.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Available Apartments-->
      <section class="section section-lg bg-default">
        <div class="container">
          <h3 class="text-center">Available Properties</h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-post" data-items="1" data-sm-items="2" data-lg-items="3" data-xl-items="4" data-dots="true" data-nav="true" data-loop="true" data-margin="30" data-mouse-drag="false">
            <div class="post">
              <figure class="post-figure"><a href="#"><img src="{{asset('frontend/landing-pages/01/images/post-01-270x201.jpg')}}" alt="" width="270" height="201"/></a></figure>
              <div class="post-title-wrap bg-primary">
                <h4 class="post-title"><a href="#">299 Wilson Str.</a></h4>
                <button class="post-button" type="button" data-toggle="modal" data-target="#modal-apartments"></button>
              </div>
              <ul class="post-list bg-gray-50">
                <li class="post-list-item">
                  <div class="post-list-title">Floor No.:</div>
                  <div class="post-list-description">2</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Rooms:</div>
                  <div class="post-list-description">3</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Area:</div>
                  <div class="post-list-description">98 sq.m.</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Price:</div>
                  <div class="post-list-price">$89,799</div>
                </li>
              </ul>
            </div>
            <div class="post">
              <figure class="post-figure"><a href="#"><img src="{{asset('frontend/landing-pages/01/images/post-02-270x201.jpg')}}" alt="" width="270" height="201"/></a></figure>
              <div class="post-title-wrap bg-primary">
                <h4 class="post-title"><a href="#">515 Adams Ave.</a></h4>
                <button class="post-button" type="button" data-toggle="modal" data-target="#modal-apartments"></button>
              </div>
              <ul class="post-list bg-gray-50">
                <li class="post-list-item">
                  <div class="post-list-title">Floor No.:</div>
                  <div class="post-list-description">3</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Rooms:</div>
                  <div class="post-list-description">4</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Area:</div>
                  <div class="post-list-description">59 sq.m.</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Price:</div>
                  <div class="post-list-price">$68,899</div>
                </li>
              </ul>
            </div>
            <div class="post">
              <figure class="post-figure"><a href="#"><img src="{{asset('frontend/landing-pages/01/images/post-03-270x201.jpg')}}" alt="" width="270" height="201"/></a></figure>
              <div class="post-title-wrap bg-primary">
                <h4 class="post-title"><a href="#">256 Sanchez Rd.</a></h4>
                <button class="post-button" type="button" data-toggle="modal" data-target="#modal-apartments"></button>
              </div>
              <ul class="post-list bg-gray-50">
                <li class="post-list-item">
                  <div class="post-list-title">Floor No.:</div>
                  <div class="post-list-description">4</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Rooms:</div>
                  <div class="post-list-description">5</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Area:</div>
                  <div class="post-list-description">115 sq.m.</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Price:</div>
                  <div class="post-list-price">$109,999</div>
                </li>
              </ul>
            </div>
            <div class="post">
              <figure class="post-figure"><a href="#"><img src="{{asset('frontend/landing-pages/01/images/post-04-270x201.jpg')}}" alt="" width="270" height="201"/></a></figure>
              <div class="post-title-wrap bg-primary">
                <h4 class="post-title"><a href="#">954 Smith Blvd.</a></h4>
                <button class="post-button" type="button" data-toggle="modal" data-target="#modal-apartments"></button>
              </div>
              <ul class="post-list bg-gray-50">
                <li class="post-list-item">
                  <div class="post-list-title">Floor No.:</div>
                  <div class="post-list-description">5</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Rooms:</div>
                  <div class="post-list-description">2</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Area:</div>
                  <div class="post-list-description">89 sq.m.</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Price:</div>
                  <div class="post-list-price">$99,199</div>
                </li>
              </ul>
            </div>
            <div class="post">
              <figure class="post-figure"><a href="#"><img src="{{asset('frontend/landing-pages/01/images/post-01-270x201.jpg')}}" alt="" width="270" height="201"/></a></figure>
              <div class="post-title-wrap bg-primary">
                <h4 class="post-title"><a href="#">299 Wilson Str.</a></h4>
                <button class="post-button" type="button" data-toggle="modal" data-target="#modal-apartments"></button>
              </div>
              <ul class="post-list bg-gray-50">
                <li class="post-list-item">
                  <div class="post-list-title">Floor No.:</div>
                  <div class="post-list-description">2</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Rooms:</div>
                  <div class="post-list-description">3</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Area:</div>
                  <div class="post-list-description">98 sq.m.</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Price:</div>
                  <div class="post-list-price">$89,799</div>
                </li>
              </ul>
            </div>
            <div class="post">
              <figure class="post-figure"><a href="#"><img src="{{asset('frontend/landing-pages/01/images/post-02-270x201.jpg')}}" alt="" width="270" height="201"/></a></figure>
              <div class="post-title-wrap bg-primary">
                <h4 class="post-title"><a href="#">515 Adams Ave.</a></h4>
                <button class="post-button" type="button" data-toggle="modal" data-target="#modal-apartments"></button>
              </div>
              <ul class="post-list bg-gray-50">
                <li class="post-list-item">
                  <div class="post-list-title">Floor No.:</div>
                  <div class="post-list-description">3</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Rooms:</div>
                  <div class="post-list-description">4</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Area:</div>
                  <div class="post-list-description">59 sq.m.</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Price:</div>
                  <div class="post-list-price">$68,899</div>
                </li>
              </ul>
            </div>
            <div class="post">
              <figure class="post-figure"><a href="#"><img src="{{asset('frontend/landing-pages/01/images/post-03-270x201.jpg')}}" alt="" width="270" height="201"/></a></figure>
              <div class="post-title-wrap bg-primary">
                <h4 class="post-title"><a href="#">256 Sanchez Rd.</a></h4>
                <button class="post-button" type="button" data-toggle="modal" data-target="#modal-apartments"></button>
              </div>
              <ul class="post-list bg-gray-50">
                <li class="post-list-item">
                  <div class="post-list-title">Floor No.:</div>
                  <div class="post-list-description">4</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Rooms:</div>
                  <div class="post-list-description">5</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Area:</div>
                  <div class="post-list-description">115 sq.m.</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Price:</div>
                  <div class="post-list-price">$109,999</div>
                </li>
              </ul>
            </div>
            <div class="post">
              <figure class="post-figure"><a href="#"><img src="{{asset('frontend/landing-pages/01/images/post-04-270x201.jpg')}}" alt="" width="270" height="201"/></a></figure>
              <div class="post-title-wrap bg-primary">
                <h4 class="post-title"><a href="#">954 Smith Blvd.</a></h4>
                <button class="post-button" type="button" data-toggle="modal" data-target="#modal-apartments"></button>
              </div>
              <ul class="post-list bg-gray-50">
                <li class="post-list-item">
                  <div class="post-list-title">Floor No.:</div>
                  <div class="post-list-description">5</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Rooms:</div>
                  <div class="post-list-description">2</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Area:</div>
                  <div class="post-list-description">89 sq.m.</div>
                </li>
                <li class="post-list-item">
                  <div class="post-list-title">Price:</div>
                  <div class="post-list-price">$99,199</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Subscribe-->
      <section class="section section-md section-md-2 bg-primary text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-11 col-md-11">
              <h3 class="text-style-1">Subscribe to our newsletter to get the latest news and tips from Metro Properties Australia.</h3>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
              <form class="rd-form rd-mailform rd-form-inline px-xl-3" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <input class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="Email Required">
                  <label class="form-label" for="subscribe-form-email">Your E-mail</label>
                </div>
                <div class="form-button">
                  <button class="button button-white" type="submit">Subscribe!</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Testimonials-->
      <section class="section section-lg bg-gray-50">
        <div class="container">
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-testimonials" data-items="1" data-dots="true" data-mouse-drag="false">
            <div class="testimonials">
              <div class="testimonials-header">
                <div class="unit unit-spacing-lg align-items-sm-end align-items-start flex-column flex-sm-row">
                  <div class="unit-left">
                    <figure class="testimonials-figure"><img class="rounded-circle" src="{{asset('frontend/landing-pages/01/images/testimonials-01-113x113.jpg')}}" alt="" width="113" height="113"/>
                    </figure>
                  </div>
                  <div class="unit-body">
                    <h4 class="testimonials-title">John Williams</h4>
                    <p class="testimonials-position">Client</p>
                  </div>
                </div>
              </div>
              <div class="testimonials-body">
                <q class="testimonials-quote">I have recently sold my rental property in Nelson via Metro Properties Australia. Everything about the sale was made seamless by your team.</q>
              </div>
            </div>
            <div class="testimonials">
              <div class="testimonials-header">
                <div class="unit unit-spacing-lg align-items-sm-end align-items-start flex-column flex-sm-row">
                  <div class="unit-left">
                    <figure class="testimonials-figure"><img class="rounded-circle" src="{{asset('frontend/landing-pages/01/images/testimonials-02-113x113.jpg')}}" alt="" width="113" height="113"/>
                    </figure>
                  </div>
                  <div class="unit-body">
                    <h4 class="testimonials-title">Peter Smith</h4>
                    <p class="testimonials-position">Client</p>
                  </div>
                </div>
              </div>
              <div class="testimonials-body">
                <q class="testimonials-quote">I have just bought an apartment in LA thanks to you and your brokers. Everything went smooth and easy, it was great!</q>
              </div>
            </div>
            <div class="testimonials">
              <div class="testimonials-header">
                <div class="unit unit-spacing-lg align-items-sm-end align-items-start flex-column flex-sm-row">
                  <div class="unit-left">
                    <figure class="testimonials-figure"><img class="rounded-circle" src="{{asset('frontend/landing-pages/01/images/testimonials-03-113x113.jpg')}}" alt="" width="113" height="113"/>
                    </figure>
                  </div>
                  <div class="unit-body">
                    <h4 class="testimonials-title">Adam Wilson</h4>
                    <p class="testimonials-position">Client</p>
                  </div>
                </div>
              </div>
              <div class="testimonials-body">
                <q class="testimonials-quote">I really appreciate your time and expertise in helping me find and buy my current home in Seattle, WA. Hope we can do business again.</q>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class="page-footer section-shadow-top">
        <div class="container">
          <div class="row row-50 flex-lg-row-reverse">
            <div class="col-xl-7 col-lg-6">
              <h3>Get in Touch</h3>
              <!--RD Mailform-->
              <form id="form2" class="rd-mailform rd-form-footer rd-mailform" data-form-output="form-output-global" data-form-type="contact">
               @csrf
                <div class="form-wrap">
                  <label class="form-label-outside" for="contact-name">Your Name <span class="text-primary">*</span></label>
                  <input class="form-input required" id="contact-name" type="text" name="name" >
                  <span id="error_form2_name" class="error"></span>
                </div>
                <div class="form-wrap">
                  <label class="form-label-outside" for="contact-email">Your E-mail <span class="text-primary">*</span></label>
                  <input class="form-input required" id="contact-email" type="email" name="email" >
                  <span id="error_form2_email" class="error"></span>
                </div>
                <div class="form-wrap">
                  <label class="form-label-outside" for="contact-phone">Your Phone <span class="text-primary">*</span></label>
                  <input class="form-input required" id="contact-phone" type="text" name="phone" >
                  <span id="error_form2_phone" class="error"></span>
                </div>
                <div class="form-wrap">
                  <label class="form-label-outside" for="contact-message">Message <span class="text-primary">*</span></label>
                  <textarea class="form-input required" id="contact-message" name="message" ></textarea>
                  <span id="error_form2_message" class="error"></span>
                </div>
                <div class="form-wrap-footer">
                  <button class="button button-primary" type="button" onclick="validateForm(2)">Send</button>
                  <span id="success_form2" class="error"></span>
                </div>
              </form>

            </div>
            <div class="col-xl-5 col-lg-6 agent-wrap">
              <h3>Our Director Principal</h3>
              <div class="box-agent unit unit-spacing-xl align-items-sm-end align-items-start flex-column flex-sm-row pr-xl-5">
                <div class="unit-left">
                  <figure><img class="rounded-circle" src="{{asset('frontend/landing-pages/01/images/agent-01-113x113.jpg')}}" alt="" width="113" height="113"/>
                  </figure>
                </div>
                <div class="unit-body">
                  <h4 class="text-primary">Gaurav Pahwa</h4>
                  <p>Tom is the senior real estate agent who will be glad to help you.</p>
                </div>
              </div>
              <ul class="contacts-list">
                <li class="contacts-item">
                  <div class="contacts-icon icon novi-icon fa fa-phone"></div>
                  <div class="contacts-list-title">Phone</div>
                  <div class="contacts-list-description"><a class="contacts-link-phone" href="tel:#">0405-555-510</a></div>
                </li>
                <li class="contacts-item">
                  <div class="contacts-icon icon novi-icon fa fa-envelope-o"></div>
                  <div class="contacts-list-title">E-mail</div>
                  <div class="contacts-list-description"><a class="contacts-link" href="mailto:#">gauravmetroproperties.com.au</a></div>
                </li>
                <li class="contacts-item">
                  <div class="contacts-icon icon novi-icon fa fa-whatsapp"></div>
                  <div class="contacts-list-title">WhatsApp</div>
                  <div class="contacts-list-description"><a class="contacts-link" href="#">WhatsApp</a></div>
                </li>
              </ul>
              <div class="rights-wrap">
                <!--Brand--><a class="brand" href="index.html"><img src="{{asset('frontend/landing-pages/01/images/logo-bl.png')}}" alt="" width="207" height="44"/></a>
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span> RAHUL . All Rights Reserved.</span></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Modal Apartments-->
    <div class="modal fade" id="modal-apartments" tabindex="-1" role="dialog" aria-labelledby="modal-apartments" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">515 Adams Ave.</h3>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <div class="row row-50">
              <div class="col-md-6">
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-modal" data-items="1" data-dots="true" data-autoplay="false" data-mouse-drag="false"><img src="{{asset('frontend/landing-pages/01/images/modal-01-368x274.jpg')}}" alt="" width="368" height="274"/><img src="{{asset('frontend/landing-pages/01/images/modal-02-368x274.jpg')}}" alt="" width="368" height="274"/><img src="{{asset('frontend/landing-pages/01/images/modal-03-368x274.jpg')}}" alt="" width="368" height="274"/><img src="{{asset('frontend/landing-pages/01/images/modal-04-368x274.jpg')}}" alt="" width="368" height="274"/>
                </div>
                <ul class="post-list bg-gray-50">
                  <li class="post-list-item">
                    <div class="post-list-title">Floor No.:</div>
                    <div class="post-list-description">3</div>
                  </li>
                  <li class="post-list-item">
                    <div class="post-list-title">Rooms:</div>
                    <div class="post-list-description">4</div>
                  </li>
                  <li class="post-list-item">
                    <div class="post-list-title">Area:</div>
                    <div class="post-list-description">59 sq.m.</div>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div class="modal-box-contacts">
                  <div class="modal-contacts-wrpa">
                    <h4>Get In Touch</h4>
                    <!--RD Mailform-->
                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                      <div class="form-wrap">
                        <label class="form-label" for="modal-name">Your Name <span class="text-primary">*</span></label>
                        <input class="form-input" id="modal-name" type="text" name="name" data-constraints="Required">
                      </div>
                      <div class="form-wrap">
                        <label class="form-label" for="modal-email">Your E-mail <span class="text-primary">*</span></label>
                        <input class="form-input" id="modal-email" type="email" name="email" data-constraints="Email Required">
                      </div>
                      <div class="form-wrap">
                        <label class="form-label" for="modal-phone">Your Phone <span class="text-primary">*</span></label>
                        <input class="form-input" id="modal-phone" type="text" name="phone" data-constraints="Numeric">
                      </div>
                      <button class="button button-primary button-block" type="submit">Get Notified!</button>
                      <p class="rd-form-required-text"><span>*</span> Required Fields</p>
                    </form>
                  </div>
                  <ul class="post-list bg-gray-50">
                    <li class="post-list-item">
                      <div class="post-list-title">Price:</div>
                      <div class="post-list-price">$68,899</div>
                    </li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="button button-primary" type="button" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/core.min.js"></script> --}}
    <script src="{{asset('frontend/landing-pages/01/js/core.min.js')}}"></script>
    <script src="{{asset('frontend/landing-pages/01/js/script.js')}}"></script>
    <!-- coded by kraken-->
	
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('frontend/js/form_data.js')}}"></script>

</html>
@extends('layouts.template')

@section('content')

    <!-- Hero Slider -->
<div class="banner-carousel banner-carousel-1 mb-0">
    <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg1.jpg)">
      <div class="slider-content">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12 text-center">
                  <h2 class="slide-title" data-animation-in="slideInLeft">welcome to</h2>
                  <h3 class="slide-sub-title" data-animation-in="slideInRight">tajmelna</h3>
                  <p data-animation-in="slideInLeft" data-duration-in="1.2">
                      <a href="{{ route('saloons') }}" class="slider btn btn-primary">Our Services</a>
                      <a href="{{ route('contact.index') }}" class="slider btn btn-primary border">Contact Now</a>
                  </p>
                </div>
            </div>
          </div>
      </div>
    </div>
  
    <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg2.jpg)">
      <div class="slider-content text-left">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12">
                  <h2 class="slide-title-box" data-animation-in="slideInDown">Beauty leaders</h2>
                  <h3 class="slide-title" data-animation-in="fadeIn">You are magnificent</h3>
                  <h3 class="slide-sub-title" data-animation-in="slideInLeft"> you are the most beautful woman in the world</h3>
                  <p data-animation-in="slideInRight">
                      <a href="{{ route('saloons') }}" class="slider btn btn-primary border">Our Services</a>
                  </p>
                </div>
            </div>
          </div>
      </div>
    </div>
  
    <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg3.jpg)">
      <div class="slider-content text-right">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12">
                  <h2 class="slide-title" data-animation-in="slideInDown">Meet our community</h2>
                  <h3 class="slide-sub-title" data-animation-in="fadeIn">We believe in Perfection</h3>
                  <p class="slider-description lead" data-animation-in="slideInRight">Everywhere you walk there is someone looking at your beauty.</p>
                  <div data-animation-in="slideInLeft">
                      <a href="{{ route('contact.index') }}" class="slider btn btn-primary" aria-label="contact-with-us">Contact Us</a>
                      <a href="{{ route('about-us') }}" class="slider btn btn-primary border" aria-label="learn-more-about-us">Learn more</a>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- End of Hero Slider -->
  
  <section class="call-to-action-box no-padding">
    <div class="container">
      <div class="action-style-box">
          <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
                <div class="call-to-action-text">
                  <h3 class="action-title">reaching your beauty is our target</h3>
                </div>
            </div><!-- Col end -->
            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                <div class="call-to-action-btn">
                  <a class="btn btn-dark" href="{{ route('saloons') }}">Our Saloons</a>
                </div>
            </div><!-- col end -->
          </div><!-- row end -->
      </div><!-- Action style box -->
    </div><!-- Container end -->
  </section><!-- Action end -->

  <!-- About Us Component -->
<section id="ts-features" class="ts-features">
    <div class="container">
      <div class="row">
          <div class="col-lg-6">
            <div class="ts-intro">
                <h2 class="into-title" id="aboutHome">About Us</h2>
                <h3 class="into-sub-title">tajmelna in a glance</h3>
                <p>Lots of Women face difficulty in reaching the ideal salon that suits there need according to the  
                  quality of desired services and prices that fit There status. So, 
                  we thought of creating a website that may be helpful in determining the most suitable service provider, 
                  the nature of service and compare different opinions coming from costumers own experiences with one salon from another 
                  so they can finally choose the best option.</p>
            </div><!-- Intro box end -->
  
            <div class="gap-20"></div>
  
            <div class="row">
                <div class="col-md-6">
                  <div class="ts-service-box">
                      <span class="ts-service-icon">
                        <i class="fas fa-trophy"></i>
                      </span>
                      <div class="ts-service-box-content">
                        <h3 class="service-box-title">We've Reputation for Excellence</h3>
                      </div>
                  </div><!-- Service 1 end -->
                </div><!-- col end -->
  
                <div class="col-md-6">
                  <div class="ts-service-box">
                      <span class="ts-service-icon">
                        <i class="fas fa-sliders-h"></i>
                      </span>
                      <div class="ts-service-box-content">
                        <h3 class="service-box-title">We Build Partnerships</h3>
                      </div>
                  </div><!-- Service 2 end -->
                </div><!-- col end -->
            </div><!-- Content row 1 end -->
  
            <div class="row">
                <div class="col-md-6">
                  <div class="ts-service-box">
                      <span class="ts-service-icon">
                        <i class="fas fa-thumbs-up"></i>
                      </span>
                      <div class="ts-service-box-content">
                        <h3 class="service-box-title">Guided by Commitment</h3>
                      </div>
                  </div><!-- Service 1 end -->
                </div><!-- col end -->
  
                <div class="col-md-6">
                  <div class="ts-service-box">
                      <span class="ts-service-icon">
                        <i class="fas fa-users"></i>
                      </span>
                      <div class="ts-service-box-content">
                        <h3 class="service-box-title">A Team of Professionals</h3>
                      </div>
                  </div><!-- Service 2 end -->
                </div><!-- col end -->
            </div><!-- Content row 1 end -->
          </div><!-- Col end -->
  
          <div class="col-lg-6 mt-4 mt-lg-0">
            <h3 class="into-sub-title">Our Values</h3>
            <p>The values ​​of Tajmelna can be summed up in three parts.</p>
  
            <div class="accordion accordion-group" id="our-values-accordion">
                <div class="card">
                  <div class="card-header p-0 bg-transparent" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Safe Browse
                        </button>
                      </h2>
                  </div>
                
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                      <div class="card-body">
                        Full supervision process for all services provided in Tajmelna
                      </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header p-0 bg-transparent" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Customer Service
                        </button>
                      </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                      <div class="card-body">
                        Providing many services for the Customers and receiving There feedback.
                      </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header p-0 bg-transparent" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Integrity
                        </button>
                      </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                      <div class="card-body">
                        Providing a large number of the best salons in the Kingdom, contributing to increase their turnout, and ensuring that the Customers get the best services.
                      </div>
                  </div>
                </div>
            </div>
            <!--/ Accordion end -->
  
          </div><!-- Col end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </section>
  <!-- About Us Component -->

 <!-- subscribe -->
<section class="subscribe no-padding">
  <div class="container">
    <div class="row">
        <div class="col-lg-4">
          <div class="subscribe-call-to-acton">
              <h3>Can We Help?</h3>
              <h4><a href="tel:+98472914353">(+962) 777814541</a></h4>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-8">
          <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0">Would you like us to communicate with you?</h4>
                <p class="text-white">What's new on Tajmelna</p>
              </div>

              <div class="col-md-7 newsletter-form">
                <form action="{{ route('subscribe') }}" method="POST">
                  @csrf
                    <div class="form-group">
                      <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                      <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Add your email and hit enter" autocomplete="off">
                    </div>
                </form>
              </div>
          </div><!-- Newsletter end -->
        </div><!-- Col end -->

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section>
<!--/ subscribe end -->

  <!-- Testimonials -->
<section class="content">
    <div class="container">
      <div class="row">
          <div class="col-lg-6">
            <h3 class="column-title">Testimonials</h3>
  
            <div id="testimonial-slide" class="testimonial-slide">
                <div class="item">
                  <div class="quote-item">
                      <span class="quote-text">
                        I fully support Tajmelna website, 
                        which is done by the students of my dear university, and I support everything that eases women's lives.
                      </span>
  
                      <div class="quote-item-footer">
                        <img loading="lazy" class="testimonial-thumb" src="images/clients/lara tareq.jpg" alt="testimonial">
                        <div class="quote-item-info">
                            <h3 class="quote-author">Lara Tareq</h3>
                            <span class="quote-subtext">Blogger, Model</span>
                        </div>
                      </div>
                  </div><!-- Quote item end -->
                </div>
                <!--/ Item 1 end -->
  
                <div class="item">
                  <div class="quote-item">
                      <span class="quote-text">
                        I really liked the idea of Tajmelna, 
                        as it will provide great job opportunities for the women's of our community, 
                        and support many salons that may not able to be reached.
                      </span>
  
                      <div class="quote-item-footer">
                        <img loading="lazy" class="testimonial-thumb" src="images/clients/lujain seed edden.jpg" alt="testimonial">
                        <div class="quote-item-info">
                            <h3 class="quote-author">Lujain Saad Edden</h3>
                            <span class="quote-subtext">Business Woman</span>
                        </div>
                      </div>
                  </div><!-- Quote item end -->
                </div>
                <!--/ Item 2 end -->
  
                <div class="item">
                  <div class="quote-item">
                      <span class="quote-text">
                        It's something to be proud of to find such website that is made by Jordanian students,
                        and I'm happy that cosmetic fields has become confined in one website.
                        I'm so happy for you guys.
                      </span>
  
                      <div class="quote-item-footer">
                        <img loading="lazy" class="testimonial-thumb" src="images/clients/Raghad almohareb.jpg" alt="testimonial">
                        <div class="quote-item-info">
                            <h3 class="quote-author">Raghad almohareb</h3>
                            <span class="quote-subtext">Cosmetics Expert</span>
                        </div>
                      </div>
                  </div><!-- Quote item end -->
                </div>
                <!--/ Item 3 end -->
  
            </div>
            <!--/ Testimonial carousel end-->
          </div><!-- Col end -->
  
          <div class="col-lg-6 mt-5 mt-lg-0">
  
            <h3 class="column-title" id="happyClients">Happy Clients</h3>
  
            <div class="row all-clients">
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="https://www.maccosmetics.ae/"><img loading="lazy" class="img-fluid" src="images/clients/mac.jpg" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 1 end -->
  
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="https://www.kikocosmetics.com/en-us/"><img loading="lazy" class="img-fluid" src="images/clients/kiko.jpg" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 2 end -->
  
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="https://www.flormar.com/"><img loading="lazy" class="img-fluid" src="images/clients/flormar.jpg" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 3 end -->
  
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="https://essencemakeup.com/"><img loading="lazy" class="img-fluid" src="images/clients/essence.jpg" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 4 end -->
  
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="https://www.revlon.com/"><img loading="lazy" class="img-fluid" src="images/clients/revlon.jpg" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 5 end -->
  
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="https://radiant-professional.com/en/"><img loading="lazy" class="img-fluid" src="images/clients/radiant.jpg" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 6 end -->
  
            </div><!-- Clients row end -->
  
          </div><!-- Col end -->
  
      </div>
      <!--/ Content row end -->
    </div>
    <!--/ Container end -->
  </section>
  <!-- Eno of Testimonials -->


@endsection
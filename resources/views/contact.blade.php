@include('header')
@include('navbar')
<style>
  .main-banner {

    padding: 100px 0px 0px 0px;

  }
</style>
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
              <div class="row">
                <div class="col-lg-12">
                  <h6>{{ config('about.full_name') }}</h6>
                  <h2>Contact {{ config('about.company_name') }}</h2>
                  <p>GreatEWay Technologies are one of the India's leading digital marketing, website design and web development company. we love to hear from you please feel free to contact us Thank you.</p>
                </div>
                <div class="col-lg-12">
                  <!-- <div class="border-first-button scroll-to-section">
                    <a href="#courses">See Courses</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="public/assets/images/19197030.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="contact-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
          <h6>Contact Us</h6>
          <h4>Get In Touch With Us <em>Now</em></h4>
          <div class="line-dec"></div>
        </div>
      </div>
      <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact" method="post" action="{{ route('mail_sent') }}">
          <div class="row">
            @csrf
            <div class="col-lg-12">
              <div class="contact-dec">
                <img src="public/assets/images/contact-dec-v3.png" alt="">
              </div>
            </div>
            <div class="col-lg-5">
              <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d867.1463250800094!2d73.9404905458347!3d18.550636051084744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c399308c4df7%3A0x56a3dd07e2356fa1!2sStellar%20Spaces!5e0!3m2!1sen!2sin!4v1662384040653!5m2!1sen!2sin" width="100%" height="636px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="fill-form">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="info-post">
                      <div class="icon">
                        <img src="public/assets/images/phone-icon.png" alt="">
                        <a href="#">{{ config('about.mobile1')}}</a>
                        <a href="#">{{ config('about.mobile2')}}</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="info-post">
                      <div class="icon">
                        <img src="public/assets/images/email-icon.png" alt="">
                        <a href="#">{{ config('about.email')}}</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="info-post">
                      <div class="icon">
                        <img src="public/assets/images/location-icon.png" alt="">
                        <a href="#">{{ config('about.address')}}</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                    </fieldset>
                    <fieldset>
                      <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                    </fieldset>
                    <fieldset>
                      <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <textarea name="msg" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="main-button "><i class="fa fa-circle-o-notch fa-spin hidden mr-1 fa-spin-visit"></i>Send Message Now</button>
                    </fieldset>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@include('footer')
@include('script')

</body>

</html>
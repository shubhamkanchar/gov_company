@include('header')

<!-- ***** Header Area Start ***** -->
@include('navbar')
<!-- ***** Header Area End ***** -->
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
                  <h2>Web Development</h2>
                  <p>Our Websites are unique and eye-catching, designed by using latest web designing tools which empowers our customers to represent themselves online confidently in the global arena to generate more revenue. Our web designers can change your ideas into reality by using their creative talent and knowledge of website standards and practices.</p>
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

<div id="about" class="about section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-6">
            <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="public/assets/images/about-dec-v3.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="about-right-content">
              <div class="section-heading">
                <!-- <h6>About Us</h6> -->
                <h4>How do we do it? Methodology</em></h4>
                <div class="line-dec"></div>
              </div>
              <p>{{ config('about.full_name') }} specializes in creating websites, which are customized and fully enriched for ultimate digital experience. We create highly user friendly static and dynamic websites without compromising the overall look and feel of the website. Our team of developers are experts in art of creating websites with the best of platforms & absolute value of your money.

                {{ config('about.full_name') }} has an enthusiastic team of web developers having in-depth knowledge and experience over a decade in web development and complete digital marketing. We have fresh, creative and innovative ideation, designs and technical expertise in developing website. {{ config('about.full_name') }} also ensures high degree of confidentiality for its clients and maintain in order to safeguard their interests.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id='goals' style="margin-top: 100px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>Technology Expertise</em></h4>
          <ul class="list-group">
            <li class="list-group-item">Web Application Development (Open Source)</li>
            <li class="list-group-item">PHP Development</li>
            <li class="list-group-item">Custom Application Development</li>
            <li class="list-group-item">Portal Development</li>
            <li class="list-group-item">Open Sources (Joomla, WordPress, OSCommerce,Drupal)</li>
            <li class="list-group-item">E-Commerce Web Development & Shopping cart solution.</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>Advantages of dynamic websites</em></h4>
          <ul class="list-group">
            <li class="list-group-item">Much more functional website</li>
            <li class="list-group-item">Much easier to update</li>
            <li class="list-group-item">New content brings people back to the site and helps in the search engines</li>
            <li class="list-group-item">Can work as a system to allow staff or users to collaborate</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <!-- <h4><em>Quality</em></h4> -->
          <p>{{ config('about.full_name') }} has set itself to take care of your ideas and shape them into reality with our expertise and innovative methodologies. We are a rapidly growing brand in web design and development solutions in the market, offering optimum web design services along with web development services. Our expertise in this field is time tested. With its exceptional services catered to various domains, providing quality web solutions.</p>
        </div>
      </div>
    </div>
  </div>
</div>

@include('footer')
@include('script')

</body>

</html>
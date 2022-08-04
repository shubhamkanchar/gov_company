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
                  <h2>Product Engineering</h2>
                  <p>Do you wish to choose a career that demands a blend of technical skills, analytical thinking and a dollop of creativity? If yes, then Product Engineering might just be what you are looking for.</p>
                  <p>Product engineering is the process of ideating, designing and developing a product with the intent to sell or generate revenue. The role demands combining technical acumen without of the thinking to implement innovative solutions.</p>
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
              <img src="public/assets/images/ill/4119036.jpg" alt="">
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
                <h4>Skills & Challenges</em></h4>
                <div class="line-dec"></div>
              </div>
              <p>A product engineer is involved in the entire lifecycle of product development – from planning, designing, and selection of materials, prototyping, testing and manufacturing. A product engineer has to design & build the product in a cost effective manner without compromising on the quality.</p><p>

The role of a Product Engineer may often stretch beyond the technical and analytical skills. One has to understand the market trends and demands to be able to predict the market needs to conceive an appropriate product design.</p>
              <p><i class="fa fa-check"></i>Before a product is launched an engineer also needs to ensure that there is proper technical documentation for the same. The product engineer needs to conceptualize a product which will be in sync with the market demand. He will have to work within the constraints of budget, time and scope. After conceptualizing the product, one needs to play a key role in product qualification which involves testing and providing evaluation reports based on customer requirements.</p>
              <p>{{ config('about.full_name') }} building blocks, in the form of solution accelerators and reusable components help bridge technology gaps and bring products to market faster. Our expertise in various technologies like Microsoft, Java, mobile and open source helps us deliver robust and commercially successful products to the market. {{ config('about.full_name') }} Product Engineering Services group brings vast experience in providing R&D, engineering services and product life cycle support in focused industry domains.</p>
              
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
      <div class="col-lg-12 text-center text_main_color"><h2>Development & Maintainance</h2></div>
      <div class="col-lg-10">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>User Experience</em></h4>
          <p>User Experience has its foundation in a User-Centric Design philosophy of product development. For the product is not an end in itself but merely a means towards an end. The end being providing awesome experience to the user of your software.</p><p>{{ config('about.full_name') }} has seen the software industry transform and transcend through various phases (and hypes). Over these years, one aspect has always been at the core of our business, customer experience. We have seamlessly transformed hundreds of applications in desktop, web and mobile to give our clients the confidence to meet and exceed changing customer demands and ‘fads’<b>From full lifecycle software product development to product release management {{ config('about.full_name') }} suite of new product development services include</b></p>
          <p><i class="fa fa-check"></i>Product research and technical consulting</p>
          <p><i class="fa fa-check"></i>Prototyping</p>
          <p><i class="fa fa-check"></i>Product design and development</p>
          <p><i class="fa fa-check"></i>Product Release Management</p>
          <p><i class="fa fa-check"></i>Product enhancements</p>
          <p><i class="fa fa-check"></i>Re-plat forming software product lines</p>
          <p><i class="fa fa-check"></i>Quality Assurance and Software testing Services</p>
          <p><i class="fa fa-check"></i>Product Maintenance and Support Services</p>
          <p><i class="fa fa-check"></i>Product support.</p>
        </div>
      </div>
      <div class="col-lg-10 offset-lg-2">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>Capability Areas:</em></h4>
          <p><i class="fa fa-check"></i>Embedded and Real-time Platforms</p>
          <p><i class="fa fa-check"></i>Mobile and Smart Phones Platforms</p>
          <p><i class="fa fa-check"></i>Communication Protocols and Telephony</p>
          <p><i class="fa fa-check"></i>Wireless Products and Customer premise equipment</p>
          <p><i class="fa fa-check"></i>Media - Voice and Video.</p>
          
        </div>
      </div>
      <div class="col-lg-10">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>Industries:</em></h4>
          <p><i class="fa fa-check"></i>Independent Software vendor</p>
          <p><i class="fa fa-check"></i>Avionics and Automotive</p>
          <p><i class="fa fa-check"></i>Infotainment and Digital Media</p>
          <p><i class="fa fa-check"></i>Defense and Security.</p>
        </div>
      </div>
    </div>
  </div>
</div>

@include('footer')
@include('script')

</body>

</html>
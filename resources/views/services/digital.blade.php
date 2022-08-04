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
                  <h2>Digital Marketing</h2>
                  <p>Digital Marketing refers to the marketing through which we can market our product using the digital media like social networks, email and so on. This is more flexible for executives and the most liked one by customers because the executives can market a thing using internet and a well computer knowledge person. The customers can buy a product by simply clicking using their computers or smart phones.</p>
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
              <img src="public/assets/images/ill/6182682.jpg" alt="">
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
                    <h4>Identifying the need for Digital Marketing Consultant</em></h4>
                    <div class="line-dec"></div>
                  </div>
                  <p>A quick check out reliable market stats will assist you understand the importance of digital marketing during a better way. According to market reports, nearly 28% of marketers are ready to compromise on their advertising budgets thus funding digital even more. Quite naturally, it creates the demand for highly efficient and skilled digital marketers. Unlike our contemporaries, we believe in creating digital experiences for our esteemed clients; and we know that’s not possible without comprehensive ideas of their business aims. Check out the subsequent points to know how we work.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<div id='goals'>
  <div class="container mt-2">
    <div class="row">
      <div class="col-lg-12" >
        <div class="card mt-5 box-shadow" style="padding: 25px;">
        <h4><em>Benefits with Us</em></h4>
        <p>Our professionals are associated and effort together to service clients and exploit their chances using digital Marketing services with following benefits.</p>
          <ul class="list-group">
            <li class="list-group-item">Customer Reach – The strength of Digital marketing services is extensive, first step to success of your industry to be a branded, greater, newer and enhanced leads and sales.</li>
            <li class="list-group-item">Aggressive – You can stretch out beyond your rivals who have not yet learned nor started any digital marketing services and campaigns for their business.</li>
            <li class="list-group-item">Suitability – It is not necessary to stress about particulars and details of your marketing services as we got you protected, issuing you enough time and comfort to concentrate on what you specialize in maintaining your business.</li>
            <li class="list-group-item">Inexpensive – Your business can bridle the force of multi-channel advertising that is a great deal more inexpensive than any conventional types of publicizing.</li>
            
          </ul>
        </div>
      </div>
      <div class="col-lg-12">
      <div class="card mt-5 box-shadow" style="padding: 25px;">
        <h4><em>We helps you make your website SEO friendly by:</em></h4>
        <ul class="list-group">
            <li class="list-group-item">Using keywords that enrich your content and enhance your visibility in relevant searches. However, we keep in mind</li>
            <li class="list-group-item">that using excessive keywords is not a healthy practice because it can get you penalized.</li>
            <li class="list-group-item">Making sure that flash files are used sparingly and not in excess because crawlers cannot read animation and flash files.</li>
            <li class="list-group-item">Making use of semantic code that enables bots to read and understand what the website is all about.</li>
            <li class="list-group-item">Providing unique tags and title descriptions so that the bots automatically know that the content of each page is different from the others.</li>
            <li class="list-group-item">Providing hassle-free navigation and easy to understand layout to enable easy movement of bots.</li>
            <li class="list-group-item">Creating internal as well as external linkages and also facilitating incoming links.</li>
            <li class="list-group-item">Building a sitemap to help crawlers easily enter and index your website.</li>
          </ul>
      </div>
      </div>
      <!-- <div class="col-lg-12">
      <div class="card mt-5 box-shadow" style="padding: 25px;">
        <h4><em>Quality</em></h4>
        <p>{{ config('about.full_name') }} has set itself to take care of your ideas and shape them into reality with our expertise and innovative methodologies. We are a rapidly growing brand in web design and development solutions in the market, offering optimum web design services along with web development services. Our expertise in this field is time tested. With its exceptional services catered to various domains, providing quality web solutions.</p>
      </div>
      </div> -->
    </div>
  </div>
</div>

@include('footer')
@include('script')

</body>

</html>
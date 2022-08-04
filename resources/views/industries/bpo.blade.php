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
                  <h2>BPO</h2>
                  <p>The cost of running a business has dramatically increased over the years. One of the methods available for businesses to cut costs is to outsource non-core business processes to firms that specialize in carrying out such operations. Many businesses, from large corporations to smaller firms, have opted for outsourcing such operations. This helps to reduce their cost overheads and increase productivity and efficiency.</p>
                  <p>Businesses outsource processes including human resources management, accounting, financial research, data management, marketing, sales, legal work, logistics, etc. to specialist Business Process Outsourcing (BPO) firms. By outsourcing these activities, businesses can concentrate on its core functions.</p>
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
              <img src="public/assets/images/ill/3873169.jpg" alt="">
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
                <h4>Choosing the right BPO provider</em></h4>
                <div class="line-dec"></div>
              </div>
              <p>With BPO becoming a growing trend with major businesses and corporations, there has been an increase in the companies offering BPO services. Selecting the right BPO service provider from among them can be a daunting task. Below are key factors to look for when choosing a BPO service provider.</p>
              <p><i class="fa fa-check"></i>The BPO service provider should have the requisite experience and the expertise to handle the business processes.</p>
              <p><i class="fa fa-check"></i>It should have a track record of timely delivery.</p>
              <p><i class="fa fa-check"></i>It should have implemented rigorous security protocols to avoid data theft and misuse.</p>
              <p><i class="fa fa-check"></i>It should be able to offer flexible options to meet the varying demands of its clients.</p>
              <p><i class="fa fa-check"></i>It should be of good financial standing.</p>
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
      <div class="col-lg-10">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>What is a voice Process?</em></h4>
          <p>The process in which the information, the query is being solved through a conversation on the phone is known as voice process. It is a varied process that includes the involvement of experts for communication.</p>
        </div>
      </div>
      <div class="col-lg-10 offset-lg-2">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>The in and out bond of Voice Process</em></h4>
          <p>When the process is being focused on the in-house activities of the company, product, it is termed as an inbound process. For more clarity, we can say that when the process is being focused to solve the query or to give the information of a specific product that is in house based, it is categorized as in -bound voice process.</p>
          <p>Similarly, when the voice process includes the informative introduction of the company or the product, it is termed as an outbound process. The process includes the calling from the company’s end and is focused on giving information about the where abouts of any new launch or a regular call up to upgrade the services, offered by the company.</p>
        </div>
      </div>
      <div class="col-lg-10">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>Why {{ config('about.full_name') }} BPO Services?</em></h4>
          <p>{{ config('about.full_name') }} include the skilled manpower and expertise to organize and manage huge inbound and outbound services. Our entire team of technical experts comprise of qualified, well-versed and proficient call center agents who can handle massive volumes of day to day calls professionally.</p>
          <p>All our technical staff has to go through an in-house training aimed at bringing customer satisfaction. It starts from greeting customers over the phone calls and later continuing with the answering services including calls pertaining to lead generation, collections, sales, customer care programs, follow up calls, verifications, market research and surveys.</p>
          <p>{{ config('about.full_name') }} can be your one-stop business process outsourcing outlet if you seek to satisfy all your customer services, help desk functions, campaigns for email marketing, data entry, broadcasting, back office, website promotion, customer support, outbound telemarketing calls and more. Whatever may be your need for call center outsourcing, make {{ config('about.full_name') }} your choice to experience the best Business Process Outsourcing services like never before.</p>
        </div>
      </div>
      <div class="col-lg-10 offset-lg-2">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>What More Can You Get?</em></h4>
          <p>{{ config('about.full_name') }} offers a comprehensive range of voice based services in its widely distributed call centers across the globe. It not only includes inbound and outbound call center services but also back office transaction processing. {{ config('about.full_name') }} back office services include multiple business verticals. These include communication, distribution, financial and industrial service industries.</p>
          <p>We are well-aware of the business complexities and the flexibility that every client looks for in today's market. Our call center solutions are customized to meet up your specifications and ensure better satisfaction. With us, your call center outsourcing needs will get carefully examined. We will bring you a personalized package especially created to meet your business environment.</p>
        </div>
      </div>
    </div>
  </div>
</div>

@include('footer')
@include('script')

</body>

</html>
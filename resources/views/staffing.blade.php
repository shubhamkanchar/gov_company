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
      <div class="col-lg-12 mt-10">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
              <div class="row">
                <div class="col-lg-12">
                  <h6>{{ config('about.full_name') }}</h6>
                  <h2>IT Staffing</h2>
                  <p>We care about building a long-term relationship with everyone we work with, including both clients and candidates. By taking extra steps to learn about your company, including thorough periodic visits to your site, we learn about your culture, environment, and values – allowing us to find a candidate who fits well within your company at every level.</p>
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
              <img src="public/assets/images/ill/20944400.jpg" alt="">
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
                <h4>Our model reduces the average time spent per hire.</em></h4>
                <div class="line-dec"></div>
              </div>
              <p>Our rigorous technical screening process is conducted by certified Senior Architects, ensuring that every candidate we work with is a high-caliber performer. When we provide you with candidate information, we include a detailed report of the candidate's responses to technical questions that are applicable to your project. This leads to a significant reduction in time investment from your company's hiring manager, as he or she will have to evaluate only a small number of qualified submissions.</p>
                <!-- <p><i class="fa fa-check"></i>Design cable faster, more effectively, with less waste</p>
                <p><i class="fa fa-check"></i>Streamline your manufacturing process from quotation through to production</p>
                <p><i class="fa fa-check"></i>Produce high quality 3D datasheets that can be presented to your clients</p>
                <p><i class="fa fa-check"></i>Respond to client needs quickly and professionally</p>
                <p><i class="fa fa-check"></i>Administration</p>
                <p><i class="fa fa-check"></i>Engineering & Technology.</p> -->
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
        
      <div class="col-lg-6 mt-4">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>Our contract structure saves you money on IT contractor expenses.</em></h4>
          <p>Our aggressive rates and flexible hiring structure allows you to fill the position you need for a competitive rate, without sacrificing quality or reliability.</p>
          
        </div>
      </div>
      <div class="col-lg-6 mt-4">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>Permanent Staffing / Executive Placement</em></h4>
          <p>{{ config('about.full_name') }}, is a full-service human resource consulting firm which has been operating throughout India, & our emphasis is on providing cost-effective, specialized assistance in locating qualified, skilled personnel in a wide range of occupational areas, including:</p>
          <p><i class="fa fa-check"></i>Sales & Marketing</p>
          <p><i class="fa fa-check"></i>Management</p>
          <p><i class="fa fa-check"></i>Accounting & Finance</p>
          <p><i class="fa fa-check"></i>Information Technology</p>
          <p><i class="fa fa-check"></i>Administration</p>
          <p><i class="fa fa-check"></i>Engineering & Technology.</p>
        </div>
      </div>
      <div class="col-lg-6 mt-4">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>Contract-to-Hire Staffing</em></h4>
          <p>By utilizing {{ config('about.full_name') }} contract-to-hire staffing services, a company can benefit from the traditional services a temporary staffing agency offers with the option to hire the employee permanently. You can observe the employee on the job to determine if he or she is the right fit for the position. After the contract period is complete, the employee can be hired on a permanent basis.</p>
          
        </div>
      </div>
      <div class="col-lg-6 mt-4">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>Recruitment Process Outsourcing</em></h4>
          <p>Our recruitment process outsourcing is designed to assist companies to depend on our expertise where they can concentrate on the business end whereas we goto the market and search the right skills for them. We partner with the required services providers, manage walk-ins, do the complete recruitment process. Our process is designed in a transparent manner where the client is notified at every step with the correct reporting.</p>
        </div>
      </div>
      <div class="col-lg-12 mt-4">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>It Staffing Solutions To Optimize Workforce</em></h4>
          <p>Our IT staffing solutions facilitate you with a number of options to protect, validate, analyze and optimize your resources to succeed. We begin our joint venture in quest of deeply indulging with all your business targets and gaps between your current and upcoming conditions. We then architect a strategic IT staffing workforce to fulfill your need for candidates with high level of expertise and competencies.</p>
        </div>
      </div>
      <div class="col-lg-12 mt-4">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
            <h4><em>Selection</em></h4>
            <p>Our next essential step is to select the candidate based on the results of phases mentioned above. The staffing selection is accomplished by verifying the forms and certifications provided by the candidate.</p>
      </div>
    </div>
    <div class="col-lg-12 mt-4">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
            <h4><em>Interview</em></h4>
            <p>The next step is to interview a candidate to get to know his ability to tackle different challenges. We execute an in-detail conversation with an employee and analyze the strategies that they will use to coordinate with teams. Moreover, we do take into the experience required to fit into the vacant position.</p>
      </div>
    </div>
    <div class="col-lg-12 mt-4">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
            <h4><em>Performance Monitoring</em></h4>
            <p>Though all the recruitment steps have been completed, our work is not over yet! We make sure to examine the performance of the candidate and ensure if the client is satisfied and contented with our service.</p>
      </div>
    </div>
  </div>
</div>

@include('footer')
@include('script')

</body>

</html>
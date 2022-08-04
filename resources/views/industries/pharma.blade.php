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
                  <h2>Pharmaceuticals</h2>
                  <p>A pharmaceutical company, or drug company, is a commercial business licensed to research, develop, market and/or distribute drugs, most commonly in the context of healthcare.

They can deal in generic and/or brand medications. They are subject to a variety of laws and regulations regarding the patenting, testing and marketing of drugs, particularly prescription drugs.

The pharmaceutical industry is now one of the most profitable and influential in existence, attracting praise and controversy. Drug discovery is the process by which drugs are discovered and/or designed.</p>
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
              <img src="public/assets/images/ill/Wavy_Edu-01_Single-01.jpg" alt="">
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
                <h4>The Advantage</em></h4>
                <div class="line-dec"></div>
              </div>
              <p>{{ config('about.full_name') }} provides world-class solutions across the pharmaceutical value chain. We have expertise across all functional areas of the pharmaceutical life cycle — discovery, clinical development, medical affairs, product launch, commercial analytics (sales and marketing) and business strategy. Our Center of Excellence model enables clients to have a dedicated team for deeper cross-channel insights and intelligence.</p>
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
          <h4><em>Domain Expertise</em></h4>
          <p>We have more skilled resources dedicated to pharmaceutical and life sciences business research, reporting and analytics practice. Our teams comprise of MDs, nurses, postgraduates in pharmacy, programmers, data modelers, UX designers and visualization tool specialists. We can execute multi-country projects for multiple disease areas, especially where market insights are inadequate.</p>
        </div>
      </div>
      <div class="col-lg-10 offset-lg-2">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>Domain University</em></h4>
          <p>{{ config('about.full_name') }} has invested in a healthcare domain university where employees undergo relevant training for professional development across multiple domains and technologies. With a diverse range of resources, we can quickly deploy teams as exclusive service delivery units and allow rapid expansion as per the client’s requirements.</p>
        </div>
      </div>
      <div class="col-lg-10">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>Therapy Area Analyzer</em></h4>
          <p>{{ config('about.full_name') }}’ robust therapy area knowledge repository, Therapy Area Analyzer. It also provides information on disease etiology. Tomorrow’s challenge is to develop new medicines that can prevent or cure currently incurable diseases. Today’s challenge is to get to tomorrow – and that’s a tall order in itself.</p>
          <p><b>customer expectations:</b> The commercial environment is getting harsher, as healthcare payers impose new cost constraints on healthcare providers and scrutinise the value medicines offer much more carefully. They want new therapies that are clinically and economically better than the existing alternatives, together with hard, real-world outcomes data to back any claims about a medicine’s superiority.</p>
          <p><b>Poor scientific productivity:</b> Pharma’s output has remained at a stable level for the past decade. Using the same discovering and developing processes, there’s little reason to think its productivity will suddenly soar. The prevailing management culture, mental models and strategies on which the industry relies are the same ones it’s traditionally relied on, even though they’ve been eclipsed by new ways of doing business.</p>
          <p>Today, {{ config('about.full_name') }} is a necessary and trusted member of India's healthcare community. The company's pharmaceuticals can be found in virtually every pharmacy and healthcare facility in Canada and are exported to countries around the globe. Export markets represent an ever growing portion of the total sales. {{ config('about.full_name') }} has also established a presence through subsidiaries, joint ventures or licensing agreements in India. Healthcare professionals around the world rely on {{ config('about.full_name') }} for quality and value.</p>
          <p>Although the company's own business is developing and manufacturing generic pharmaceuticals, the success of {{ config('about.full_name') }} has enabled it to diversify into a number of other health-related areas. The {{ config('about.full_name') }} Pharmaceutical Group of Companies also researches, develops, manufactures and distributes fine chemicals, non-prescription and private label medicines, and disposable plastics for medical use.</p>
        </div>
      </div>
      <!-- <div class="col-lg-10 offset-lg-2">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>BI Reporting Solutions</em></h4>
          <ul class="list-group">
          <li class="list-group-item"><i class="fa fa-check"></i>Design, Development and Testing of Canned and Adhoc Reports</li>
            <li class="list-group-item"><i class="fa fa-check"></i>Static and Drill through Reports</li>
            <li class="list-group-item"><i class="fa fa-check"></i>Enterprise Reporting, KPIs</li>
            <li class="list-group-item"><i class="fa fa-check"></i>Dashboard/Scorecard Applications</li>
            <li class="list-group-item"><i class="fa fa-check"></i>Expertise in SSRS ,IBM Cognos ,SiSense Prism ,Oracle APEX and OBIEE suite.</li>
          </ul>
        </div>
      </div> -->
    </div>
  </div>
</div>

@include('footer')
@include('script')

</body>

</html>
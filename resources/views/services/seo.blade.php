@include('header')

<!-- ***** Header Area Start ***** -->
@include('navbar')
<!-- ***** Header Area End ***** -->

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
                  <h2>SEO (Search Engine Optimization)</h2>
                  <p>Search engine optimization services help a website rank well on Google and other major search engines. Website is built with the help of search engine optimization.</p>
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
              <img src="public/assets/images/slider-dec-v3.png" alt="">
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
                <h4>To be more precise, search engine optimization service includes</em></h4>
                <div class="line-dec"></div>
              </div>
              <p><i class="fa fa-check"></i>SEO target marketing – estimating and exploring market niches for your product / service, gauging its size and analyzing competitors.</p>
            <p><i class="fa fa-check"></i>SEO copyrighting – building up a range of keywords that capture market and developing optimized content that directly addresses your customers’ needs.</p>
            <p><i class="fa fa-check"></i>SEO web site development – improving site hierarchy, creating unique META tags and cross-linking the pages of resource (after bots crawl and index it, we will launch promo campaign).</p>
            <p><i class="fa fa-check"></i>You can choose the search engine optimization service package including SEO target marketing (or SEO copyrighting / SEO web site development) only or a full service package (SEO + promotion).</p>
            <p><i class="fa fa-check"></i>Whatever you go for, you can be sure that search engine optimization service by {{ config('about.full_name') }} will help you to outrank your competitors. And we are talking not sponsored listings. Our search engine optimization service is directed towards the natural ranking.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id='goals' style="margin-top: 100px;">

  <div class="container">
  <div class="card mt-5 box-shadow" style="padding: 25px;">
    <div class="row">
      <div class="col-lg-6">
        
          <h4><em>SEO Services we provide includes:</em></h4>
          <ul class="list-group">
            <p><i class="fa fa-check"></i>Free initial SEO Report</p>
            <p><i class="fa fa-check"></i>SEO Friendly Web design and Development</p>
            <p><i class="fa fa-check"></i>Keyword Research</p>
            <p><i class="fa fa-check"></i>SEO Copywriting</p>
            <p><i class="fa fa-check"></i>Search Engine Compatibility analysis</p>
            <p><i class="fa fa-check"></i>HTML Code Refining</p>
          </ul>
        
      </div>
      <div class="col-lg-6">
          <ul class="list-group">
            <p><i class="fa fa-check"></i>Content Analysis</p>
            <p><i class="fa fa-check"></i>Site Structure Analysis</p>
            <p><i class="fa fa-check"></i>Website Competitive Analysis</p>
            <p><i class="fa fa-check"></i>Meta Tags Optimization</p>
            <p><i class="fa fa-check"></i>Advanced Link Building</p>
            <p><i class="fa fa-check"></i>Directory Submission</p>
            <p><i class="fa fa-check"></i>SEO Analytics</p>
          </ul>
        
      </div>
    </div>
  </div>
  </div>
</div>

@include('footer')
@include('script')

</body>

</html>
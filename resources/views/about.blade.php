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
                  <h2>About {{ config('about.company_name') }}</h2>
                  <p>{{ config('about.full_name') }} is a professional Digital Marketing, Website Design and Development company based in India. {{ config('about.full_name') }} is a full service provider for corporate or individual interested in designing their design & development needs of web based projects. {{ config('about.full_name') }} has been eligible to provide the best of services to our clients across the world remaining to our years of experience in Digital Marketing, Web Designing and Website Development. {{ config('about.full_name') }} are one of the India's leading digital marketing, website design and web development company. We provide time bound, cost effective and value added services for technology innovative business solutions that require specialized domain expertise.</p>
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
              <img src="public/assets/images/4457.jpg" alt="">
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
                <h6>About Us</h6>
                <h4>Who is <em>{{ config('about.company_name')}}</em></h4>
                <div class="line-dec"></div>
              </div>
              <p>We integrate those solutions within our clients' existing ecosystems, to maximize technology investments already made. As a services company, we know we have to earn our clients’ business every day.</p>
              <div class="row">
                <div class="col-lg-4 col-sm-4">
                  <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="progress" data-percentage="90">
                      <span class="progress-left">
                        <span class="progress-bar"></span>
                      </span>
                      <span class="progress-right">
                        <span class="progress-bar"></span>
                      </span>
                      <div class="progress-value">
                        <div>
                          90%<br>
                          <span>Coding</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                  <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="progress" data-percentage="80">
                      <span class="progress-left">
                        <span class="progress-bar"></span>
                      </span>
                      <span class="progress-right">
                        <span class="progress-bar"></span>
                      </span>
                      <div class="progress-value">
                        <div>
                          80%<br>
                          <span>Photoshop</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                  <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="progress" data-percentage="80">
                      <span class="progress-left">
                        <span class="progress-bar"></span>
                      </span>
                      <span class="progress-right">
                        <span class="progress-bar"></span>
                      </span>
                      <div class="progress-value">
                        <div>
                          80%<br>
                          <span>Animation</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id='goals'>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-6" >
        <div class="card mt-5 box-shadow" style="padding: 25px;">
        <h4><em>Our Mission</em></h4>
        <p>With mission to develop the clients performance in their business, our company is sincerely working harder for showing profit oriented results to their clients all over the World. We provides a consultative session to help the client in articulating the right web based solution to solve their business challenge.</p>
        </div>
      </div>
      <div class="col-lg-6">
      <div class="card mt-5 box-shadow" style="padding: 25px;">
        <h4><em>Our Vision</em></h4>
        <p>We aim to become the service provider of choice for clients in the domain of banking, insurance and other financial services, offering them professional and comprehensive risk management solutions.We seek to capitalize on opportunities and translate our potential for growth into tangible business results, while promoting the individual growth of our team members.</p>
      </div>
      </div>
      <div class="col-lg-12">
      <div class="card mt-5 box-shadow" style="padding: 25px;">
        <h4><em>Quality</em></h4>
        <p>We value the unique combination of qualities and contributions that each person brings to the workplace. Development work is done from our offshore development center in India and Project Management / Sales operations are done from India.</br>

          We assure to deliver high quality and reliable IT solutions at a competitive cost to our clients that ranges from {{ config('about.full_name') }}, and niche new generation technology companies. {{ config('about.full_name') }} has been continually investing in maintaining the infrastructure to give the best work environment to our team members and to serve our customers better.</br>

          Being an offshore company, {{ config('about.full_name') }} deals with its entire developmental works in its offshore center in India, while all the sales operations and project management activities are handled in India. Our business model allows us to offer web development solutions at the most competitive and affordable prices. Our experts' teams are capable of handling various project sizes ranging from SMEs to companies.</br>

          We understand the importance of proper infrastructure towards maintaining an environment that enables experts to cater to the diverse needs of customers and accordingly regularly invest in our development centers to guarantee high-quality results through the offering.</p>
      </div>
      </div>
    </div>
  </div>
</div>



@include('footer')
@include('script')

</body>

</html>
    @include('header')

    <!-- ***** Header Area Start ***** -->
    @include('navbar')
    <!-- ***** Header Area End ***** -->
    <style>
      .main-banner {

        padding: 200px 0px 0px 0px;

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
                      <h2>Welcomme to {{ config('about.company_name') }}</h2>
                      <p> {{ config('about.company_name') }} Technologies are one of the India's leading digital marketing, website design and web development company. We provide time bound, cost effective and value added services for technology innovative business solutions that require specialized domain expertise. Thank you.</p>
                    </div>
                    <div class="col-lg-12">
                      <!-- <div class="border-first-button scroll-to-section">
                        <a href="#courses">Quick See Courses</a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                  <img src="public/assets/images/20945431.jpg" alt="">
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

    <div id="services" class="services section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
              <h6>Our Services</h6>
              <h4>What Our Agency <em>Provides</em></h4>
              <div class="line-dec"></div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="naccs">
              <div class="grid">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="menu">
                      <div class="first-thumb active">
                        <div class="thumb">
                          <span class="icon"><img src="public/assets/images/service-icon-01.png" alt="web development"></span>
                          SEO
                        </div>
                      </div>
                      <div>
                        <div class="thumb">
                          <span class="icon"><img src="public/assets/images/service-icon-02.png" alt="digital marketing"></span>
                          Digital Marketing
                        </div>
                      </div>
                      <div>
                        <div class="thumb">
                          <span class="icon"><img src="public/assets/images/service-icon-03.png" alt="seo"></span>
                          Hadoop
                        </div>
                      </div>
                      <div>
                        <div class="thumb">
                          <span class="icon"><img src="public/assets/images/service-icon-04.png" alt="hadoop"></span>
                          Web Development
                        </div>
                      </div>
                      <div class="last-thumb">
                        <div class="thumb">
                          <span class="icon"><img src="public/assets/images/service-icon-01.png" alt="data warehouse"></span>
                          Data Warehousing
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <ul class="nacc">
                      <li class="active">
                        <div>
                          <div class="thumb">
                            <div class="row">
                              <div class="col-lg-6 align-self-center">
                                <div class="left-text">
                                  <h4>SEO Analysis &amp; Daily Reports</h4>
                                  <p>There’s some SEO in everything you do online. But that doesn’t mean everyone needs the same SEO services. Build your search engine optimization foundation with the trusted experts. We offer the right plans and strategies match your exact needs.</p>
                                  <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span>
                                  </div>
                                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p> -->
                                </div>
                              </div>
                              <div class="col-lg-6 align-self-center">
                                <div class="right-image">
                                  <img src="public/assets/images/services-image.jpg" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div>
                          <div class="thumb">
                            <div class="row">
                              <div class="col-lg-6 align-self-center">
                                <div class="left-text">
                                  <h4>Digital Marketing</h4>
                                  <p>Digital Marketing refers to the marketing through which we can market our product using the digital media like social networks, email and so on. This is more flexible for executives and the most liked one by customers because the executives can market a thing using internet and a well computer knowledge person. The customers can buy a product by simply clicking using their computers or smart phones.</p>
                                  <!-- <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p> -->
                                </div>
                              </div>
                              <div class="col-lg-6 align-self-center">
                                <div class="right-image">
                                  <img src="public/assets/images/services-image-02.jpg" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div>
                          <div class="thumb">
                            <div class="row">
                              <div class="col-lg-6 align-self-center">
                                <div class="left-text">
                                  <h4>Hadoop</h4>
                                  <p>Hadoop is absolutely critical to the operations of Yahoo, executives with the company said this week at the Hadoop Summit. While the company, which spun out Hortonworks, is moving away from “traditional” Hadoop components like MapReduce in favor of YARN, Tez, and Hive, the Hadoop platform remains absolutely core to its operations.There’s a stream of thought in the wider big data community that Hadoop is old hat</p>
                                  <!-- <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p> -->
                                </div>
                              </div>
                              <div class="col-lg-6 align-self-center">
                                <div class="right-image">
                                  <img src="public/assets/images/services-image-03.jpg" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div>
                          <div class="thumb">
                            <div class="row">
                              <div class="col-lg-6 align-self-center">
                                <div class="left-text">
                                  <h4>Web Development</h4>
                                  <p>{{ config('about.full_name') }} specializes in creating websites, which are customized and fully enriched for ultimate digital experience. We create highly user friendly static and dynamic websites without compromising the overall look and feel of the website. Our team of developers are experts in art of creating websites with the best of platforms & absolute value of your money. We have fresh, creative and innovative ideation, designs and technical expertise in developing website.</p>
                                  <!-- <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p> -->
                                </div>
                              </div>
                              <div class="col-lg-6 align-self-center">
                                <div class="right-image">
                                  <img src="public/assets/images/services-image-04.jpg" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div>
                          <div class="thumb">
                            <div class="row">
                              <div class="col-lg-6 align-self-center">
                                <div class="left-text">
                                  <h4>Data Warehousing</h4>
                                  <p>{{ config('about.full_name') }} offers a comprehensive suite of data warehousing services that help enterprises mitigate the challenges of disparate data, unstructured data formats, and data quality issues. While providing you the ability to overcome challenges involved in information management, we help you unearth hidden values in information public/assets to facilitate informed decision making. Our DW/BI practice focuses on to reducing overall risk on the project while increasing the probability of meeting the actual needs of end users.</p>
                                  <!-- <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p> -->
                                </div>
                              </div>
                              <div class="col-lg-6 align-self-center">
                                <div class="right-image">
                                  <img src="public/assets/images/services-image.jpg" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div id="free-quote" class="free-quote">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 offset-lg-4">
            <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
              <h6>Get Your Free Quote</h6>
              <h4>Grow With Us Now</h4>
              <div class="line-dec"></div>
            </div>
          </div>
          <div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
            <form id="search" action="#" method="GET">
              <div class="row">
                <div class="col-lg-4 col-sm-4">
                  <fieldset>
                    <input type="web" name="web" class="website" placeholder="Your website URL..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-4 col-sm-4">
                  <fieldset>
                    <input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-4 col-sm-4">
                  <fieldset>
                    <button type="submit" class="main-button">Get Quote Now</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="section blog" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 offset-lg-4">
            <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
              <h6>Connect with us</h6>
              <h4>Our Partners and Clients</h4>
              <div class="line-dec"></div>
            </div>
          </div>
          <div class="col-lg-12">

            <section class="customer-logos slider">
              <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
              <div class="slide"><img src="http://www.webcoderskull.com/img/logo.png"></div>
              <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
              <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
              <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
              <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
              <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
              <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
              <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <!--
    <div id="courses" class="our-portfolio section">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <h6>Our Courses</h6>
              <h4>See Our Recent <em>Courses</em></h4>
              <div class="line-dec"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
        <div class="row">
          <div class="col-lg-12">
            <div class="loop owl-carousel">
              <div class="item">
                <a href="{{ url('course') }}">
                <div class="card text-center">
                  <div class="card-header">
                    <h4>Featured</h4>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Software Testing</h5>
                    <p class="card-text">New Online Software Testing Regular Morning Batch will start from 15th October 2021</p>
                    <p class="card-text">9 AM - 11 PM</p>
                    <p class="card-text">Complete online</p>
                    <p class="card-text">Free study material</p>
                    <button class="btn btn-primary mt-2">Purchase</button>
                  </div>
                  <div class="card-footer text-muted">
                    2 days ago
                  </div>
                </div>
                </a>
              </div>
              <div class="item">
                <a href="{{ url('course') }}">
                <div class="card text-center">
                  <div class="card-header">
                    <h4>Featured</h4>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Software Testing</h5>
                    <p class="card-text">New Online Software Testing Regular Morning Batch will start from 15th October 2021</p>
                    <p class="card-text">9 AM - 11 PM</p>
                    <p class="card-text">Complete online</p>
                    <p class="card-text">Free study material</p>
                    <button class="btn btn-primary mt-2">Purchase</button>
                  </div>
                  <div class="card-footer text-muted">
                    2 days ago
                  </div>
                </div>
                </a>
              </div>
              <div class="item">
                <a href="{{ url('course') }}">
                <div class="card text-center">
                  <div class="card-header">
                    <h4>Featured</h4>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Software Testing</h5>
                    <p class="card-text">New Online Software Testing Regular Morning Batch will start from 15th October 2021</p>
                    <p class="card-text">9 AM - 11 PM</p>
                    <p class="card-text">Complete online</p>
                    <p class="card-text">Free study material</p>
                    <button class="btn btn-primary mt-2">Purchase</button>
                  </div>
                  <div class="card-footer text-muted">
                    2 days ago
                  </div>
                </div>
                </a>
              </div>
              <div class="item">
                <a href="{{ url('course') }}">
                <div class="card text-center">
                  <div class="card-header">
                    <h4>Featured</h4>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Software Testing</h5>
                    <p class="card-text">New Online Software Testing Regular Morning Batch will start from 15th October 2021</p>
                    <p class="card-text">9 AM - 11 PM</p>
                    <p class="card-text">Complete online</p>
                    <p class="card-text">Free study material</p>
                    <button class="btn btn-primary mt-2">Purchase</button>
                  </div>
                  <div class="card-footer text-muted">
                    2 days ago
                  </div>
                </div>
                </a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- <div id="blog" class="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="section-heading">
              <h6>Recent News</h6>
              <h4>Check Our Blog <em>Posts</em></h4>
              <div class="line-dec"></div>
            </div>
          </div>
          <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="blog-post">
              <div class="thumb">
                <a href="#"><img src="public/assets/images/blog-post-01.jpg" alt=""></a>
              </div>
              <div class="down-content">
                <span class="category">SEO Analysis</span>
                <span class="date">03 August 2021</span>
                <a href="#">
                  <h4>Lorem Ipsum Dolor Sit Amet, Consectetur Adelore
                    Eiusmod Tempor Incididunt</h4>
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers itii eiumod deis tempor incididunt ut labore.</p>
                <span class="author"><img src="public/assets/images/author-post.jpg" alt="">By: Andrea Mentuzi</span>
                <div class="border-first-button"><a href="#">Discover More</a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="post-item">
                    <div class="thumb">
                      <a href="#"><img src="public/assets/images/blog-post-02.jpg" alt=""></a>
                    </div>
                    <div class="right-content">
                      <span class="category">SEO Analysis</span>
                      <span class="date">24 September 2021</span>
                      <a href="#">
                        <h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4>
                      </a>
                      <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="post-item">
                    <div class="thumb">
                      <a href="#"><img src="public/assets/images/blog-post-03.jpg" alt=""></a>
                    </div>
                    <div class="right-content">
                      <span class="category">SEO Analysis</span>
                      <span class="date">24 September 2021</span>
                      <a href="#">
                        <h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4>
                      </a>
                      <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="post-item last-post-item">
                    <div class="thumb">
                      <a href="#"><img src="public/assets/images/blog-post-04.jpg" alt=""></a>
                    </div>
                    <div class="right-content">
                      <span class="category">SEO Analysis</span>
                      <span class="date">24 September 2021</span>
                      <a href="#">
                        <h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4>
                      </a>
                      <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div id="" class="contact-us section">
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
                    <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="fill-form">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="info-post">
                          <div class="icon">
                            <img src="public/assets/images/phone-icon.png" alt="">
                            <a href="#">010-020-0340</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="info-post">
                          <div class="icon">
                            <img src="public/assets/images/email-icon.png" alt="">
                            <a href="#">our@email.com</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="info-post">
                          <div class="icon">
                            <img src="public/assets/images/location-icon.png" alt="">
                            <a href="#">123 Rio de Janeiro</a>
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
                          <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
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
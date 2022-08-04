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
                  <h2>IT Training</h2>
                  <p>{{ config('about.full_name') }} training program aims at correcting the shortcomings of IT aspirants by providing instructor-led training, hands-on training, certification achievement, resume writing, and interviewing preparation. With our personality development programs, we ensure that the candidates are well prepared for employment prospects. Besides, our internship prospects offer deserving candidates real world work experience. Thus with our vast experience in coaching, training, and development, we guarantee a positive change in your career.</p>
                  <!-- <p>Technologies Lifesciences is exclusively represented in India by Bio Actives India Corporation The commitment to science and quality control has earned its recognition within the Inida as a trusted supplier of ingredients of the highest quality.</p> -->
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
              <img src="public/assets/images/ill/19199620.jpg" alt="">
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
                <h6>Trainings we provide</h6>
                <h4>Professional trainings we provide</h4>
                <div class="line-dec"></div>
              </div>
               <p><i class="fa fa-check"></i>Data Science</p>
                <p><i class="fa fa-check"></i>Python</p>
                <p><i class="fa fa-check"></i>Machine Learning</p>
                <p><i class="fa fa-check"></i>ERP Automation</p>
                <p><i class="fa fa-check"></i>Devopes</p>
                <p><i class="fa fa-check"></i>Salesforce</p>
                <p><i class="fa fa-check"></i>Java Development</p>
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
          <h4><em>Technology Training Demanded</em></h4>
          <p>Whether you’re looking to change careers or advance in your current one, there’s a voice in your head telling you there’s something bigger and smarter you could do with your career if you had the right IT training. {{ config('about.full_name') }} has fueled the ambitions of many people within a year of its start, providing the technology training demanded most by companies looking to hire, retain and nurture top technology talent, Our Courses has the global presence, course accessibility and experience to help you thrive in a rapidly evolving IT job market. We call it a human upgrade—a more capable, productive, valuable version of yourself.</p>
          
        </div>
      </div>
      <div class="col-lg-6 mt-4">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>Training and development</em></h4>
          <p>{{ config('about.full_name') }} Pvt. Ltd. offers training programs to the acquisition of knowledge, skills, and competencies as a result of the teaching of vocational, practical skills and knowledge that relate to specific useful competencies. It forms the core of apprenticeships and provides the backbone of content at institutes. Training and development is the field concerned with organizational activity aimed at improving the performance of ones and groups in organizational settings. It has been known by several names, including employee development, human resource development, and learning and development.</p>
          <!-- <p><i class="fa fa-check"></i>Identify critical skills and assign needed training and development</p>
          <p><i class="fa fa-check"></i>Improve compliance training and overall workforce operations</p>
          <p><i class="fa fa-check"></i>Implement quality control and process improvement initiatives</p>
          <p><i class="fa fa-check"></i>Tie training initiatives to goals, objectives, and succession planning.</p> -->
        </div>
      </div>
      <div class="col-lg-12 mt-4">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <!-- <h4><em>Industries:</em></h4> -->
          <!-- <p><i class="fa fa-check"></i>Independent Software vendor</p>
          <p><i class="fa fa-check"></i>Avionics and Automotive</p>
          <p><i class="fa fa-check"></i>Infotainment and Digital Media</p>
          <p><i class="fa fa-check"></i>Defense and Security.</p> -->
          <p>offering IT Project Consultants, Designing Services, Consultancy Services, IT Recruitment Services, IT Enabled Services. Our on time delivery schedule by giving quality oriented services has helped us in attaining the trust and reliance of our clients in the domestic as well as the foreign front. Based in India, we offer credible services taking proper care of everything such as technical assistance and other supportive services from apprehension to the final handover. Our pool of qualified and experienced manpower enables us in meeting the demands and requirements of our clients.</p>
        </div>
      </div>
      <div class="col-lg-12 mt-4">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
            <h4><em>Outsourcing</em></h4>
            <p>Reduce cost,Minimize risk And increase reliability and flexibility, by removing day-to-day management of your IT infrastructure.</p>
      </div>
    </div>
  </div>
</div>

@include('footer')
@include('script')

</body>

</html>
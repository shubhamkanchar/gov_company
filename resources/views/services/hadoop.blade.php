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
                  <h2>Hadoop</h2>
                  <p>Hadoop is absolutely critical to the operations of Yahoo, executives with the company said this week at the Hadoop Summit. While the company, is moving away from “traditional” Hadoop components like MapReduce in favor of {{ config('about.full_name') }}, the Hadoop platform remains absolutely core to its operations. There’s a stream of thought in the wider big data community that Hadoop is old hat, that Yahoo and Google, which developed the technology behind Hadoop to run their own businesses, have moved onto something bigger and better, that what Hadoop vendors are hawking today are the technological leftovers of a better brew.</p>
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
              <img src="public/assets/images/ill/3937443.jpg" alt="">
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
                <h4>Hadoop enables the large-scale data</em></h4>
                <div class="line-dec"></div>
              </div>
              <p>So the question should really be “How does Hadoop enable financial services firms to unlock the power of their data and derive competitive advantage from it?” The answer, {{ config('about.full_name') }} says is that: “Hadoop enables the large-scale data ingestion that is necessary to keep pace with today’s digital world, capturing and analysing all interactions that allow companies to holistically understand their clients. Billions of digital, detailed interactions can now be used to redefine customer groups and to tailor information for customers’ future interactions.”
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
      <div class="col-lg-10 offset-lg-2">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <p>Hadoop has been designed towards auto-detection and auto-handling of failures in any system functioning in its framework. With constantly growing social media data, Hadoop is the key resource to massive storage and fast processing of enormous data, both onsite data center and cloud storage. Today Hadoop being the main tool for Big Data handling and analysis, Hadoop-Big Data training are interrelated concepts.</p>

<p>With the growing demand of big data analysis, there is an excessive requirement of Hadoop professionals. But current market reports exhibit a shortage of professionals experienced in big data analysis in an open source environment. The trend of growth of Hadoop requirement can be witnessed from the trend curveDue to high demand of Hadoop developers, the salary trend is also on a rise.</p><p>

Hadoop technology comes to the rescue. Hadoop is a framework that enables companies to process their large data sets with capabilities like searching, filtering, sorting, and grouping. It is designed to work with either a single server or scale up to thousands of machines, each offering local computation and storage. High availability is built into the design.</p>
        </div>
      </div>
      <div class="col-lg-10 ">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <!-- <h4><em>Quality</em></h4> -->
          <p>The data could be in any format you can imagine: text, numeric, dates, pictures, audio, or emails. Irrespective of whether the data is structured or unstructured, with Hadoop technology we can analyze, search, and filter data according to business needs. There is no need to design a schema before storing the data. This means that one can store any type of data and think of what to or how to query at a later time. There are two different components of Hadoop – Hadoop distributed File system (HDFS) and MapReduce. MapReduce is the parallel programming component. It distributes the data into a cluster where processing takes place locally on every machine in the cluster. Results from these individual machines are then quickly combined to get processed result. While HDFS is a distributed file system which saves data into nodes and clusters.</p>
        </div>
      </div>
      <div class="col-lg-10 offset-lg-2">
        <div class="card mt-5 box-shadow" style="padding: 25px;">
          <h4><em>Processes Involved</em></h4>
          <ul class="list-group">
            <li class="list-group-item">The data is split into 128 MB or 64MB chunks and then it is distributed to various cluster nodes for further steps</li>
            <li class="list-group-item">HDFS controls the process as being on top of local file system</li>
            <li class="list-group-item">Nodes duplicated for insurance against any future failure</li>
            <li class="list-group-item">Checking that the processing codes have successfully executed</li>
            <li class="list-group-item">Sending processed data to desired system</li>
            <p>With above process it is easier to do the required manipulation in data without using a heavy machine as the data is being split and processing takes place in parallel in a single connected system.</p>
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
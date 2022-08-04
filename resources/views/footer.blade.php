
    <!-- <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 {{ config('about.company_name') }} All Rights Reserved. 
          <br>Design: TemplateMo</a></p>
        </div>
      </div>
    </div> -->
    <!-- Remove the container if you want to extend the Footer to full width. -->
  <!-- Footer -->
  <style>
    footer p {
    text-align: left !important;
}
  </style>
  <footer class="gradient-background">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-4 text-white" style="background-color: #4da6e7">
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">{{ config('about.full_name') }}</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
            are one of the India's leading digital marketing, website design and web development company. We provide time bound, cost effective and value added services for technology innovative business solutions that require specialized domain expertise. Thank you.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Services</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="{{ route('web') }}" class="{{ Request::is('web-development') ? 'active' : 'text-dark' }}">Web Development</a>
            </p>
            <p>
              <a href="{{ route('digital') }}" class="{{ Request::is('digital-marketing') ? 'active' : 'text-dark' }}">Digital Marketing</a>
            </p>
            <p>
              <a href="{{ route('hadoop') }}" class="{{ Request::is('hadoop') ? 'active' : 'text-dark' }}">Hadoop</a>
            </p>
            <p>
              <a href="{{ route('seo') }}" class=" {{ Request::is('seo') ? 'active' : 'text-dark' }}">SEO</a>
            </p>
            <p>
              <a href="{{ route('data') }}" class="{{ Request::is('data-warehousing') ? 'active' : 'text-dark' }}">Data Warehousing</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Industries</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="{{ route('pharma') }}" class="{{ Request::is('pharmaceuticals') ? 'active' : 'text-dark' }}">Pharmaceuticals</a>
            </p>
            <p>
              <a href="{{ route('bpo') }}" class="{{ Request::is('bpo') ? 'active' : 'text-dark' }}">BPO</a>
            </p>
            <p>
              <a href="{{ route('product') }}" class="{{ Request::is('product-engineering') ? 'active' : 'text-dark' }}">Product Engineering</a>
            </p>
            <p>
              <a href="{{ route('manu') }}" class="{{ Request::is('manufacturing') ? 'active' : 'text-dark' }}">Manufacturing</a>
            </p>
            <p>
              <a href="{{ route('life') }}" class="{{ Request::is('life-services') ? 'active' : 'text-dark' }}">Life Sciences</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> {{ config('about.address')}}</p>
            <p><i class="fas fa-envelope mr-3"></i> {{ config('about.email')}}</p>
            <p><i class="fas fa-phone mr-3"></i> {{ config('about.mobile1')}}</p>
            <p><i class="fas fa-print mr-3"></i> {{ config('about.mobile2')}}</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2015 Copyright:
      <a class="text-dark" href="{{ url('/') }}"
         >{{ config('about.full_name') }}</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->


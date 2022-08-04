
  <!-- Scripts -->
  <script src="public/vendor/jquery/jquery.min.js"></script>
  <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/assets/js/owl-carousel.js"></script>
  <script src="public/assets/js/animation.js"></script>
  <script src="public/assets/js/imagesloaded.js"></script>
  <script src="public/assets/js/custom.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });

    $("#contact").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form_data = new FormData(document.getElementById("contact"));
        var url = "{{ route('mail_sent') }}";

        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            dataType: "JSON",
            data: form_data,
            processData: false,
            contentType: false,
            success: function (data, status)
            {

            },
            error: function (xhr, desc, err)
            {


            }
        });     


    });
  </script>
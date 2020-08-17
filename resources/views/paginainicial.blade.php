<!DOCTYPE html>
<html>
  <head>

    <!-- head -->
    <meta charset="utf-8">
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Stage One
    </title>

    <!-- Stylesheets -->
<!--     <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="../assets/css/docs.theme.min.css">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.carousel.min.css"><!-- 
    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.theme.default.min.css"> -->


    <!-- Yeah i know js should not be in header. Its required for demos.-->

    <!-- javascript -->
    <script src="../assets/vendors/jquery.min.js"></script>
    <script src="../assets/owlcarousel/owl.carousel.js"></script>
  </head>
  <body>

   

   <div id="teste" style="margin-left: 3%">
    <section id="demos">
      <div class="row">
        <div class="">
          <div class="owl-carousel owl-theme">

            <div class="item">
              <div style="height: 50%">
                1
              </div>

              <div style="height: 50%">
                2
              </div>
            </div>

            <div class="item">
              <h4>2</h4>
            </div>

            <div class="item">
              <h4>3</h4>
            </div>
           <!--  <div class="item">
              <h4>4</h4>
            </div>
            <div class="item">
              <h4>5</h4>
            </div>
            <div class="item">
              <h4>6</h4>
            </div>
            <div class="item">
              <h4>7</h4>
            </div>
            <div class="item">
              <h4>8</h4>
            </div> -->
          
          </div>
          
        </div>
      </div>
    </section>
  </div>


          
          <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 2.7
                  },
                  500: {
                    items: 4
                  },
                  1000: {
                    items: 8
                  }
                }
              })
            })
          </script>
          

       <!--  </div>
      </div>
    </section> -->

    <!-- vendors -->
    <!-- <script src="../assets/vendors/highlight.js"></script>
    <script src="../assets/js/app.js"></script> -->
  </body>
</html>
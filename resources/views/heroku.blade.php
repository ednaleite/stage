@extends('master')

@section('title', 'Inicio')

@section('content')

    <!-- head -->
    <meta charset="utf-8">
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Stage One
    </title>

    <!-- Stylesheets -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/docs/assets/css/docs.theme.min.css">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
    <style type="text/css">
      * {
    border: 0;
    margin: 0;
    padding: 0;
   }
    </style>


    <!-- Yeah i know js should not be in header. Its required for demos.-->

    <!-- javascript -->
    <script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.js"></script>
    <script src="OwlCarousel2-2.3.4/docs/assets/vendors/highlight.js"></script>
    <script src="OwlCarousel2-2.3.4/docs/assets/js/app.js"></script>
  </head>
  <body>



  <div style="background-color: red;width: 100%;height: 45%;border-radius: 0px 0px 40px 40px;">
    teste

  </div>

   

   <div id="teste" style="margin-left: 3%;margin-top: 10%;">
    <section id="demos">
      <div class="row">
        <div class="">
          <div class="owl-carousel owl-theme">

            <div class="item">
              <div style="height: 75%; border-radius: 9px;">
              
              </div>

              <div style="height: 50%;border-radius: 9px;">
                2
              </div>
            </div>

            <div class="item">
              <div style="height: 75%; border-radius: 9px;">
              </div>

              <div style="height: 50%;border-radius: 9px;">
                2
              </div>
            </div>

            <div class="item">
              <div style="height: 75%; border-radius: 9px;">
              </div>

              <div style="height: 50%;border-radius: 9px;">
                2
              </div>
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

</body>
          
          <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 2.8
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
  
   
  
@endsection
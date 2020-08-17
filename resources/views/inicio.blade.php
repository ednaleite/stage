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
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <style type="text/css">

    

    </style>


    <!-- Yeah i know js should not be in header. Its required for demos.-->

    <!-- javascript -->
    <script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.js"></script>
    <script src="OwlCarousel2-2.3.4/docs/assets/vendors/highlight.js"></script>
    <script src="OwlCarousel2-2.3.4/docs/assets/js/app.js"></script>
  </head>
 
  <body>

  <div id="divtopo_vendas">
   
    <div style="display: flex;flex-direction: row;justify-content: space-around;width: 100%;">

      <img src="imagens/menuhamb.svg"  id="menu_hamburguer">


    
      <img src="imagens/sinoalerta.svg" id="sino_alerta">
    

    
      <img src="imagens/Config.svg" id="config">
    

   </div>

    <div id="titulo_vendastopo">
      Vendas
    </div>

    <div id="mes_atual_vendas">
      Agosto
    </div>


     <div id="div_qtd_vendas">
        
        <div id="circulo_qtdvendas">
          <div id="qtd_vendas">100</div>
        </div>

        <div id="circulo_qtdvendas">
          <div id="qtd_vendas">100</div>
        </div>

        <div id="circulo_qtdvendas">
          <div id="qtd_vendas">100</div>
        </div>

        <div id="circulo_qtdvendas">
          <div id="qtd_vendas">100</div>
        </div>

        <div id="circulo_qtdvendas">
          <div id="qtd_vendas">100</div>
        </div>

        <div id="circulo_qtdvendas">
          <div id="qtd_vendas">100</div>
        </div>

        <div id="circulo_qtdvendas">
          <div id="qtd_vendas">100</div>
        </div>
        
    </div>


    <div id="dias_semana">
        <div>
          Seg
        </div>
           
        <div>
          Ter
        </div>

        <div>
          Qua
        </div>

        <div>
          Qui
        </div>

        <div>
          Sex
        </div>

        <div>
          Sáb
        </div>

        <div>
          Dom
        </div>
    </div>


  </div>



  <div style="display: flex; flex-direction: row;margin-top: 4%;">
     <div id="titulo_produtos">
        Produtos
      </div>

      <div id="botão_vermais">
        <div id="texto_vermais">Ver mais</div>
      </div>
  </div>
   

   <div id="divexterna_carousel">

    <section id="demos">
      <div class="row">
        <div class="">
          <div class="owl-carousel owl-theme">

            <div class="item">
              <div id="imagem_produtos">
                
              </div>

              <div style="height: 50%;border-radius: 9px;">
                2
              </div>
            </div>

            <div class="item">
              <div id="imagem_produtos">
              </div>

              <div style="height: 50%;border-radius: 9px;">
                2
              </div>
            </div>

            <div class="item">
              <div id="imagem_produtos">
               
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



  <div id="div_lucros">
    
    <div id="titulo_lucros">
     Lucros 
    </div>
              
    <!-- LUCRO ANUAL -->

     <div id="div_circulo">

        <span class="chart" data-percent="50"></span>

        <div id="textos_circulo">

              <div id="total_circulo">
              Total
              </div>

              <div id="valor_lucrosanuais">
              R$ 1.750.00
              </div>

              <div id="ano_lucros">
              Ano de 2020
              </div>
        </div>

    </div>


       <div id="valores_lucros">
           <div>
             R$ 17.220.00
           </div>

           <div>
             R$ 21.400.00
           </div>

            <div>
             R$ 13.000.00
           </div>
       </div>
       

       <div id="HR">
           <div>
             <hr style="border: 1px solid #FFC9BE; width: 70px">
           </div>

           <div>
             <hr style="border: 1px solid #FFC9BE; width: 70px">
           </div>

            <div>
             <hr style="border: 1px solid #FFC9BE; width: 70px">
           </div>
       </div>


       <div id="datas_lucros">
           <div>
             Dia
           </div>

           <div>
             Semana
           </div>

            <div>
             Mês
           </div>
       </div>
    
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
                    items: 2.9
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


          <!-- PARTE DE EXIBIÇÃO DO LUCRO ANUAL -->
       <!--  <script src="https://code.jquery.com/jquery-2.0.3.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
        <script>
        $(function($) {
          $('.chart').easyPieChart({
            easing: 'easeOutBounce',
            scaleColor:false,
            size:140,
            trackColor:'#e7e7e7',
            onStep: function(from, to, percent) {
              $(this.el).find('.percent').text(Math.round(percent));
            }
          });
        });
        </script>
          

       <!--  </div>
      </div>
    </section> -->
  
   
  
@endsection
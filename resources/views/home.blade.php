@extends('master')

@section('title', 'Home')

@section('content')

<link rel="stylesheet" href="swiper-master/package/css/swiper.css">
<link rel="stylesheet" href="swiper-master/package/css/swiper.min.css">
<link rel="stylesheet" href="css/style.css"/>
<style>
  body{
    background-color: #FFFEFE;
  }

  @media only screen 
  and (min-device-width: 300px) 
  and (max-device-width: 600px)
  and (-webkit-min-device-pixel-ratio: 2) {

    body{
      background-color: pink;
  }


  .produtosEstoque{
    height: 14%;
  }

  .graficoVendas{ 
    height:40%;
    margin-top: 37%;
  }

  .comparativoVendas{
  
    margin-top: 11%;
}

.ok{
  height: 38%;
}

.meses{
  margin-top: 17%;
}

.valor_mes{
  margin-top: 17%;
}

  }

  @media only screen 
  and (min-device-height: 780px) 
  and (max-device-height: 825px)
  and (-webkit-min-device-pixel-ratio: 2) {
    body{
      background-color: red;
    }


    .graficoVendas{ 

    margin-top: 10%;
  
}
.comparativoVendas{
  
    margin-top: 15%;
}
.swiper-container{
  width: 100%;
  height: 85%;
  margin: 10px auto;
  }


}
  #dados{
    width: 120%;
    height: 80%;
    margin-top: 12%;
    margin-left: -10.3%;
  }

  

   #nomeproduto{
    margin-top: 21px;
    font-family: Roboto;
    font-style: normal;
    font-weight: 300;
    font-size: 31px;
    line-height: 16px;
    letter-spacing: 0.055em;
    color: #000000;
   }

  #a{
    margin-top: 45px;
  }
  #b{
    margin-top: 54px;
  }
</style>





<div class="produtosEstoque">
  <div class="swiper-container">
      <div class="swiper-wrapper">

        <div class="swiper-slide"> 
          <div id='juntar'> <div id="foto">
            <img src="{{asset('imagens/modelo1.jpg')}}" id="produto"></div> 
          <div id="info">
          <div id='nomeproduto'>Macacão Rosa M</div>
          <div id='estoque'>Estoque: 100</div>
          <div id='vendidos'>Vendidos: 670</div>
          </div> 
         </div>
       </div>

       <div class="swiper-slide"> 
          <div id='juntar'> <div id="foto">
            <img src="{{asset('imagens/modelo2.jpg')}}" id="produto"></div> 
          <div id="info">
          <div id='nomeproduto'>Macacão Rosa M</div>
          <div id='estoque'>Estoque: 100</div>
          <div id='vendidos'>Vendidos: 670</div>
          </div> 
         </div>
       </div>

       <div class="swiper-slide"> 
          <div id='juntar'> <div id="foto">
            <img src="{{asset('imagens/modelo3.jpg')}}" id="produto"></div> 
          <div id="info">
          <div id='nomeproduto'>Macacão Rosa M</div>
          <div id='estoque'>Estoque: 100</div>
          <div id='vendidos'>Vendidos: 670</div>
          </div> 
         </div>
       </div>


        <div class="swiper-slide"> 
          <div id='juntar'> <div id="foto">
            <img src="{{asset('imagens/modelo4.jpg')}}" id="produto"></div> 
          <div id="info">
          <div id='nomeproduto'>Macacão Rosa M</div>
          <div id='estoque'>Estoque: 100</div>
          <div id='vendidos'>Vendidos: 670</div>
          </div> 
         </div>
       </div>
       

        <div class="swiper-slide"> 
          <div id='juntar'> <div id="foto">
            <img src="{{asset('imagens/modelo5.jpg')}}" id="produto"></div> 
          <div id="info">
          <div id='nomeproduto'>Macacão Rosa M</div>
          <div id='estoque'>Estoque: 100</div>
          <div id='vendidos'>Vendidos: 670</div>
          </div> 
         </div>
       </div>


        <div class="swiper-slide"> 
          <div id='juntar'> <div id="foto">
            <img src="{{asset('imagens/modelo6.jpg')}}" id="produto"></div> 
          <div id="info">
          <div id='nomeproduto'>Macacão Rosa M</div>
          <div id='estoque'>Estoque: 100</div>
          <div id='vendidos'>Vendidos: 670</div>
          </div> 
         </div>
       </div>

    </div>
    <!-- Add Pagination -->
    <!-- <div class="swiper-pagination"></div> -->
    <!-- Add Arrows -->
    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
  </div>
</div>


<div class="produtosEstoque1">
  <div class="swiper-container1">
      <div class="swiper-wrapper">

        <div class="swiper-slide"> 
          <div id='juntar'> <div id="foto">
            <img src="{{asset('imagens/casa.png')}}" id="produto"></div> 
          <div id="info">
          <div id='nomeproduto'>Macacão Rosa M</div>
          </div> 
         </div>
       </div>

       <div class="swiper-slide"> 
          <div id='juntar'> <div id="foto">
            <img src="{{asset('imagens/casa.png')}}" id="produto"></div> 
          <div id="info">
          <div id='nomeproduto'>Macacão Rosa M</div>
          </div> 
         </div>
       </div>

       <div class="swiper-slide"> 
          <div id='juntar'> <div id="foto">
            <img src="{{asset('imagens/casa.png')}}" id="produto"></div> 
          <div id="info">
          <div id='nomeproduto'>Macacão Rosa M</div>
          </div> 
         </div>
       </div>





      </div>
    </div>
 </div>




<div class="graficoVendas">
<div class="ok">
  <div style="margin-top: 3%;
    margin-left: 6%;
    font-size: 60px">Lucros</div>


  <div style="display: flex; flex-direction: row;margin-top: -15%">

    <div class="meses" style="
    margin-left: 4%;
    font-size: 39px;
    padding: 39px 22px;">
      <p>Novembro</p>
      
      <p id="a">Dezembro</p>
      
      <p id="a">Janeiro</p>
      
      <p id="a">Fevereiro</p>
    </div>
    <div class="valor_mes" style="margin-left: 2%; font-size: 33px;  padding: 46px 22px">
      <p>R$ 200,00</p>
      
      <p id="b">R$ 630,00</p>
      
      <p id="b">R$ 510,00</p>
      
      <p id="b">R$ 300,00</p>
    </div>


    <!-- LUCRO ANUAL -->
    <div style="margin-top: 18%; margin-left: 6%;height: 360px;width: 40%;">
      <span class="chart" data-percent="67" >
        <div style="font-size: 60px;margin-top: 23%;margin-left: 104%;font-weight: 300;">Total</div>

        <div style="font-size: 52px;margin-left: 22%;margin-top: 14%;width: 300px;">R$ 1.750</div>

        <div style="margin-top: 9%;margin-left: 20%;font-size: 30px;width: 300px;">Ano de 2020</div>

      </span>
    </div>
  
  </div>
</div>

</div>




<!-- FUNÇÃO ARRASTAR PARA O LADO -->
<script src="swiper-master/package/js/swiper.js"></script>
<script src="swiper-master/package/js/swiper.min.js"></script>
<script>
    var appendNumber = 6;
    var prependNumber = 1;

    // PARTE DE EXIBIÇÃO DOS PRODUTOS DO ESTOQUE

    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3, //altera o tamanho da caixa
      centeredSlides: true,
      spaceBetween: 35, //altera o espaço entre as divs
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });


    // PARTE DE EXIBIÇÃO DAS FUNÇÕES DO APP

    var swiper = new Swiper('.swiper-container1', {
      slidesPerView: 4.3, //altera o tamanho da caixa
      centeredSlides: true,
      spaceBetween: 35, //altera o espaço entre as divs
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>



<!-- PARTE DE EXIBIÇÃO DO LUCRO ANUAL -->
<script src="https://code.jquery.com/jquery-2.0.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="js/jquery.easypiechart.min.js"></script>
  <script>
  $(function($) {
    $('.chart').easyPieChart({
      easing: 'easeOutBounce',
      scaleColor:false,
      size:360,
      trackColor:'#bebebe',
      onStep: function(from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
      }
    });
  });
  </script>

@endsection
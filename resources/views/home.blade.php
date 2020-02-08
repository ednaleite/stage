@extends('master')

@section('title', 'Home')

@section('content')
<link rel="stylesheet" href="swiper-master/package/css/swiper.css">
<link rel="stylesheet" href="swiper-master/package/css/swiper.min.css">
<style>
  body{}
  #dados{
    width: 120%;
    height: 80%;
    margin-top: 12%;
    margin-left: -10.3%;
  }

   #juntar{
    display: flex;
    justify-content:space-between;
    width: 100%;
    height: 100%;

   } 
   #foto{
    width: 55%;
    height: 100%;
    color: white;
    
   }
   #info{
    background-color: white;
    width: 50%;
    height: 100%;
    padding: 2px 2px;
    
   }
   #produto{
    width: 100%;
    height: 100%;
    
   }
   #nomeproduto{
    font-weight: bold;
    color:#676767;
    font-size: 24px;
    padding: 2px 2px;
   }

   #estoqueevendidos{
    font-size: 22px;
    color: #767676;
    margin-top: 20%;
    padding: 2px 2px;
   }


  #valor{
    font-size:20px;
    color: #767676;
  }
</style>


<div class="comparativoVendas">
	<h4 class="suasVendas">
		Suas<br>Vendas
	</h4>
	<div class="boxVenda">
		<div class="boxContent">
			<div class="valorVenda">100</div>
			<div class="periodoVenda">Hoje</div>
		</div>
	</div>
	<div class="boxVenda">
		<div class="boxContent">
			<div class="valorVenda">300</div>
			<div class="periodoVenda">Ontem</div>
		</div>
	</div><div class="boxVenda">
		<div class="boxContent">
			<div class="valorVenda">900</div>
			<div class="periodoVenda">Esse Mês</div>
		</div>
	</div><div class="boxVenda">
		<div class="boxContent">
			<div class="valorVenda">1500</div>
			<div class="periodoVenda">Esse Ano</div>
		</div>
	</div>

	
</div>


<div class="graficoVendas">
 <img src="{{asset('imagens/dados3.png')}}" id="dados"></div> 
</div>




<div class="produtosEstoque">
<div class="swiper-container">
    <div class="swiper-wrapper">

      <div class="swiper-slide"> 
        <div id='juntar'> <div id="foto">
          <img src="{{asset('imagens/vestido3.jpg')}}" id="produto"></div> 
          <div id="info">
           <div id='nomeproduto'>Macacão Rosa M</div>
           <div id='estoqueevendidos'>No estoque</div>
           <div id='valor'>100</div>
           <div id='estoqueevendidos'>Vendidos</div>
           <div id='valor'>670</div>

          </div> 
        </div>
      </div>

      <div class="swiper-slide">
        <div id='juntar'> <div id="foto">
          <img src="{{asset('imagens/vestido4.jpg')}}" id="produto"></div> 
          <div  id="info">
           <div id='nomeproduto'>Vestido Floral M</div>
           <div id='estoqueevendidos'>No estoque</div>
           <div id='valor'>90</div>
           <div id='estoqueevendidos'>Vendidos</div>
           <div id='valor'>170</div>
          </div> 
        </div>
      </div>

      <div class="swiper-slide">
        <div id='juntar'> <div id="foto">
          <img src="{{asset('imagens/vestido7.jpg')}}" id="produto"></div> 
          <div  id="info">
           <div id='nomeproduto'>Vestido Preto P</div>
           <div id='estoqueevendidos'>No estoque</div>
           <div id='valor'>10</div>
           <div id='estoqueevendidos'>Vendidos</div>
           <div id='valor'>100</div>

          </div> 
        </div>
      </div>

      <div class="swiper-slide">
        <div id='juntar'> <div id="foto">
          <img src="{{asset('imagens/vestido5.jpg')}}" id="produto"></div> 
          <div id="info">bnbvnbvnn</div> 
        </div>
      </div>

	    <div class="swiper-slide">
        <div id='juntar'> <div id="foto">
          <img src="{{asset('imagens/vestido6.jpg')}}" id="produto"></div> 
          <div id="info">bnbvnbvnn</div> 
        </div>
      </div>

      <div class="swiper-slide">
        <div id='juntar'> <div id="foto">
          <img src="{{asset('imagens/vestido8.jpg')}}" id="produto"></div> 
          <div id="info">bnbvnbvnn</div> 
        </div>
      </div>

    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>

<script src="swiper-master/package/js/swiper.js"></script>
<script src="swiper-master/package/js/swiper.min.js"></script>
<script>
    var appendNumber = 6;
    var prependNumber = 1;
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      centeredSlides: true,
      spaceBetween: 15,
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


@endsection
@extends('master')

@section('title', 'Home')

@section('content')
<link rel="stylesheet" href="swiper-master/package/css/swiper.css">
<link rel="stylesheet" href="swiper-master/package/css/swiper.min.css">
<style>
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
	  <div id="chart-container"></div>
    <!-- Step 1 - Include the fusioncharts core library -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <!-- Step 2 - Include the fusion theme -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
    <script type="text/javascript">
    const dataSource = {
    chart: {
    caption: "Estatísticas de Venda",
    subcaption: "Comparativo do Mês",
    numdivlines: "3",
    showvalues: "0",
    legenditemfontsize: "15",
    legenditemfontbold: "1",
    "numberScaleValue": "1024,1024,1024",
    "numberScaleUnit": " MB, GB, TB",
    theme: "fusion"
  },
  categories: [
    {
      category: [
        {
          label: "Jan 1"
        },
        {
          label: "Jan 2"
        },
        {
          label: "Jan 3"
        },
        {
          label: "Jan 4"
        },
        {
          label: "Jan 5"
        },
        {
          label: "Jan 6"
        },
        {
          label: "Jan 7"
        }
      ]
    }
  ],
  dataset: [
    {
      seriesname: "Lucros",
      data: [
        {
          value: "55"
        },
        {
          value: "45"
        },
        {
          value: "52"
        },
        {
          value: "29"
        },
        {
          value: "48"
        },
        {
          value: "28"
        },
        {
          value: "32"
        }
      ]
    },
    {
      seriesname: "Gastos",
      data: [
        {
          value: "50"
        },
        {
          value: "30"
        },
        {
          value: "49"
        },
        {
          value: "22"
        },
        {
          value: "43"
        },
        {
          value: "14"
        },
        {
          value: "31"
        }
      ]
    }
  ]
};

FusionCharts.ready(function() {
  var myChart = new FusionCharts({
    type: "msspline",
    renderAt: "chart-container",
    width: "100%",
    height: "100%",
    dataFormat: "json",
    dataSource
  }).render();
});

    </script>
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
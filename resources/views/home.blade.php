@extends('master')

@section('title', 'Home')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
<style>
    /* body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    } */
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

<style>
#chart{
  width: 900px;
}

</style>

<div class="graficoVendas">
	  <div id="chart"></div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { packages: [ 'corechart' ] })
        google.charts.setOnLoadCallback(drawChart)
        function drawChart() {
            const container = document.querySelector('#chart')
            const data = new google.visualization.arrayToDataTable([
                [ 'Character', 'Teste' ],
                [ 'Teste 1', 10000],
                [ 'Teste 2', 9000 ],
                [ 'Teste 3', 8000 ],
                [ 'Teste 4', 5000 ],
                [ 'Teste 5', 2000 ]
            ])
            const options = {
                title: 'Título de teste',
                height: 600,
                width: 1000,
                fontSize: 32,
                legend: 'none',
                colors: ['#0590FB', '#1DE6A2', '#FEB11C', '#FF4863', '#5A479C'],
                isStacked: true,
                vAxis: {
                gridlines: {
                count: 0
               }
              }
        
    
            }
           

            // const chart = new google.visualization.ColumnChart(container)
            // const chart = new google.visualization.BarChart(container)
            // const chart = new google.visualization.LineChart(container)
            const chart = new google.visualization.ColumnChart(container)
            chart.draw(data, options)
        }
    </script>
</div>




<div class="produtosEstoque">
<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      <div class="swiper-slide">Slide 4</div>
	  <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>

<script src="https://unpkg.com/swiper/js/swiper.js"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
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
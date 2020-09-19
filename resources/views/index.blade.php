<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/css_oficial.css">
<link rel="stylesheet" type="text/css" href="css/media_querys.css">
<!-- <script src="https://code.jquery.com/jquery-2.0.3.min.js"></script> -->
<script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/jquery.easypiechart.min.js"></script>


			<nav class="wrap-menu">
				<a href="#menu" class="btnMenu btnMenu_open">Menu</a>

				<ul id="menu" class="menu">
					<li class="btnMenu btnMenu_close">Sair</li>
					<li class="menu-item">
						<a href="" class="menu-item-action">Cursos</a>
					</li>
					<li class="menu-item">
						<a href="" class="menu-item-action">Comunidade</a>
					</li>
					<li class="menu-item">
						<a href="" class="menu-item-action">Minha Conta</a>
					</li>
				</ul>
			</nav>




			<div class="sino_config">
				<div class="sino">
					<img src="imagens/sinoalerta.svg" class="sino_alerta">
    			</div>

				<div class="config">
					 <img src="imagens/Config.svg" class="config_topo">
				</div>

			</div>


			<div class="sistema_estoque">
				<div class="fontesgeral sistema_estoque_fonte">Sistema Estoque</div>

				<hr class="hr1">
			</div>



			<div class="div_vendas_lucros fontesgeral fontes_topo">

				<div>
					<div>
					Venda Mensal
					<!-- <hr class="hr2"> --><br><br>
					</div>

					<div class="div_vendas">
						<div class="div_vendas_titulo">Vendas</div>
						<div class="div_vendas_mes">Agosto</div>

						<div class="div_vendas_semanais">
							<div class="div_qtd_vendas">
								<div class="valor_vendas">100</div>
								<div class="valor_vendas">100</div>
								<div class="valor_vendas">100</div>
								<div class="valor_vendas">100</div>
								<div class="valor_vendas">100</div>
								<div class="valor_vendas">100</div>
								<div class="valor_vendas">100</div>
							</div>

							<div class="div_dias_semana fontesgeral">
								<div class="dias_vendas">Seg</div>
								<div class="dias_vendas">Ter</div>
								<div class="dias_vendas">Qua</div>
								<div class="dias_vendas">Qui</div>
								<div class="dias_vendas">Sex</div>
								<div class="dias_vendas">Sáb</div>
								<div class="dias_vendas">Dom</div>
							</div>
						</div>

					</div>
				</div>


				<div  class="Lucros">
					<div>
						Consulte seus Lucros
						<!-- <hr> -->
					</div>
					<br>

					<div class="div_lucros">

						
						<div class="circulo_lucros" style=""> 
							<div class="teste" style="">
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
    					</div>	
				

					</div>	
				</div>


			</div>
			

			



			
	        <script>
	        $(function(){
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


			<script type="text/javascript">
				const $menu = document.querySelector(".menu")
				const $btnMenuOpen = document.querySelector(".btnMenu_open")
				const $btnMenuClose = document.querySelector(".btnMenu_close")

				$btnMenuOpen.addEventListener("click",function(){
					$menu.classList.add('menu_open')
				})

				$btnMenuClose.addEventListener("click",function(){
					$menu.classList.remove('menu_open')
				})

			</script>
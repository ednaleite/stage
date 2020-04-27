<html>
    <head>
        <title>App Name - @yield('title')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

        <link rel="stylesheet" type="text/css" href="css/master.css">

    </head>
    <body>
        <div class="w-100 fixed-top" style="background-color:#e4c2bb;height: 6%;overflow: hidden;">
        	<div class="w-100 d-flex flex-row" >
        		  <div >
        			<img src="imagens/teste.png" style="width:55%;"></div>
                    <div style="display: flex;flex-direction: row;margin-left: 5%;height: auto;width: 42%;">
	        		<img src="imagens/product.png" width="26%" height="80%"  class="d-flex align-self-center mx-auto"></a>
		        	<img src="imagens/product.png" width="26%" height="80%"  class="d-flex align-self-center mx-auto"></a>
		        	<img src="imagens/product.png" width="15%"  height="48%"  class="d-flex align-self-center mx-auto"></a>
	        	      </div>
        	</div>
        </div>

        <div class="inicio-conteudo">
            @yield('content')
        </div>

         <div class="w-100 fixed-bottom" style="background-color:#e4c2bb">
           <!--  #FFE3DC -->
        	<div class="w-100 d-flex flex-row">
        		<img src="imagens/casa.png" style="width:9%;" class="d-flex align-self-center mx-auto icone"></a>
        		<img src="imagens/dinheiro.png"style="width: 10%" class="d-flex align-self-center mx-auto icone"></a>
        		<img src="imagens/product.png" style="width: 9%" class="d-flex align-self-center mx-auto icone"></a>
        		<img src="imagens/product.png" style="width: 9%" class="d-flex align-self-center mx-auto icone"></a>
                <img src="imagens/product.png" style="width: 9%" class="d-flex align-self-center mx-auto icone"></a>
        	</div>
        </div>

    </body>
</html>
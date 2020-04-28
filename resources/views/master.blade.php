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
        			<img src="imagens/teste.png" style="width:47%;"></div>
                    <div style="display: flex;flex-direction: row;margin-left: 5%;width:35%;">
	        		<!-- <img src="imagens/product.png" width="26%" height="80%"  class="d-flex align-self-center mx-auto"></a> -->
		        	<img src="imagens/bell.png" width="24%" height="76%"  class="d-flex align-self-center mx-auto"></a>

                    
                    <div style="font-size: 39px; margin-top: 4%; margin-left: 13%;">Sair</div>
		        	<img src="imagens/close.png" width="12%"  height="42%"  class="d-flex align-self-center mx-auto"></a>
	        	    

                </div>
        	</div>
        </div>

        <div class="inicio-conteudo">
            @yield('content')
        </div>

         <div class="w-100 fixed-bottom" style="background-color:#e4c2bb">
           <!--  #FFE3DC -->
        	<div class="w-100 d-flex flex-row">
                <div style="margin-left: 5%;margin-top: 1%;width:12%" >
        		<img src="imagens/casa.png" style="width:66%;" >
                <div style="font-size: 34px">Início</div>
                 </div>

                <div style="margin-left: 6%;margin-top: 1%;width:12%" >
        		<img src="imagens/dinheiro.png" style="width:66%;">
                <div style="font-size: 34px">PDV</div>
                 </div>

                <div style="margin-left: 7%;margin-top: 1%;width:12%" >
        		<img src="imagens/supply.png" style="width: 66%">
                <div style="font-size: 34px;margin-left: -22%">Estoque</div>
                </div>

                <div style="margin-left: 10%;margin-top: 1%;width:12%">
        		<img src="imagens/product.png" style="width: 66%" >
                <div style="font-size: 34px">Lote</div>
                </div>

                <div style="margin-left: 9%;margin-top: 1%;width:12%">
                <img src="imagens/addunidade.png" style="width: 66%">
                <!-- class="d-flex align-self-center mx-auto" -->
                <div style="font-size: 34px;margin-left:-19%">Unidade</div>
                </div>


        	</div>
        </div>

    </body>
</html>
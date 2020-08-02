<html>
    <head>
        <title>App Name - @yield('title')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

        <link rel="stylesheet" type="text/css" href="css/master.css">

    </head>
    <body>
        <div class="w-100" style="background: #FFFEFE;transform: matrix(1, 0, 0, 1, 0, 0);box-shadow: 0px 2px 8px #E5E5E5;height: 38%;overflow: hidden;border-radius: 74px;margin-top: -56px;">

        	<div class="w-100 d-flex flex-row">
        		<div>
        			<img src="imagens/menuhamb.svg" style="width: 185%;height: 36%;;margin-left: 100%;margin-top: 183%;">
                </div>

                <div style="display: flex;flex-direction: row;margin-left: 69%;width: 4%;">
		        	<img src="imagens/sinoalerta.svg" style="margin-top: 212%;margin-left: -121%;width: 175%;">

                    <img src="imagens/Config.svg" style="margin-top: 212%;margin-left: 200%;width: 198%;">
	        	</div>

            </div>

             <div id="titulo_vendas">
                Vendas
            </div>


             <div id="mes_vendas">
                Agosto
            </div>


        </div>



        <div class="inicio-conteudo">
            @yield('content')
        </div>

         

    </body>
</html>
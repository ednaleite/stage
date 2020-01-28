<html>
    <head>
        <title>App Name - @yield('title')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

        <link rel="stylesheet" type="text/css" href="css/master.css">

    </head>
    <body>
        <div class="w-100 bg-secondary fixed-top">
        	<div class="w-100 d-flex flex-row justify-content-between">
        		<div class="p-3">
        			<img src="imagens/teste.png" width="60%"></a>
	        	</div>
	        	<div class="w-75 d-flex flex-row flex-fill align-content-center">
	        		<img src="imagens/btn.png" width="16%" height="70%"  class="d-flex align-self-center mx-auto"></a>
		        	<img src="imagens/btn.png" width="16%" height="70%"  class="d-flex align-self-center mx-auto"></a>
		        	<img src="imagens/btn.png" width="9%"  height="40%"  class="d-flex align-self-center mx-auto"></a>
	        	</div>
        	</div>
        </div>

        <div class="inicio-conteudo">
            @yield('content')
        </div>

         <div class="w-100 bg-secondary fixed-bottom">
        	<div class="w-100 d-flex flex-row ">
        		<img src="imagens/btn.png" width="15%" height="15%" class="d-flex align-self-center mx-auto py-3"></a>
        		<img src="imagens/btn.png" width="15%" height="15%" class="d-flex align-self-center mx-auto py-3"></a>
        		<img src="imagens/btn.png" width="15%" height="15%" class="d-flex align-self-center mx-auto py-3"></a>
        		<img src="imagens/btn.png" width="15%" height="15%" class="d-flex align-self-center mx-auto py-3"></a>
        	</div>
        </div>

    </body>
</html>
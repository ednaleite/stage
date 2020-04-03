@extends('master')
@section('title', 'cadastroestoque')
@section('content')
<style>
	@media screen 
  and (min-device-height: 818px) 
  and (max-device-height: 830px){
  	body{
  		background-color: green;
  	}
  	#msform #btnext{
	
	background: white;
    font-weight: bold;
    color: white;
    border-radius: 100px;
    width: 150px;
    height: 150px;
    right: 30;
    bottom: -195px;
    position: absolute;
    border: solid 0.5px gray;
	cursor: pointer;
	box-shadow: 0 5px 10px rgba(0,0,0,.4);
	}

	.iconeAddRight{
	  position: absolute;
	  right: 52;
	  bottom: -124px;
	  z-index: 20;
	  font-size: 10vw;
	  font-weight: 100;
	  color: rgb(60,60,60);
	}

	#msform #btprevious{
		background: white;
	    font-weight: bold;
	    color: white;
	    border-radius: 100px;
	    width: 150px;
	    height: 150px;
	    left: 30;
	    bottom: -195px;
	    position: absolute;
	    border: solid 0.5px gray;
		cursor: pointer;
		box-shadow: 0 5px 10px rgba(0,0,0,.4);
	}

		.iconeAddLeft{
		position: absolute;
		left: 52;
		bottom: -145px;
		z-index: 20;
		font-size: 10vw;
		font-weight: 100;
		color: rgb(60,60,60);
	  }

}


@media screen 
  and (min-device-width: 320px) 
  and (max-device-width: 360px){
  	body{
  		background-color: pink;
  	}


  	#msform #btnext{
	
	background: white;
    font-weight: bold;
    color: white;
    border-radius: 100px;
    width: 150px;
    height: 150px;
    right: 30;
    bottom: 8%;
    position: absolute;
    border: solid 0.5px gray;
	cursor: pointer;
	box-shadow: 0 5px 10px rgba(0,0,0,.4);
	}

	.iconeAddRight{
	  position: absolute;
	  right: 52;
	  bottom: 16%;
	  z-index: 20;
	  font-size: 10vw;
	  font-weight: 100;
	  color: rgb(60,60,60);
	}

	#msform #btprevious{
		background: white;
	    font-weight: bold;
	    color: white;
	    border-radius: 100px;
	    width: 150px;
	    height: 150px;
	    left: 30;
	    bottom: 8%;
	    position: absolute;
	    border: solid 0.5px gray;
		cursor: pointer;
		box-shadow: 0 5px 10px rgba(0,0,0,.4);
	}

		.iconeAddLeft{
		position: absolute;
		left: 52;
		bottom: 16%;
		z-index: 20;
		font-size: 10vw;
		font-weight: 100;
		color: rgb(60,60,60);
	  }

}



@media screen 
  and (min-device-height: 810px) 
  and (max-device-height: 817px){
  	body{
  		background-color: red;
  	}

  	#msform #btnext{
	
	background: white;
    font-weight: bold;
    color: white;
    border-radius: 100px;
    width: 150px;
    height: 150px;
    right: 30;
    bottom: -340px;
    position: absolute;
    border: solid 0.5px gray;
	cursor: pointer;
	box-shadow: 0 5px 10px rgba(0,0,0,.4);
	}

	.iconeAddRight{
	  position: absolute;
	  right: 52;
	  bottom: -288px;
	  z-index: 20;
	  font-size: 10vw;
	  font-weight: 100;
	  color: rgb(60,60,60);
	}

	#msform #btprevious{
		background: white;
	    font-weight: bold;
	    color: white;
	    border-radius: 100px;
	    width: 150px;
	    height: 150px;
	    left: 30;
	    bottom: -340px;
	    position: absolute;
	    border: solid 0.5px gray;
		cursor: pointer;
		box-shadow: 0 5px 10px rgba(0,0,0,.4);
	}

		.iconeAddLeft{
		position: absolute;
		left: 52;
		bottom: -288px;
		z-index: 20;
		font-size: 10vw;
		font-weight: 100;
		color: rgb(60,60,60);
	  }

}

 







/*custom font*/
@import url(http://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}

body {
	font-family: montserrat, arial, verdana;
}
/*form styles*/
#msform {
	width: 400px;
	margin: 190px auto;
	text-align: center;
	position: relative;
}

#msform ul {
	width: 879px;
    margin-left: -61%
 }

#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	/* box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); */
	padding: 20px 30px;
	margin-top: 7%;
	box-sizing: border-box;
	width: 220%;
	height: 67vh;
	margin-left: -60%;
	
	/*stacking fieldsets above each other*/
	position: absolute;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea {
	padding: 12px;
    border: 1.5px solid #ccc;
    border-radius: 7px;
    margin-bottom: 50px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 38px;
    margin-top: 21px;
}
/*buttons*/
#msform .action-button1 {
	
	background: white;
    font-weight: bold;
    color: white;
    border-radius: 100px;
    width: 150px;
    height: 150px;
    right: 30px;
    bottom: 8%;
    position: absolute;
    border: solid 0.5px gray;
	cursor: pointer;
	box-shadow: 0 5px 10px rgba(0,0,0,.4);
	
	
}

#msform .action-button2 {
	
	background: white;
    font-weight: bold;
    color: white;
    border-radius: 100px;
    width: 150px;
    height: 150px;
    left: 30px;
    bottom: 8%;
    position: absolute;
    border: solid 0.5px gray;
	cursor: pointer;
	box-shadow: 0 5px 10px rgba(0,0,0,.4);
	
	
}

/*headings*/
.fs-title {
	font-size: 68px;
	/*text-transform: uppercase;*/
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 29px;
	color: #666;
	margin-bottom: 20px;
}

/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
    color: black;
    text-transform: uppercase;
    font-size: 12px;
    width: 33.33%;
    float: left;
    position: relative;
}
#progressbar li:before {
	content: counter(step);
    counter-increment: step;
    width: 48px;
    line-height: 48px;
    display: block;
    font-size: 26px;
    color: #333;
    background: #00cccc;
    border-radius: 50%;
    margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: #99cccc;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
	
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #009999;
	color: white;
}

#atributo{
	margin-left: 1%;
    margin-top: 12px;
    font-size: 37px;
}

#ajusteinputs{
	text-align: justify;
	margin-top: 17%;
	
}


</style>


<!-- multistep form -->
<form id="msform">
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active">Características</li>
		<li>Social Profiles</li>
		<li>Personal Details</li>
	</ul>
	<!-- fieldsets -->
	<fieldset>
		<h2 class="fs-title">Cadastro de Produto</h2>
		<h3 class="fs-subtitle">Preencha todos os dados corretamente</h3>
		<div id="ajusteinputs">
		<!-- <div id="atributo">Nome</div> --><input type="text" name="nomeproduto" placeholder="Nome" />
		<!-- <div id="atributo">Descrição</div> --><input type="password" name="descproduto" placeholder="Descrição" />
		<!-- <div id="atributo">Unidade de medida</div> --><input type="password" name="unimedproduto" placeholder="Unidade de medida" />
		</div>
		<div class='next iconeAddRight'><img src="{{asset('imagens/flechad.png')}}" width='110px'></div>		
		<input type="button" class="next action-button1" value="Next" id='btnext' />

	</fieldset>

	<fieldset>
		<h2 class="fs-title">Cadastro de Produtos</h2>
		<h3 class="fs-subtitle">Preencha todos os dados corretamente</h3>
		<input type="text" name="twitter" placeholder="Twitter" />
		<input type="text" name="facebook" placeholder="Facebook" />
		<input type="text" name="gplus" placeholder="Google Plus" />

		<div class='previous iconeAddLeft'><img src="{{asset('imagens/flechae.png')}}" width='110px'></div>	
		<input type="button" name="previous" class="previous action-button2" value="Previous"  id='btprevious'/>

		<div class='next iconeAddRight'><img src="{{asset('imagens/flechad.png')}}" width='110px'></div>
		<input type="button" name="next" class="next action-button1" value="Next" id='btnext' />

	</fieldset>

	<fieldset>
		<h2 class="fs-title">Personal Details</h2>
		<h3 class="fs-subtitle">We will never sell it</h3>
		<input type="text" name="fname" placeholder="First Name" />
		<input type="text" name="lname" placeholder="Last Name" />
		<input type="text" name="phone" placeholder="Phone" />
		<textarea name="address" placeholder="Address"></textarea>

		<div class='previous iconeAddLeft'><img src="{{asset('imagens/flechae.png')}}" width='110px'></div>	
		<input type="button" name="previous" class="previous action-button2" value="Previous" id='btprevious'/>

		<div class='submit iconeAddRight'><img src="{{asset('imagens/flechad.png')}}" width='110px'></div>
		<input type="submit" name="submit" class="submit action-button1" value="Submit"  id='btnext'/>
		
	</fieldset>
</form>


<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>


<!-- <button class="botaoNavegacao esquerda"><span class="iconeNavegacao">+</span></button>
<button class="botaoNavegacao direita"><span class="iconeNavegacao">+</span></button> -->


<script>
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 14)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 14)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return alert("Deu certo");
})


</script>




@endsection
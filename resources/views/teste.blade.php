<style type="text/css">
.circular-menu {
  width: 250px;
  height: 250px;
  margin: 0 auto;
  position: relative;
}

.circle {
  width: 250px;
  height: 250px;
  opacity: 0;
  
  -webkit-transform: scale(0);
  -moz-transform: scale(0);
  transform: scale(0);

  -webkit-transition: all 0.4s ease-out;
  -moz-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
}

.open.circle {
  opacity: 1;

  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  transform: scale(1);
}

.circle a {
  display: block;
  height: 40px;
  width: 40px;
  margin-left: -20px;
  margin-top: -20px;
  position: absolute;
  text-align: center;

}

.menu-button {
  position: absolute;
  top: calc(50% - 30px);
  left: calc(50% - 30px);
  display: block;
  height: 20px;
  width: 40px;
  padding: 10px;
}

.opcoes{
  position: absolute;
width: 403px;
height: 102px;

background: #CE9897;
border: 2px solid #FBFBFB;
box-sizing: border-box;
box-shadow: 0px 4px 35px #CB9897;
border-radius: 20px;
}
</style>



<nav class="circular-menu">

  <div class="circle">
    <a href=""><button class="opcoes">Cadastrar estoque</button></a>
    <a href=""><button class="opcoes">Consultar estoque</button></a>
    <a href=""><button class="opcoes">Adicionar estoque</button></a>
  </div>
  
  <a href=""><img src="imagens/supply.png" class="menu-button" style="width: 20px; height: 20px"></a>

</nav>


<script type="text/javascript">
var items = document.querySelectorAll('.circle a');

for(var i = 0, l = items.length; i < l; i++) {
  items[i].style.left = (50 - 35*Math.cos(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";
  
  items[i].style.top = (50 + 35*Math.sin(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";
}

document.querySelector('.menu-button').onclick = function(e) {
   e.preventDefault(); document.querySelector('.circle').classList.toggle('open');
}

  </script>
<style type="text/css">
input {
  display: none;
}

label {
  margin-top: 500px;
  display: inline-block;
  -webkit-transition: background-color 0.1s, color 0.1s;
  display: none;
}


.test {
  -webkit-transition: height .3s ease;
  height: 0;
  overflow: hidden;
  width: 200px;
  background: pink;
  margin-top: -130px;
}

input:checked + .test {
  height: 100px;
}
</style>



<label for="check"><img src="imagens/casa.png" style="width:20px;height: 20px"></label>

<input id="check" type="checkbox">

<div class="test">
  <div>ffffffff</div>
  <div>iiiiiiiiii</div>
  <div>227623</div>
</div>
@extends('master')

@section('title', 'Adicionar Produto')

@section('content')

<div class="add-conteudo">
	<div class="mt-2 mb-5">
		<div class="marcaProgresso centralizar bg-dark"></div>
		<div class="titulo2 centralizar w-50 text-center">Passo 1:<br>Informações do Produto</div>
	</div>
	<div class="formulario">
		<input type="text" name="" placeholder="Teste" class="customInput p-5">
		<input type="text" name="" placeholder="Teste" class="customInput p-5">
		<input type="text" name="" placeholder="Teste" class="customInput p-5">
		<input type="text" name="" placeholder="Teste" class="customInput p-5">
	</div>
</div>

<button class="botaoNavegacao esquerda"><span class="iconeNavegacao">+</span></button>
<button class="botaoNavegacao direita"><span class="iconeNavegacao">+</span></button>


@endsection
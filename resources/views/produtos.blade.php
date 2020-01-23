@extends('master')

@section('title', 'Produtos Estoque')

@section('content')

<div class="lista-conteudo">
	<div class="d-flex flex-row justify-content-between align-content-center">
		<div class="titulo">Produtos</div>
		<div class="barraPesquisa">
			<input type="text" class="form-control tamanhoBarra" placeholder="aaaaaa" aria-label="aaaaaa">
			<div class="input-group-append lupaPesquisa">
				<i class="fas fa-lg fa-search"></i>
			</div>
		</div>
	</div>
	<div class="itemProduto"></div>
	<div class="itemProduto"></div>
	<div class="itemProduto"></div>
	<div class="itemProduto"></div>
	<div class="itemProduto"></div>
	<div class="itemProduto"></div>
</div>

<button class="botaoAdd"><span class="iconeAdd">+</span></button>

@endsection
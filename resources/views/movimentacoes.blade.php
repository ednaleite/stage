@extends('master')

@section('title', 'Movimentações')

@section('content')

<div class="lista-conteudo">
	<div class="d-flex flex-row justify-content-between align-content-center">
		<div class="titulo">Movimentações</div>
		<div class="barraPesquisa">
			<input type="text" class="form-control tamanhoBarra" placeholder="aaaaaa" aria-label="aaaaaa">
			<div class="input-group-append lupaPesquisa">
				<i class="fas fa-lg fa-search"></i>
			</div>
		</div>
	</div>
	<div class="itemMovimentacao"></div>
	<div class="itemMovimentacao"></div>
	<div class="itemMovimentacao"></div>
	<div class="itemMovimentacao"></div>
	<div class="itemMovimentacao"></div>
	<div class="itemMovimentacao"></div>
</div>

@endsection
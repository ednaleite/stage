<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('criarproduto', 'ProdutoController@criarProduto')->name('criarproduto');
Route::post('criarproduto/post', 'ProdutoController@criarProdutoPost')->name('criarproduto.post');

Route::get('criarpessoa', 'PessoaController@criarPessoa')->name('criarpessoa');

Route::get('montarlote', 'EstoqueController@montarLote')->name('montarlote');

Route::get('retiradalote', 'EstoqueController@retiradaLote')->name('retiradalote');

Route::get('pdv', 'PDVController@abrirCaixa')->name('abrircaixa');

Route::get('fecharcaixa', 'PDVController@fecharCaixa')->name('fecharcaixa');

Route::get('buscaritem', 'PDVController@buscarItemPDV')->name('buscaritem');

Route::get('finalizarcompra', 'PDVController@finalizarCompraPDV')->name('finalizarcompra');

Route::get('receberlote/{numerolote}', 'EstoqueController@receberLote')->name('receberlote');

Route::get('consultaestoque', 'EstoqueController@consultaEstoque')->name('consultaestoque');

Route::get('consultamovimentacoes', 'MovimentacaoController@consultaMovimentacao')->name('consultamovimentacoes');

Route::get('index', 'Index@Index')->name('index');

Route::get('/', function(){
    phpinfo();
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/produtos', function(){
    return view('produtos');
});

Route::get('/add-produtos', function(){
    return view('addprodutos');
});


Route::get('/movimentacoes', function(){
    return view('movimentacoes');
});


Route::get('/cadastroestoque', function(){
    return view('cadastroestoque');
});

Route::get('/teste', function(){
    return view('teste');
});


Route::get('/inicio', function(){
    return view('inicio');
});

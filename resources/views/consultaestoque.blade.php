<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta de Estoque</title>
</head>
<body>
<form method='get' action="{{route('consultaestoque')}}">

<input type='text' name='nomeproduto' placeholder='Nome do produto' value='{{$valores[0]}}'>
<input type='text' name='corproduto' placeholder='Cor do produto' value='{{$valores[1]}}'>
<input type='text' name='tamanhoproduto' placeholder='Tamanho do produto' value='{{$valores[2]}}'>
<input type='text' name='nomeunidade' placeholder='Unidade do produto' value='{{$valores[3]}}'>
<input type='submit' name='consultainput' value='Pesquisar'>
<input type='submit' name='consultatodos' value='Todos os Produtos'>

</form>
<table border='1px'>
<tr><td>Imagem do Produto</td><td>Nome do Produto</td><td>Cor do Produto</td><td>Tamanho do Produto</td><td>Quantidade em Estoque</td><td>Unidade</td></tr>
@foreach($estoque as $estoque)
<tr>
    <td><img src='imagens/{{$estoque->img}}' width='200px' heigth='200px'></td>
    <td>{{$estoque->nomeproduto}}</td>
    <td>{{$estoque->nomecor}}</td>
    <td>{{$estoque->nometamanho}}</td>
    @if($estoque->quantidade <= $estoque->estqminproduto)
    <td bgcolor='#ff9999'style='color:red;'> {{$estoque->quantidade}} </td>
    @else
    <td>{{$estoque->quantidade}}</td>
    @endif
    <td>{{$estoque->nomeunidade}}</td>
</tr>
@endforeach
</table>
    
</body>
</html>
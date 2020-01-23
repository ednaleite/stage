<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta de Movimentação</title>
</head>
<body>
<form method='get' action="{{route('consultamovimentacoes')}}">

<input type='text' name='datainicio' placeholder='Data Inicial'>
<input type='text' name='datafim' placeholder='Data Final'>
<input type='submit' name='consultainput' value='Pesquisar por Data'>
<input type='submit' name='consultatodos' value='Histórico Completo'>

</form>
<table border='1px'>
<tr><td>Info.</td><td>Data</td><td>Unidade</td></tr>
@foreach($movimento as $movimento)
<tr>
    <td>{{$movimento->obsmovimentacao}}</td>
    <td>{{$movimento->datamovimentacao}}</td>
    <td>{{$movimento->nomeunidademovimentacao}}</td>
</tr>
@endforeach
</table>
    
</body>
</html>
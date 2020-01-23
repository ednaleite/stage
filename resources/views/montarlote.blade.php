<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Criar Produto</title>
</head>
<body>

@if($conf == 1)
<script type='text/javascript'> alert('Lote recebido com Sucesso!'); </script>
@endif

<button onclick="adicionaLinha('retirar')">Adicionar</button>

    <form method="get" action="{{route('retiradalote')}}" id='formretirar' name='retirarestoque'>
        <table border='1px' id='retirar'>
        <tr>
            <th>Produto do Estoque</th>
            <th>Quantidade no Estoque</th>
            <th>Quantidade à Retirar</th>
            <th>Unidade do Produto</th>
            <th>Remover Linha</th>
        </tr>
        
        </table>
        
        <input type='hidden' name='acao' value='retirarEstoque'>

        Para: <select name='unidademudanca'><option value = ''>--Selecione Uma Unidade--</option>@foreach($unidades as $unidade)<option value='{{$unidade->idunidade}}'>{{$unidade->nomeunidade}}</option>@endforeach</select>

        <input type='submit' value='Montar o Lote'>
    </form>
</body>
</html>

<script>
    var contlinhas = 0;
    var linhas = [];
    adicionaLinha('retirar');
    function adicionaLinha(idTabela) {
        contlinhas++;
        linhas.push(contlinhas);
        var tabela = document.getElementById(idTabela);
        var numeroLinhas = tabela.rows.length;
        var linha = tabela.insertRow(numeroLinhas);
        var celula1 = linha.insertCell(0);
        var celula2 = linha.insertCell(1);   
        var celula3 = linha.insertCell(2); 
        var celula4 = linha.insertCell(3); 
        var celula5 = linha.insertCell(4); 
        celula1.innerHTML = "<select name='produtos[]' id='"+contlinhas+"' onchange='rodar(this)'><option value=''>Selecione um Produto</option>@foreach($estoque as $estoque)@if($estoque->quantidade > 0)<option value='{{$estoque->idproduto}}'>{{$estoque->nomeproduto}} {{$estoque->nomecor}} ({{$estoque->nometamanho}}) - Unidade {{$estoque->nomeunidade}}</option>@endif @endforeach</select>"; 
        celula2.innerHTML =  "<div id='quantidade"+contlinhas+"'></div>"; 
        celula3.innerHTML =  "<div id='qtdretirar"+contlinhas+"'></div>";
        celula4.innerHTML =  "<div id='unidade"+contlinhas+"'></div>";
        celula5.innerHTML =  "<button onclick='removeLinha(this)' id='"+contlinhas+"'>Remover</button>";
        
    }
    
    // funcao remove uma linha da tabela
    function removeLinha(linha) {
        var i=linha.parentNode.parentNode.rowIndex;
        document.getElementById('retirar').deleteRow(i);
        linhas.splice(linha.id -1, 1);
        
    }
    function rodar(esse){
        var idproduto = document.getElementById(esse.id).value;

        @foreach($estoque2 as $estoque2)

         if({{$estoque2->idproduto}} == idproduto){
            var quantidade = {{$estoque2->quantidade}};
            var unidade = "{{$estoque2->nomeunidade}}";
         }

        @endforeach

        document.getElementById('quantidade'+esse.id).innerHTML = "<p align='center'> "+ quantidade +" </p>";
        document.getElementById('qtdretirar'+esse.id).innerHTML = "<input type='number'name='quantidade[]' min='1' max='"+quantidade+"' value='1'>";
        document.getElementById('unidade'+esse.id).innerHTML = "<p align='center'> "+ unidade +" </p>";
    }

</script>
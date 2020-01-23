<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Criar Produto</title>
</head>
<body>
    <form method="get" action="{{route('receberlote', ['numerolote' => $numerolote] )}}" onsubmit="return false;" id='formconfirmar' name='retirarestoque'>
        <table border='1px' id='retirar'>
        <tr>
            <th>Produto do Estoque</th>
            <th>Quantidade Esperada</th>
            <th>Quantidade Recebida</th>
            <th>Remover Linha</th>
        </tr>
        <button onclick="adicionaLinha('retirar')">Adicionar</button>
        </table>
        
        <input type='hidden' name='acao' value='confirmar'>

        <button onclick='receberLote()' >Confirmar recebimento</button>
    </form>
</body>
</html>

<script>
    var contlinhas = 0;
    var linhas = [];
    adicionaLinha2('retirar');

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
        celula1.innerHTML = "<select name='produtosad[]' id='"+contlinhas+"' onchange='rodar(this)'><option value=''>Selecione um Produto</option>@foreach($estoque as $estoque)@if($estoque->quantidade > 0)<option value='{{$estoque->idproduto}}'>{{$estoque->nomeproduto}} {{$estoque->nomecor}} ({{$estoque->nometamanho}})</option>@endif @endforeach</select>"; 
        celula2.innerHTML =  "<div id='quantidadead"+contlinhas+"'></div>"; 
        celula3.innerHTML =  "<input type='number'name='quantidadead[]'>";
        celula4.innerHTML =  "<button onclick='removeLinha(this)' id='"+contlinhas+"'>Remover</button>";
        
    }

    function adicionaLinha2(idTabela) {
        @for($i = 0; $i <= $count; $i++)

        contlinhas++;
        linhas.push(contlinhas);
        var tabela = document.getElementById(idTabela);
        var numeroLinhas = tabela.rows.length;
        var linha = tabela.insertRow(numeroLinhas);
        var celula1 = linha.insertCell(0);
        var celula2 = linha.insertCell(1);   
        var celula3 = linha.insertCell(2); 
        var celula4 = linha.insertCell(3); 
        celula1.innerHTML = "<select name='produtos[]' id='"+contlinhas+"'><option value='{{$idproduto[$i]}}'>{{$nomeproduto[$i]}} {{$nomecor[$i]}} ({{$nometamanho[$i]}})</option></select>"; 
        celula2.innerHTML =  "<div id='quantidade"+contlinhas+"'></div>"; 
        celula3.innerHTML =  "<input type='number'name='quantidade[]' value='{{$quantidadetr[$i]}}'>";
        celula4.innerHTML =  "";

        document.getElementById('quantidade'+contlinhas).innerHTML = "<p align='center'> "+ {{$quantidadetr[$i]}} +" </p>";

        @endfor
        
    }
    
    // funcao remove uma linha da tabela
    function removeLinha(linha) {
        var i=linha.parentNode.parentNode.rowIndex;
        document.getElementById('retirar').deleteRow(i);
        linhas.splice(linha.id -1, 1);
        
    }
    function receberLote() {
        document.getElementById('formconfirmar').submit();
    }
    function rodar(esse){

        document.getElementById('quantidadead'+esse.id).innerHTML = "<p align='center'> "+ 0 +" </p>";

    }

</script>
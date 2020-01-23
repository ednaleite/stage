<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Criar Produto</title>
</head>
<body>
@if($conf == 1)
<script type='text/javascript'> alert('Produto Criado com Sucesso!'); </script>
@endif

    <form method="post" action="{{route('criarproduto.post')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
        <h3>Obrigatório(*)</h3>
        Nome do produto: <input type="text" name="nomeproduto" required>(*)<br>
        Descrição do Produto: <input type="text" name="descproduto" required>(*)<br>
        Unidade de Medida: <select name="unimedproduto">
                                <option value='Quilogramas'>Quilogramas (Kg)</option>
                                <option value='Litros'>Litros (L)</option>
                                <option value='Comprimento'>Comprimento (Metros)</option>
                            </select>(*)<br>
        Categoria do Produto: <select name="categoriaproduto">
                                @foreach($categorias as $categoria)
                                <option value='{{$categoria->nomecategoria}}'>{{$categoria->nomecategoria}}</option>
                                @endforeach
                            </select>(*)<br>
                            Unidade: <select name='local'>
        <option value=''>--Selecione a Unidade--</option>
            @foreach ($unidades as $unidade)
            <option value='{{$unidade->idunidade}}'>Unidade {{$unidade->idunidade}}</option>
            @endforeach
        </select>(*)<br>
        Cor do Produto: <select name='idcor'>
        <option value=''>--Selecione a cor--</option>
            @foreach ($cores as $cor)
            <option value='{{$cor->idcor}}'>{{$cor->nomecor}}</option>
            @endforeach
        </select><br>
        Tamanho do produto: <select name='idtamanho'>
        <option value=''>--Selecione o Tamanho--</option>
            @foreach ($tamanhos as $tamanho)
            <option value='{{$tamanho->idtamanho}}'>{{$tamanho->nometamanho}}</option>
            @endforeach
        </select><br>
        Foto do Produto: <input type="file" name="img" accept="image/*" required>(*)<br>
        Estoque mínimo: <input type="text" name="estqminproduto" required>(*)<br>
        Estoque Inicial: <input type="text" name="quantidade" required>(*)<br>
        Valor Varejo: <input type="text" name="valvareproduto" required>(*)<br>
        Valor Atacado: <input type="text" name="valatacproduto"><br>
        Desconto Produto<input type="text" name="descontoproduto" required>(*)<br>
        Código NCM: <input type="text" name="ncmcodproduto"><br>
        Descrição NCM: <input type="text" name="ncmdescproduto"><br>
        Código EAN: <input type="text" name="eancodproduto"><br>

        
        <input type="submit" value="Criar Produto" name='criar'>
    </form>
</body>
</html>
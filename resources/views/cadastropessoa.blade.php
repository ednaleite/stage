<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar Pessoa</title>
</head>
<body>
@if($conf == 1)
<script type='text/javascript'> alert('Pessoa Cadastrado com Sucesso!'); </script>
@endif

    <form method="get" action="{{route('criarpessoa')}}">
        <h3>Obrigatório(*)</h3>
        Grupo: Cliente<input type='checkbox' name='grupopessoa[]'>
        Fornecedor<input type='checkbox' name='grupopessoa[]'><br>
        Nome: <input type="text" name="nomepessoa" required>(*)<br>
        CPF/CNPJ: <input type="text" name="cpfcnpjpessoa" required>(*)<br>
        Email: <input type="text" name="emailpessoa" required>(*)<br>
        Número de Telefone 1: <input type="text" name="fonepessoa" required>(*)<br>
        Número de Telefone 2: <input type="text" name="fone2pessoa"><br>
        Número de Telefone 3: <input type="text" name="fone3pessoa"><br>
        Número de Telefone 4: <input type="text" name="fone4pessoa"><br>
        CEP: <input type="text" name="ceppessoa" required>(*)<br>
        Endereço do Estabelecimento: <input type="text" name="enderecopessoa" required>(*)<br>
        Observações: <input type="text" name="obspessoa" required>(*)<br>
        Senha: <input type="text" name="senhapessoa" required>(*)<br>
        Confirmar Senha: <input type="text" name="confsenhapessoa" required>(*)<br>
        <input type="submit" value="Confirmar Cadastro" name='criar'>
    </form>
</body>
</html>
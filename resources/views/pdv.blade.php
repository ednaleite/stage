<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
    <title>PDV</title>
</head>
<body>
    <h2>7893000394209 - 7896051130765</h2>
    <h3>
        F2 => Pagamento em Dinheiro<br>
        F4 => Cartão de Débito<br>
        F7 => Cartão de Crédito -> Á vista<br>
        F8 => Cartão de Crédito -> Parcelado<br>
        F9 => Finalizar Compra<br>
    </h3>

    <h2 id='metodopagamento'></h2>

    <img src="{{ URL::to('/imagens') }}/63.jpg" width='200px' heigth='200px' id='imagemproduto'>

    <input type='text' name='eanproduto' id='eanproduto'>

    <input type='button' name='fds' onclick='imprimir()' value='imprimir'>
    <input type='button' name='fds2' onclick='cancelarCompra()' value='Cancelar Compra'>
    <input type='button' name='fds3' onclick='fecharCaixa()' value='Fechar Caixa'>


    <table border='1px' id='pdv'>
        <tr>
            <th>Id do Produto</th>
            <th>Nome do Produto</th>
            <th>Quantidade do Produto</th>
            <th>Preço Varejo</th>
            <th>Preço Atacado</th>
            <th>Remover Produto</th>
        </tr>
    </table>

    Subtotal: <div id='subtotal' style='background-color:#33ffff;  heigth:100px; width:100px;'></div>
    Total: <div id='total' style='background-color:#ff0000;  heigth:100px; width:100px;'>R$0</div>
    Recebido: <div id='recebido'>R$ 0,00 </div>
    Troco: <div id='troco'> R$ 0,00 </div>

    <input type='number' id='confirmardinheiro' style='display:none;'>

<script type='text/javascript'>

var subtotal = 0;
var total = 0;
var numprodutos = [];
var contlinhas = 0;
var linhas = [];
var produtos = [];
var metpag = 0;
var confcompra = 0;
atualizarSubtotal();

    $(document).keydown(function (e) {
            if(e.key == "F2"){
                metpag = 0;
                confirmarDinheiro();
                document.getElementById('metodopagamento').innerHTML = "Pagamento em Dinheiro Físico";
            }

            if(e.key == "F4"){
                calcularTotal();
                document.getElementById('metodopagamento').innerHTML = "Pagamento no Cartão de Débito";
                metpag = 2;
            }

            if(e.key == "F7"){
                calcularTotal();
                document.getElementById('metodopagamento').innerHTML = "Pagamento no Cartão de Crédito Á Vista";
                metpag = 3;
            }

            if(e.key == "F8"){
                calcularTotal();
                document.getElementById('metodopagamento').innerHTML = "Pagamento no Cartão de Crédito Parcelado";
                metpag = 4;
            }

            
            if(e.key == "F9"){
                if(metpag != 0){
                    finalizarCompra();
                }else{
                    alert('Selecione uma forma de pagamento!');
                }
            }

        });

    $("#eanproduto").keypress(function(e) {
        if (e.which == 13) {
            $.ajax({
    type: "GET",
    url: "/buscaritem/",
    data: {codigo: document.getElementById('eanproduto').value},
    dataType: "json",
    success: function(data) {

        if(produtos.length != 0){

                for(var i = 0; i < produtos.length; i++){
                    if(produtos[i][0] == data.idproduto){
                        var checar = 1;
                        var indice = i;
                    }else{
                        if(checar == 0){
                            var checar = 0;
                        }
                    }
                }
        }

        if(checar == 1){
            produtos[indice][2]++;
            document.getElementById("quantidadeproduto["+produtos[indice][0]+"]").innerHTML = produtos[indice][2];
            document.getElementById("imagemproduto").src = "{{ URL::to('/imagens') }}/"+data.img;
            atualizarSubtotal();

        }else{

            produtos.push([data.idproduto, data.nomeproduto, 1, data.valvareproduto, data.valatacproduto, data.quantidadeatacproduto]);

            numprodutos.push(contlinhas);

            document.getElementById("imagemproduto").src = "{{ URL::to('/imagens') }}/"+data.img;

            contlinhas++;
            linhas.push(contlinhas);
            var tabela = document.getElementById('pdv');
            var numeroLinhas = tabela.rows.length;
            var linha = tabela.insertRow(numeroLinhas);
            var celula1 = linha.insertCell(0);
            var celula2 = linha.insertCell(1);   
            var celula3 = linha.insertCell(2); 
            var celula4 = linha.insertCell(3);
            var celula5 = linha.insertCell(4);
            var celula6 = linha.insertCell(5); 
            celula1.innerHTML = produtos[produtos.length - 1][0]; 
            celula2.innerHTML = produtos[produtos.length - 1][1]; 
            celula3.innerHTML = "<div id='quantidadeproduto["+produtos[produtos.length - 1][0]+"]'>"+ produtos[produtos.length - 1][2] +"</div>";
            celula4.innerHTML = "R$"+produtos[produtos.length - 1][3];
            celula5.innerHTML = "R$"+produtos[produtos.length - 1][4];
            celula6.innerHTML = "<input type='button' value='Remover' onclick='cancelarItem(this)' id='"+contlinhas+"'>";
            atualizarSubtotal();

        }

        document.getElementById('eanproduto').value = '';
        
    }
        });

        }
    });

    function atualizarSubtotal(){

            subtotal = 0;

            for(var i = 0; i< produtos.length; i++){
                calcularSubtotal(i);
            }

            document.getElementById('subtotal').innerHTML= 'R$' + subtotal;

        
    }

    

    function calcularSubtotal(numproduto){
        
        subtotal = subtotal + (produtos[numproduto][2] * produtos[numproduto][3]);

    }

    function cancelarItem(numeroitem){

        produtos.splice(numeroitem.id-1, 1);

        numprodutos.splice(numeroitem.id-1, 1);

        var i=numeroitem.parentNode.parentNode.rowIndex;
        document.getElementById('pdv').deleteRow(i);

        contlinhas--;

        atualizarSubtotal();

    }

    function cancelarCompra(){
        document.location.reload(true);
    }

    function confirmarDinheiro(){
        
        document.getElementById('confirmardinheiro').style.display = 'inline';

        calcularTotal();

        $('#confirmardinheiro').keypress(function(e){

            if(e.which == 13){
                var troco = document.getElementById('confirmardinheiro').value - total;
                if(troco >= 0){
                    document.getElementById('recebido').innerHTML = 'R$' + document.getElementById('confirmardinheiro').value;
                    document.getElementById('troco').innerHTML = 'R$' + troco;
                    metpag = 1;
                }else{
                    alert('Erro: faltam R$' + troco * -1 + " para a compra ser efetuada com sucesso.");
                }
            }

        });

    }

    function imprimir(){
        alert(produtos.toString());
        alert(numprodutos.toString());
    }
    function finalizarCompra(){
            $.ajax({
            type: "GET",
            url: "/finalizarcompra/",
            data: {produtos: produtos, metodopagamento: metpag},
            dataType: "json",
            success: function(data) {
                if(data == 1){
                    alert('Compra finalizada com sucesso!');
                    cancelarCompra();
                }else{
                    alert('Algo deu errado, Tente Novamente!');
                }
            }
        });
    }

    function calcularTotal(){
        total = 0;
        
        for(var i = 0; i< produtos.length; i++){
            if(produtos[i][2] >= produtos[i][5]){
                total = total + (produtos[i][2] * produtos[i][4]);
            }else{
                total = total + (produtos[i][2] * produtos[i][3]);
            }
        }

        document.getElementById('total').innerHTML= 'R$' + total;

    }

    function fecharCaixa(){
        window.location.href='fecharcaixa';
    }

</script>
</body>
</html>
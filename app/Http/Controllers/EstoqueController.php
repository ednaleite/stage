<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Estoque;
use Illuminate\Support\Facades\DB;

class EstoqueController extends Controller
{

    public function montarLote(Request $request){

        if($request->session()->get('conf') == 1){
            $conf = 1;
            $request->session()->forget('conf');
        }else{
            $conf = 0;
        }

        $produtos = DB::table('produtos')->get();
        $cores = DB::table('cores')->get();
        $tamanhos = DB::table('tamanhos')->get();
        $unidades = DB::table('unidades')->get();
        $estoques = DB::table('produtos')->get();

        $estoque = DB::table('produtos')
            ->join('tamanhos', 'produtos.idtamanho', '=', 'tamanhos.idtamanho')
            ->join('unidades', 'produtos.local', '=', 'unidades.idunidade')
            ->join('cores', 'produtos.idcor', '=', 'cores.idcor')
            ->select('produtos.nomeproduto', 'produtos.quantidade', 'produtos.idproduto', 'tamanhos.nometamanho', 'cores.nomecor', 'unidades.nomeunidade')
            ->get();

        return view('montarlote', [
            'conf' => $conf,
            'estoque' => $estoque,
            'estoque2' => $estoque,
            'unidades' => $unidades,
        ]);
    }




    public function retiradaLote(Request $request){

        $conf = 0;
        
        $loteatual = DB::table('lotes')->select('numerolote')->latest('numerolote')->first();

        if($loteatual == ''){
            $loteatual = 1;
        }else{
            foreach($loteatual as $loteatual){
                $loteatual = $loteatual + 1;
            }
        }

        
        
        if($request->input('acao') == 'retirarEstoque'){

            for($contador = 0; $contador < count($request->quantidade); $contador++){

                $pesquisa = DB::table('produtos')
                ->where('idproduto', $request->input('produtos')[$contador])
                ->get();

                foreach($pesquisa as $pesquisa){

                    $estoquepesquisa = DB::table('produtos')
                        ->join('tamanhos', 'produtos.idtamanho', '=', 'tamanhos.idtamanho')
                        ->join('cores', 'produtos.idcor', '=', 'cores.idcor')
                        ->select('produtos.nomeproduto', 'produtos.local','tamanhos.nometamanho', 'cores.nomecor', 'produtos.quantidade', 'produtos.idproduto')
                        ->where('produtos.idproduto', $request->input('produtos')[$contador])
                        ->get();
                
                    $retirarbanco = DB::table('produtos')
                    ->where('idproduto', $request->input('produtos')[$contador])
                    ->update(['quantidade' => $pesquisa->quantidade - $request->input('quantidade')[$contador]]);
                    

                    

                    foreach($estoquepesquisa as $estoquepesquisa){

                        $nomeunidade = DB::table('unidades')
                        ->where('idunidade', $estoquepesquisa->local)
                        ->first();

                        $movimentoatt = DB::table('movimentacoes')->insert(
                            [
                             'idproduto' => $request->input('produtos')[$contador],
                             'datamovimentacao' => date('d/m/Y'),
                             'usuariomovimentacao' => 'admin',
                             'nomeunidademovimentacao' => $nomeunidade->nomeunidade,
                             'lotemovimentacao' => $request->input('unidademudanca'),
                             'obsmovimentacao' => 'Retirada de "'.$request->input('quantidade')[$contador].'" item(s) do produto "'.$estoquepesquisa->nomeproduto.' '. $estoquepesquisa->nomecor.' ('. $estoquepesquisa->nometamanho.')" Para o Lote '.$loteatual,
                             ]
                        );
                        
                        $loteatt = DB::table('lotes')->insert(
                        [
                         'numerolote' => $loteatual,
                         'idproduto' => $estoquepesquisa->idproduto,
                         'quantidadelote' => $request->input('quantidade')[$contador],
                         'destinolote' => $request->input('unidademudanca'),
                         ]
                    );
                    

                    }


                    
                }

            }

            

            if($movimentoatt && $retirarbanco){
                $conf = 1;
                $nomeproduto = [];
                $nometamanho = [];
                $nomecor = [];
                $quantidadetr = [];
                $contador = 0;
                $pesquisaloteatual = DB::table('lotes')->where('numerolote', $loteatual)->get();
                foreach($pesquisaloteatual as $pesquisaloteatual){
                    $pesquisaestoqueatual = DB::table('produtos')
                        ->join('tamanhos', 'produtos.idtamanho', '=', 'tamanhos.idtamanho')
                        ->join('cores', 'produtos.idcor', '=', 'cores.idcor')
                        ->select('produtos.nomeproduto', 'produtos.quantidade', 'produtos.idproduto', 'tamanhos.nometamanho', 'cores.nomecor')
                        ->where('produtos.idproduto', $pesquisaloteatual->idproduto)
                        ->first();
                        array_push($nomeproduto, $pesquisaestoqueatual->nomeproduto);
                        array_push($nometamanho, $pesquisaestoqueatual->nometamanho);
                        array_push($nomecor, $pesquisaestoqueatual->nomecor);
                        array_push($quantidadetr, $request->input('quantidade')[$contador]);
                        $contador++;

                        $destinolote = DB::table('unidades')
                        ->select('nomeunidade')
                        ->where('idunidade', $request->input('unidademudanca'))
                        ->first();
                }
            }

        }
        return view('qrcode', [
            'destinolote' => $destinolote->nomeunidade,
            'loteatual' => $loteatual,
            'nomeproduto' => $nomeproduto,
            'nometamanho' => $nometamanho,
            'nomecor' => $nomecor,
            'quantidadetr' => $quantidadetr,
            'contador' => $contador - 1,
            'conf' => $conf
        ]);
    }




    public function receberLote($numerolote, Request $request){

        $conf = 0;

        $contador = 0;
        
        if($request->input('acao') == 'confirmar'){

            $lotereceber = DB::table('lotes')->where('numerolote', $numerolote)->get();

                foreach($lotereceber as $lotereceber){
                    $destinolote = $lotereceber->destinolote;
                    $numerolote = $lotereceber->numerolote;

                    $estoqueatual = DB::table('produtos')
                        ->join('tamanhos', 'produtos.idtamanho', '=', 'tamanhos.idtamanho')
                        ->join('cores', 'produtos.idcor', '=', 'cores.idcor')
                        ->where('produtos.idproduto', $lotereceber->idproduto)
                        ->get();

                    foreach($estoqueatual as $estoqueatual){

                        $nomeunidade = DB::table('unidades')
                        ->where('idunidade', $destinolote)
                        ->first();

                        $movimentoatt = DB::table('movimentacoes')->insert(
                            [
                             'idproduto' => $lotereceber->idproduto,
                             'datamovimentacao' => date('d/m/Y'),
                             'usuariomovimentacao' => 'admin',
                             'nomeunidademovimentacao' => $nomeunidade->nomeunidade,
                             'lotemovimentacao' => $destinolote,
                             'obsmovimentacao' => 'Recebido "'.$request->input('quantidade')[$contador].'" de "'.$lotereceber->quantidadelote.'" do produto "'.$estoqueatual->nomeproduto.' '. $estoqueatual->nomecor.' ('. $estoqueatual->nometamanho.')" do Lote '.$numerolote,
                             ]
                        );

                        $checar = DB::table('produtos')
                        ->join('unidades', 'produtos.local', '=', 'unidades.idunidade')
                        ->where('produtos.idproduto' , $estoqueatual->idproduto)
                        ->where('produtos.idcor' , $estoqueatual->idcor)
                        ->where('produtos.idtamanho' , $estoqueatual->idtamanho)
                        ->where('unidades.idunidade' , $destinolote)
                        ->first();

                        if($checar){

                            $inserirestoque = DB::table('produtos')->where('idproduto', $checar->idestoque)->update(['quantidade' => $checar->quantidade + $lotereceber->quantidadelote]);
                            

                        }else{
                            $inserirestoque = DB::table('produtos')->insert(
                                [

                                    'nomeproduto' => $estoqueatual->nomeproduto,
                                    'descproduto' => $estoqueatual->descproduto,
                                    'categoriaproduto' => $estoqueatual->categoriaproduto,
                                    'estqminproduto' => $estoqueatual->estqminproduto,
                                    'valatacproduto' => $estoqueatual->valatacproduto,
                                    'valvareproduto' => $estoqueatual->valvareproduto,
                                    'descontoproduto' => $estoqueatual->descontoproduto,
                                    'ncmcodproduto' => $estoqueatual->ncmcodproduto,
                                    'ncmdescproduto' => $estoqueatual->ncmdescproduto,
                                    'unimedproduto' => $estoqueatual->unimedproduto,
                                    'local' => $destinolote,
                                    'sku' => $estoqueatual->sku,
                                    'ean' => $estoqueatual->ean,
                                    'img' => $estoqueatual->img,
                                    'ref' => $estoqueatual->ref,
                                    'wms' => $estoqueatual->wms,
                                    'quantidade' => $lotereceber->quantidadelote,
                                    'idcor' => $estoqueatual->idcor,
                                    'idtamanho' => $estoqueatual->idtamanho
                                    
                                ]);
                        }
                        
                    }
                    $contador++;
                }

                if($request->input('quantidadead')){
                    $contador = count($request->input('quantidadead'));

                    for($i = 0; $i<=$contador-1; $i++){

                        $estoqueatual = DB::table('produtos')
                        ->join('tamanhos', 'produtos.idtamanho', '=', 'tamanhos.idtamanho')
                        ->join('cores', 'produtos.idcor', '=', 'cores.idcor')
                        ->where('produtos.idproduto', $request->input('produtosad')[$i])
                        ->get();

                    foreach($estoqueatual as $estoqueatual){

                        $movimentoatt = DB::table('movimentacoes')->insert(
                            [
                             'idproduto' => $estoqueatual->idproduto,
                             'datamovimentacao' => date('d/m/Y'),
                             'usuariomovimentacao' => 'admin',
                             'lotemovimentacao' => $destinolote,
                             'obsmovimentacao' => 'Adicional: Recebido "'.$request->input('quantidadead')[$i].'" do produto "'.$estoqueatual->nomeproduto.' '. $estoqueatual->nomecor.' ('. $estoqueatual->nometamanho.')" do Lote '.$numerolote,
                             ]
                        );

                        $checar = DB::table('produtos')
                        ->join('unidades', 'produtos.local', '=', 'unidades.idunidade')
                        ->where('produtos.idproduto' , $estoqueatual->idproduto)
                        ->where('produtos.idcor' , $estoqueatual->idcor)
                        ->where('produtos.idtamanho' , $estoqueatual->idtamanho)
                        ->where('unidades.idunidade' , $destinolote)
                        ->first();

                        if($checar){

                            $inserirestoque = DB::table('produtos')->where('idproduto', $checar->idestoque)->update(['quantidade' => $checar->quantidade + $request->input('quantidadead')[$i]]);
                            

                        }else{
                            $inserirestoque = DB::table('estoques')->insert(
                                [

                                    'nomeproduto' => $estoqueatual->nomeproduto,
                                    'descproduto' => $estoqueatual->descproduto,
                                    'categoriaproduto' => $estoqueatual->categoriaproduto,
                                    'estqminproduto' => $estoqueatual->estqminproduto,
                                    'valatacproduto' => $estoqueatual->valatacproduto,
                                    'valvareproduto' => $estoqueatual->valvareproduto,
                                    'descontoproduto' => $estoqueatual->descontoproduto,
                                    'ncmcodproduto' => $estoqueatual->ncmcodproduto,
                                    'ncmdescproduto' => $estoqueatual->ncmdescproduto,
                                    'unimedproduto' => $estoqueatual->unimedproduto,
                                    'local' => $destinolote,
                                    'sku' => $estoqueatual->sku,
                                    'ean' => $estoqueatual->ean,
                                    'img' => $estoqueatual->img,
                                    'ref' => $estoqueatual->ref,
                                    'wms' => $estoqueatual->wms,
                                    'quantidade' => $request->input('quantidadead')[$i],
                                    'idcor' => $estoqueatual->idcor,
                                    'idtamanho' => $estoqueatual->idtamanho
                                    
                                ]);
                        }
                        
                    }

                    }
                    
                }
                

                if($movimentoatt && $inserirestoque){
                    $request->session()->put('conf', 1);
                    return redirect()->route('montarlote');
                }

        }else{

            $lotereceber = DB::table('lotes')->where('numerolote', $numerolote)->get();
            $idproduto = [];
            $nomeproduto = [];
            $nometamanho = [];
            $nomecor = [];
            $quantidadetr = [];

            foreach($lotereceber as $lotereceber){

                $estoque = DB::table('produtos')
                ->join('tamanhos', 'produtos.idtamanho', '=', 'tamanhos.idtamanho')
                ->join('unidades', 'produtos.local', '=', 'unidades.idunidade')
                ->join('cores', 'produtos.idcor', '=', 'cores.idcor')
                ->select('produtos.nomeproduto', 'produtos.quantidade', 'produtos.idproduto', 'tamanhos.nometamanho', 'cores.nomecor', 'unidades.nomeunidade')
                ->where('produtos.idproduto', $lotereceber->idproduto)
                ->first();

                array_push($nomeproduto, $estoque->nomeproduto);
                array_push($idproduto, $estoque->idproduto);
                array_push($nometamanho, $estoque->nometamanho);
                array_push($nomecor, $estoque->nomecor);
                array_push($quantidadetr, $lotereceber->quantidadelote);

            }
            
            $estoque = DB::table('produtos')
            ->join('tamanhos', 'produtos.idtamanho', '=', 'tamanhos.idtamanho')
            ->join('unidades', 'produtos.local', '=', 'unidades.idunidade')
            ->join('cores', 'produtos.idcor', '=', 'cores.idcor')
            ->select('produtos.nomeproduto',  'produtos.quantidade', 'produtos.idproduto', 'tamanhos.nometamanho', 'cores.nomecor','unidades.nomeunidade')
            ->get();

            return view('confirmarlote', [
                'numerolote'=> $numerolote,
                'idproduto' => $idproduto,
                'nomeproduto' => $nomeproduto,
                'nometamanho' => $nometamanho,
                'nomecor' => $nomecor,
                'quantidadetr' => $quantidadetr,
                'count'=> count($nomeproduto) - 1,
                'estoque' => $estoque,
            ]);

        }
        
        
    }




    public function consultaEstoque(Request $request){
            
        $valores = ['','','',''];

            if($request->input('consultainput')){

                $valores = [$request->nomeproduto,$request->corproduto,$request->tamanhoproduto, $request->nomeunidade];

                $estoque = DB::table('produtos')
                    ->join('tamanhos', 'produtos.idtamanho', '=', 'tamanhos.idtamanho')
                    ->join('cores', 'produtos.idcor', '=', 'cores.idcor')
                    ->join('unidades', 'produtos.local', '=', 'unidades.idunidade')
                    ->select('produtos.nomeproduto','produtos.estqminproduto',  'produtos.quantidade', 'produtos.idproduto', 'produtos.img', 'tamanhos.nometamanho', 'cores.nomecor', 'unidades.nomeunidade')
                    ->where('produtos.nomeproduto', 'like', '%'.$request->nomeproduto.'%')
                    ->where('cores.nomecor', 'like', '%'.$request->corproduto.'%')
                    ->where('tamanhos.nometamanho', 'like', '%'.$request->tamanhoproduto.'%')
                    ->where('unidades.nomeunidade', 'like', '%'.$request->nomeunidade.'%')
                    ->get();

            }else{

                $estoque = DB::table('produtos')
                    ->join('tamanhos', 'produtos.idtamanho', '=', 'tamanhos.idtamanho')
                    ->join('cores', 'produtos.idcor', '=', 'cores.idcor')
                    ->join('unidades', 'produtos.local', '=', 'unidades.idunidade')
                    ->select('produtos.nomeproduto','produtos.estqminproduto',  'produtos.quantidade', 'produtos.img', 'tamanhos.nometamanho', 'cores.nomecor', 'unidades.nomeunidade')
                    ->get();

            }
            return view('consultaestoque', [
                'estoque' => $estoque,
                'valores' => $valores,
            ]);

    }




    
}

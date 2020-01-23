<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Pessoa;
use Illuminate\Support\Facades\DB;

class PessoaController extends Controller
{
    public function criarPessoa(Request $request){

        $conf = 0;
        if($request->input('criar')){

            $pessoa = new Pessoa();

            $pessoa->nomepessoa = $request->input('nomepessoa');
            $pessoa->cpfcnpjpessoa = $request->input('cpfcnpjpessoa');
            $pessoa->ceppessoa = $request->input('ceppessoa');
            $pessoa->emailpessoa = $request->input('emailpessoa');
            $pessoa->enderecopessoa = $request->input('enderecopessoa');
            $pessoa->fonepessoa = $request->input('fonepessoa');
            $pessoa->fone2pessoa = $request->input('fone2pessoa');
            $pessoa->fone3pessoa = $request->input('fone3pessoa');
            $pessoa->fone4pessoa = $request->input('fone4pessoa');
            $pessoa->obspessoa = $request->input('obspessoa');
            $pessoa->senhapessoa = $request->input('senhapessoa');
            $pessoa->clientepessoa = 0;
            $pessoa->fornecedorpessoa = 0;
            $grupopessoa = $request->input('grupopessoa');
            if($grupopessoa[0] == 'on'){
                $pessoa->clientepessoa = 1;
            }if($grupopessoa[1] == 'on'){
                $pessoa->fornecedorpessoa = 1;
            }

            if($pessoa->save()){
                $conf = 1;
            }
        }

        return view('cadastropessoa',['conf'=>$conf]);
    }
}
        
        
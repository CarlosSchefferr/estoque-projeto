<?php 

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



   

    class ProdutoController extends Controller
    {
        public function lista()
        {
            $produtos = Produto::all();
    
            return view('produto.listagem')->with('produtos', $produtos);
        }
    
        
        
        public function mostra($id) {
            $produto = Produto::find($id);
        
            if (!$produto) {
                abort(404, "Esse produto não existe");
            }
        
            return view('produto.detalhes', compact('produto'));
        }
        

        public function novo(){

            return view('produto.formulario');

        }
        
        public function adiciona(){
            $params = request()->all();
            $produto = new Produto($params);
            $produto->save();
            $nome = $produto->nome;
            

            $produtos = DB :: select('select * from produtos');

            return view('produto.adicionado')->with('nome', $nome);
            
        }

       
        
}
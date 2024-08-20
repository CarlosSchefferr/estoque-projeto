<?php 

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Support\Facades\DB;


   

    class ProdutoController extends Controller
    {
        public function lista()
        {
            $produtos = Produto::all();
    
            return view('listagem')->with('produtos', $produtos);
        }
    
        
        
        public function mostra($id) {
            $produto = Produto::find($id);
        
            if (!$produto) {
                abort(404, "Esse produto não existe");
            }
        
            return view('detalhes', compact('produto'));
        }
        
        
        

       
        
}
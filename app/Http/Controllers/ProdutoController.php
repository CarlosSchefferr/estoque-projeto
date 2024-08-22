<?php 

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutosRequest;




   

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
        
        public function adiciona(ProdutosRequest $request){
            $params = request()->all();
            $produto = new Produto($params);
            $produto->save();
            $nome = $produto->nome;
            

            
            $produtos = DB :: select('select * from produtos');

            return view('produto.adicionado')->with('nome', $nome);
            
        }

        public function remove($id){
            $produto = Produto::find($id);
            $produto->delete();
            return redirect()->route('produto.lista');
        }

        public function edita($id){
            $produto = Produto::find($id);
            
            if (!$produto) {
                return redirect()->route('produtos.index')->with('error', 'Produto não encontrado.');
            }

            return view('produto.edita', compact('produto'));

        }

        public function atualiza(Request $request){

            $validatedData = $request->validate([
                'id' => 'required|integer|exists:produtos,id',
                'nome' => 'required|max:255',
                'descricao' => 'required',
                'valor' => 'required|numeric',
                'quantidade' => 'required|numeric'
            ]);
            
            $produto = Produto::find($validatedData['id']);

            if (!$produto) {
                return redirect()->route('produto.lista')->withErrors('Produto não encontrado.');
            }


            $produto->nome = $validatedData['nome'];
            $produto->descricao = $validatedData['descricao'];
            $produto->valor = $validatedData['valor'];
            $produto->quantidade = $validatedData['quantidade'];
            $produto->save();

            return redirect()->route('produto.lista', ['id' => $produto->id])
                              ->with('success', 'Produto atualizado com sucesso.');


        }

    
     
}



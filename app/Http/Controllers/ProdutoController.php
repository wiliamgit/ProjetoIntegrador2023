<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ProdutoController extends Controller
{
    //index
    public function index () {

    return view('cadastroProduto');
    }
 
    public function listarProdutos () {
  
        $produtos = Produto::all();
        return view('produtolistar',compact('produtos'));
   
    }
 
    public function store(Request $request)
    {
       //verificar se esses campos tem no banco de dados
    //     $produtoExistente = Produto::where('nome_cd', $request->input('nome_cd'))
    //    ->where('codigo_barras', $request->input('codigo_barras'))
    //   ->where('foto_cd', $request->input('foto_cd'))
    //   ->where('descricao_cd', $request->input('descricao_cd'))
    //   ->first();

    //   if ($produtoExistente) {
    //     // Produto com os mesmos valores já existe
    //     // Você pode lidar com isso de acordo com os requisitos da sua aplicação
    //     return redirect()->route('produtoView')->with('error', 'Produto com esses detalhes já cadastrado.');
    // }
  
        

        //Via postman foi
        // dd($request);
        $validator = $request->validate(
        [
            //validar esses campos no banco de dados
            'nome_cd' => 'required',
           'codigo_barras' => 'required',
        //    'foto_cd' => 'required',
           'quantidade' =>'required','numeric',
           'tipo' => ['required', Rule::in(['entrada', 'saida'])],
            'data' => 'required',
           'descricao_cd' => 'required'

        ]);
        //criar os produtos no banco de dados
        //Produto
        $produto = Produto::create([
            'nome_cd' => $request->input('nome_cd'),
            'codigo_barras' => $request->input('codigo_barras'),
            // 'foto_cd' => $request->input('foto_cd'),
            'descricao_cd' => $request->input('descricao_cd'),
            'quantidade' => $request->input('quantidade'),
            'tipo' => $request->input('tipo'),
             'data' => $request->input('data'),
        ]);  

        return view('dasboardauth');
    }
    //deletar Registros
    public function destroyProduto($id)
    {
    $cliente = Produto::find($id);
    $cliente->delete();
    return redirect('listarprodutos')->with('success', 'Deletado com sucesso.');
    }

    public function viewproduto (Produto $id) {

        return view('editarproduto',['produto'=>
        $id]);

    }

    //Editar Produto
    public function atulizarProduto(Produto $id, Request $request)
    {
            $validator = $request->validate(
            [
                //validar esses campos no banco de dados
               'nome_cd' => 'required',
               'codigo_barras' => 'required',
            //    'foto_cd' => 'required',
               'quantidade' =>'required','numeric',
               'tipo' => ['required', Rule::in(['entrada', 'saida'])],
                'data' => 'required',
               'descricao_cd' => 'required'
    
            ]);
        //Prencher os campos validados            
        $id->fill($validator);
        $id->save();
        //Caso der  certo o sistema ira retornar para view mostrando uma mensagem "Produto Alterado Com Sucesso"
        return  Redirect::route('listarprodutos')->with('success', 'Produto Alterado Com Sucesso');
        
    }

    
    
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegistrarUsuarios;
use App\Http\Controllers\ProdutoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/home', function () {
// //     return view('welcome');
// }); 
//REGISTRAR USUARIO
Route::post('/regisStore', [RegistrarUsuarios::class, 'store']) ->name('regisStore');
Route::get('/registrarindex', [RegistrarUsuarios::class, 'index']) ->name('registrarindex');
//LOGIN
Route::get('/loginIndex', function(){return view('login');})->name('loginIndex');
Route::post('/loginUser', [loginController::class, 'store']) ->name('loginUser');
//CADASTRAR PRODUTO
//Route::get('/produtoindex', [ProdutoController::class, 'index']);
Route::get('/produtoView', function() {return view('cadastroProduto');})-> name('produtoView');
Route::post('/cadastrarProduto', [ProdutoController::class, 'store'])-> name('cadastrarProduto');
//BOTOES PARA O SITE
Route::get('/', function() {return view('welcome');}) -> name('welcome');//essa aqui
Route::get('/oqueFazemos', function() {return view('oqueFazemos');})-> name('oquefazemos');
Route::get('/servicos', function() {return view('servicos');}) -> name('servicos');
Route::get('/sobreNos', function(){return view('sobreNos');}) -> name('sobrenos');
//ListarProdutos
Route::get('/listarprodutos', [ProdutoController::class, 'listarProdutos'])->name('listarprodutos');
//Pagina quando o usuario for autentficado
Route::get('/dasboardauth', function(){return view('dasboardauth');})->name('dasboardauth');
//Deletar Produtos
Route::delete('/produto/{id}', [ProdutoController::class, 'destroyProduto'])->name('/produto/{id}');
//Atualizar Dados
Route::put('/produto-atualizar/{id}', [ProdutoController::class, 'atulizarProduto'])->name('produto_atualizar');
Route::get('/Tela-produto-atualizar/{id}', [ProdutoController::class, 'viewproduto'])->name('Tela-produto-atualizar');


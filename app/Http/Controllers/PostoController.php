<?php

namespace App\Http\Controllers;
use App\Author;
use DB;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;


class PostoController extends Controller
{

    public function show(Request $request) {

        $id_posto = $request->input('id_posto');
        /*$nome_posto = $request->input('nome_posto');*/

	return response()->json([ 'Olha o ID do posto' => $id_posto ]);
	/*return response()->json([ 'Olha o Nome do posto' => $nome_posto ]);	*/
	
    }
    
    public function post(Request $resposta){
     
        $id_post = $resposta->input('id_post');
        
        return response()->json(['Olha o ID do posto com Medoto post' => $id_post]);
    }
    public function mostrar_todos(){
    {
        return response()->json(Author::all());
    }
    
    }
    public function mostrar_id(Request $results, $roles)
    {
      $id_posto = $results->input('id_posto');
       
      //$results = DB::select('select * from authors where id = ?', [$id_posto]);
      $results = DB::table('authors')->find($id_posto);
         return response()->json($results);
    }
    
    public function criar_registro(Request $criar_novo_registro)
    {      
        
      // dd($comando_sql->all());
       $data = $criar_novo_registro->input();
       DB::table('authors')->insert($data);
       return 'OK';
      
  }
  public function atualizar_registro(Request $atualizar_registro)
  {
      $atualizar = $atualizar_registro->input();
      DB::table('authors')->update($atualizar);
  }

  public function deletar_registro(Request $deletar_registro){
      
      $deletar = $deletar_registro->input();
      DB::table('authors')->delete($deletar);
  }

         
    
}
<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Publicacao;
use App\Cargo;


class SiteController extends Controller
{
    
  public function perfil() {
    if(Gate::denies('perfil-view')){
      abort(403,"Não autorizado!");
    }
    $user = Auth()->user();

    $caminhos = [
    ['url'=>'/admin','titulo'=>'Painel Principal'],
    ['url'=>'','titulo'=>'Perfil']
    ];

    return view('dashboard.perfil.index',compact('user','caminhos'));

  }

  public function perfilUpdate(Request $request){
    if(Gate::denies('perfil-view')){
      abort(403,"Não autorizado!");
    }
    $user = Auth()->user();
    
    $this->validate($request,[
      'name'=>'required',
      'email'=>'required|email|unique:users,email,'.$user->id
    ]);

    $dados = $request->all();

    if(isset($dados['password']) && $dados['password'] != ''){
      $this->validate($request, [
        'password' => 'required|min:6|confirmed',
      ]);
      $dados['password'] = bcrypt($dados['password']);
    }else{
      unset($dados['password']);
    }

    $user->update($dados);

    return redirect()->route('perfil.index')->with('status', 'Perfil atualizado!');
  }

  
}

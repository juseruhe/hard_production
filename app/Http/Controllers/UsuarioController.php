<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;

class UsuarioController extends Controller
{
    
    public function index(){

        $usuarios = Usuario::all();

        return view('usuario.index',compact('usuarios'));
    }


    public function create(){

        return view('usuario.create');
    }

    public function store(Request $request){

        Usuario::create($request->all());


        return redirect()->route('usuario.index')->with('mensaje','Creado Correctamente');
    }

    public function show($id){

        $usuario = Usuario::find($id)->where('id',$id)->first();

        return view('usuario.show',compact('usuario'));
    }

    public function edit($id){

        $usuario = Usuario::find($id)->where('id',$id)->first();

        return view('usuario.edit',compact('usuario'));
    }

    public function update(Request $request,$id){

        Usuario::find($id)->update($request->all());

        return redirect()->route('usuario.show',$id);
    }

    public function destroy($id){

        Usuario::find($id)->where('id',$id)->delete();

        return redirect()->route('usuario.index')->with('mensaje','Eliminado Correctamente');


    }
}

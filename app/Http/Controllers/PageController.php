<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;


class PageController extends Controller
{
      public function ficha(){

        $dato = App\Models\Usuario::all();
        return view('ficha', compact('dato'));

    }


    public function detalle($id){
        $nota = App\Models\Usuario::findOrfail($id);
        return view('nota.detalle', compact('nota') );

    }
    public function crear (request $request){
        //return $request->all();
        $registronuevo = new App\Models\Usuario;
        $registronuevo ->nombre =$request->nombre;
        $registronuevo ->apellido =$request->apellido;
        $registronuevo ->edad =$request->edad;
        $registronuevo ->rut =$request->rut;
        $registronuevo ->email =$request->email;
        $registronuevo ->telefono =$request->telefono;
        $registronuevo ->fechadenacimiento =$request->fechadenacimiento;
        $registronuevo ->sexo =$request->sexo;
        $registronuevo ->direccion =$request->direccion;
        $registronuevo ->comuna =$request->comuna;
        $registronuevo ->password =$request->password;

        $registronuevo-> save();

        return back()->with('mensaje', 'Usuario Registrado');
    }

    public function dato(){

        $datos = App\Models\Especialidad::all();
        return view('especialidad', compact('datos'));
        dd($datos);
    }

    public function dato2($id){
        $notas = App\Models\Especialidad::findOrfail($id);
        return view('nota.especial', compact('notas'));
    }

    public function editar($id){
        $nota2 = App\Models\Especialidad::findOrfail($id);
       return view('nota.editar', compact('nota2'));
    }

    public function update(Request $request, $id){
        $notaupdate= App\Models\Especialidad::findOrfail($id);
        $notaupdate->id = $request->id;
        $notaupdate->codigo = $request->codigo;
        $notaupdate->nombre = $request->nombre;
        $notaupdate->descripcion =$request->descripcion;

        $notaupdate->save();

        return back() ->with('mensaje', 'Especialidad actualizada');
    }

}

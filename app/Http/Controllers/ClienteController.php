<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{

    public function index(Request $request)
    {
    	$cli = Cliente::all();
    	return view ('cliente')        
    	->with('cli',$cli);        
    }
    public function crear()
    {
    	return view('crear');
    }
    
    public function guardar(Request $request)
    {   
        $id = $request->input('id');        
        $ex = DB::table('clientes')   //realizo la sentencia para saber si existe
        ->select('id')
        ->where('id', '=', $id)
        ->count();        

        $ex = DB::table('clientes')->where('id', $id)->exists();

        if ($ex == True)
        {
            $status = 'El relgistro ya existe, ingrese un nuevo registro';
            $clase = 'alert alert-danger';
            return redirect('cliente/crear')        
            ->with('status',$status)
            ->with('clase',$clase);            
        }elseif ($ex == False) {
            $cli = new Cliente();
             $cli->create($request->all());
             $status = 'Registro almacenado con éxito';
             $clase = 'alert alert-success';
             return redirect('cliente')        
             ->with('status',$status)
             ->with('clase',$clase);
        }
    }   
    public function del($id)
    {                
        Cliente::destroy($id);     
        $status = 'Registro borrado con éxito';   
        $clase = 'alert alert-danger';        
        return redirect('cliente')
        ->with('status',$status)
        ->with('clase',$clase);; 
    }
    public function PreEdit($id)
    {
        $cli = Cliente::all()->where('id', $id)->first();                
        return view('form_edit')
        ->with('cli',$cli);        
    }
    public function Edit(Request $request, $id)
    {
        $nuevo_id=$request->input('id');
        $nuevo_first_name=$request->input('first_name');
        $nuevo_last_name=$request->input('last_name');
        $nuevo_email=$request->input('email');
        $cli=CLiente::find($id);

        $cli->id=$nuevo_id;
        $cli->first_name=$nuevo_first_name;
        $cli->last_name=$nuevo_last_name;
        $cli->email=$nuevo_email;
        $cli->save();
        
        $status = "Registro actualizado con éxito";
        $clase = 'alert alert-primary';

        return redirect('cliente')
        ->with('status',$status)
        ->with('clase',$clase);
    }
}

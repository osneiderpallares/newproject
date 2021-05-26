<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Carbon\Carbon;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        $cli = new Cliente();
        $cli->create($request->all());  
        
        $cli = Cliente::all();

    	return redirect('cliente')
    	->with('cli',$cli);
    }   
    public function del($id)
    {        
        $cli=Cliente::find($id);
        $cli->delete();        
        $cli = Cliente::all();
        return redirect('cliente')
        ->with('cli',$cli);
    }
    public function PreEdit($id)
    {
        $cli = CLiente::all()->where('id', $id)->first();        
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
        return redirect('cliente');
    }
}

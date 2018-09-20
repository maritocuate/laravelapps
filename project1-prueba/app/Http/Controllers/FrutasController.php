<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrutasController extends Controller
{
    //accion que devuelva una vista
    public function index(){
    	return view('frutas.index')
    		   ->with('frutas', array('naranja', 'pera', 'sandia'));
    }

    public function getNaranjas(){
    	return 'accion de naranjas';
    }

    public function getPeras(){
    	return 'accion de peras';
    }

    public function recibirFormulario(Request $request){
    	$data = $request;
    	return $data['nombre'];
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\DAO\ElectivaDAO;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Electiva;
use App\Http\Requests\Electivas\ElectivaRC;
use App\Http\Requests\Electivas\ElectivaAct;

class ElectivaController extends Controller
{
    public function listar(){
    	$objElectivasDAO = new ElectivaDAO();
    	$electivas = $objElectivasDAO->obtenerElectivas();
    	return view('dashboard.listarElectivas')->with('electivas',$electivas);
    }

    public function edit(Request $request){
        $objElectivasDAO = new ElectivaDAO();
        $electiva= $objElectivasDAO->obtenerElectiva($request->codigo);
        return view('dashboard.editarElectiva')->with('electiva',$electiva);
    }

    public function update(ElectivaAct $request){
        $objElectivasDAO = new ElectivaDAO();
        $result = $objElectivasDAO->actualizarElectiva($request);
        if($result){
            flash('Se actualizo la electiva')->success();
            return redirect()->route('listarElectivas');
        }
        else{
            $mensaje = "Error: No se actualizo la Electiva";
            //TODO: ManejarError;
        }
      }

    public function delete(Request $request){
    	$objElectivasDAO = new ElectivaDAO();
    	$result = $objElectivasDAO->eliminarElectiva($request->codigo);
    	if($result){
    		return redirect()->route('listarElectivas');
    	}
    	else{
    		$mensaje = "Error: No se elimino la Electiva";
    		//TODO: ManejarError;
    	}
    }
    public function create(ElectivaRC $request){
      $objElectivasDAO = new ElectivaDAO();
      $objElectiva = new Electiva($request->all());
      $result=$objElectivasDAO->crearElectiva($objElectiva);
      if($result==true){
          flash('se agrego la electiva '.$objElectiva->nombre.' Electiva agregada')->success();
          return redirect()->route('crearElectiva');
      }else{
          flash('No se pudo agregar '.$objDocente->nombre.'electiva no  agregado')->success();
          return redirect()->route('crearElectiva');
      }
      //hacer el flash
    }

}

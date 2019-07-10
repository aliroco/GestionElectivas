<?php

namespace App\DAO;

use App\Electiva;

class ElectivaDAO implements IElectivaDAO
{
	public function obtenerElectivas(){
		$arrayElectivas = Electiva::all();
		return $arrayElectivas;
	}

	public function crearElectiva($electiva){
		if($electiva->save()){
			return true;
		}
		return false;
	}

	public function obtenerElectiva($codigo){
		$electiva = Electiva::find($codigo);
		return $electiva;
	}
	public function actualizarElectiva($request){
		$electiva = $this->obtenerElectiva($request->codigo);
		if($electiva != null){
			$electiva->fill($request->all());
			$electiva->save();
			return true;
		}
		return false;
	}
	public function eliminarElectiva($codigo){
		$electiva = $this->obtenerElectiva($codigo);
		if($electiva != null){
			$electiva->delete();
			return true;
		}
		return false;
	}
}

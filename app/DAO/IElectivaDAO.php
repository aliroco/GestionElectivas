<?php
namespace App\DAO;

interface IElectivaDAO{
	public function crearElectiva($electiva);
	public function obtenerElectivas();
	public function obtenerElectiva($codigo);
	public function actualizarElectiva($electiva);
	public function eliminarElectiva($codigo);
}
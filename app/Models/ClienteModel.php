<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model
{
    public $idPrimaria;
    public $nombre;
    public $activo;
    public $correo;
    public $zip;
    public $telefono1;
    public $telefono2;
    public $pais;
    public $direccion;

    //($_idPrimaria, $_nombre, $_activo, $_correo, $_zip, $_telefono1,$_telefono2,$_pais,$_direccion)
    public function get_cliente($id){
        $this->$idPrimaria = 1;
        $this->$nombre = "Adrian Vela";
        $this->$activo = 1;
        $this->$correo = "pedro.velacc@gmail.com";
        $this->$zip = 10132;
        $this->$telefono1 = 986141854;
        $this->$telefono2 = 111111111;
        $this->$pais = "Peru";
        $this->$direccion = "Av. ABC";

        return $this;
    }
    

}



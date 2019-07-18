<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model {

    public function getProductos(){
        $this->db->select('id, nombre, marca,precio,cantidad , Imagen');
        $this->db->from("producto");
        //$this->db->where("");
        $resultados = $this->db->get();
        return $resultados->result();
    }
    public function save($data){
        return $this->db->insert("producto", $data);
    }
}

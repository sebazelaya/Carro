<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
    public function login($username, $password){
        $this->db->where("Usuario", $username);
        $this->db->where("password", $password);

        $resultados = $this->db->get("personas");
        if($resultados->num_rows() > 0){
            return $resultados->row();
        }
        else{
            return false;
        }
    }
}

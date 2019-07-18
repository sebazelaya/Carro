<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detalles extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//session_start();
		$this->load->model('Querys');
		$this->load->library('encryption');
  }
  public function producto($id){
    $data['Producto'] = $this->Querys->getProducto($id);
    $data['listaTodos'] = $this->Querys->getCatalogo('producto');
    $this->load->view('header');
		$this->load->view('carrito');
		$this->load->view('detalles_productos',$data);
		$this->load->view('footer');
  }

}

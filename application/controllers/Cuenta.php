<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuenta extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//session_start();
		$this->load->model('Querys');
		$this->load->library('encryption');

  }
  	public function index()
	{
		$data['Productos']= $this->Querys->getCatalogo('producto');
		$this->load->view('header');
		$this->load->view('carrito');
		$this->load->view('cuenta',$data);
		$this->load->view('footer');

    }
}

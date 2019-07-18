<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Completado extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// session_start();
		$this->load->model('Querys');
		$this->load->library('encryption');
		$this->load->library('session');

  }
  	public function index()
	{
		//$nombre=($this->session->$_POST('post'));
		$data['listaTodos'] = $this->Querys->getCatalogo('producto');
		//if($this->Querys->subirDatos2()){
		$this->load->view('header');
		$this->load->view('carrito');
		$this->load->view('completado');
		$this->load->view('footer');
  	//}else{
    //redirect("index.php/carro",auto);
	//	}
	}
	public function subirDatos2(){
		$total=0;
		foreach($_SESSION['carro'] as $indice=>$producto){
			$total= $total + ($producto['precio']*$producto['cantidad']);
		}
		//$tiempo=localtime();
		//date_default_timezone_set(localtime());
		date_default_timezone_set('Chile/Continental');
		$Id=$this->input->POST('NULL');
		$Region=$this->input->POST("c_region");
		$Nombres=$this->input->POST("c_nombres");
		$Apellido=$this->input->POST("c_lname");
		$claveT=($SID=session_id());
		$direccion=$this->input->POST("c_address");
		$Fecha= date('Y/m/d/H/i/s');
		//$Fecha= date_default_timezone_get();
		$email=$this->input->POST("c_email_address");
		$enviado="Enviado";

		$datos= array('ID'=>$Id, 'ClaveTransaccion'=>$claveT,'Region'=>$Region,'Nombre'=>$Nombres,'Apellido'=>$Apellido, 'Ciudad'=>$direccion, 'Fecha'=>$Fecha, 'Correo'=>$email, 'Total'=>$total, 'estados'=>$enviado);


		$this->Querys->subirDatos2($datos);
		$this->load->view('header');
		$this->load->view('carrito');
		$this->load->view('completado');
		$this->load->view('footer');
	}
}

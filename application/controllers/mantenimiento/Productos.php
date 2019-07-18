<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
    public function __construct(){

        parent::__construct();
        $this->load->model("Productos_model");
    }

	public function index()
	{
        $data = array(
            'productos' => $this->Productos_model->getProductos(),
        );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin\productos\list',$data);
		$this->load->view('layouts/footer');

	}
    public function add(){
        $data = array(
            "productos" => $this->Productos_model->getProductos()
        );
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/productos/add', $data);
		$this->load->view('layouts/footer');
    }
    public function store(){
        $Nombre=$this->input->post("Nombre");
        $Descripcion=$this->input->post("Descripcion");
        $Precio=$this->input->post("Precio");
        $stock=$this->input->post("stock");
        $Imagen=$this->input->post("Imagen");

        $data = array(
            'Nombre' => $Nombre,
            'Descripcion' => $Descripcion,
            'Precio' => $Precio,
            'stock' => $stock,
            'Imagen' => $Imagen,
        );
        if ($this->Productos_model->save($data)){
            redirect(base_url()."index.php/mantenimiento/productos");
        }
        else{
            $this->session->set_flashdata("error","No se pudo guardar la informacion");
            redirect(base_url()."index.php/mantenimiento/productos/add");
        }
    }
    public function delete($ID){
        $data=array('estado'=>"0");
        $this->Productos_model->update($ID,$data);
        redirect(base_url()."index.php/mantenimiento/productos");
    }
}

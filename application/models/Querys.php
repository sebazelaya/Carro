<?php
class Querys extends CI_Model {
 function __construct(){
    parent::__construct();
    $this->load->database();
   }

    public function getProducto($id){
        $sql = "SELECT * FROM `producto` WHERE `ID`='$id'";
        $query = $this->db->query($sql);
        return $query;
    }

    public function getCatalogo($origen){
        $sql = "SELECT * FROM `$origen` WHERE 1";
        $query = $this->db->query($sql);
        return $query;
    }/*
    public function subirDatos(){
      if($_POST){
          $total = 0;
          $SID=session_id();
          $Correo=$_POST['c_email_address'];
          $Ciudad=$_POST['c_country'];

          foreach($_SESSION['carro'] as $indice=>$producto){
              $total= $total + ($producto['Precio']*$producto['Cantidad']);
          }
          $sentencia= "INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, 'Ciudad', `Fecha`, `Correo`, `Total`, `status`)
VALUES (null,'$SID', '$Ciudad', NOW(), '$Correo', '$total','Enviado')";
            }
    */
    public function subirDatos2($datos){

		$this->db->insert('ventas', $datos);


 //       $this->db->insert('tblventas', $datos);
    }
    }


?>

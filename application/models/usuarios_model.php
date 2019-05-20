<?php
//extendemos CI_Model
class usuarios_model extends CI_Model{
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
         
        //cargamos la base de datos
        $this->load->database();
    }
     
    public function ver(){
        //Hacemos una consulta
        $consulta=$this->db->query("SELECT * FROM usuarios;");
        //otra manera de consulta
        //$consulta=$this->db->get('usuarios');
         
        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }
 
 
}
?>

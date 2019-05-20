<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//extendemos CI_Controller
class usuarios_controller extends CI_Controller{
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
         
        //llamo al helper url
        $this->load->helper("url"); 
         
        //llamo o incluyo el modelo
        $this->load->model("usuarios_model");
    }
     
    //controlador index
    public function index(){
         
        //array asociativo con la llamada al metodo
        //del modelo
        $usuarios["verv"]=$this->usuarios_model->ver();
         
        //cargo la vista y le paso los datos
        $this->load->view("usuarios_view",$usuarios);
    }
     
}
?>

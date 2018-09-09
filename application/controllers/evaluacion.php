<?php

class evaluacion extends CI_Controller{
   public function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
//        if (!$this->session->userdata('id_usuario')) {
//            redirect('autentificacion');
//        }
        $this->load->model("evaluacion_model");
    }
    public function examinar() {
        $datos['DATOS']= $this->evaluacion_model->candidato($id);
        
        
            
        $this->load->view('F011/examinar_view.php',$datos);
    }
    
    public function candidato() {
       
        
         $datos['ESTADO']= $this->evaluacion_model->candidatoTodos();
            
        $this->load->view('F011/estados.php',$datos);
    }
}

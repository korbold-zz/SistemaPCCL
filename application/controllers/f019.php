<?php


class f019 extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
        $this->load->library('grocery_CRUD');
        $this->load->model('f019_model');
        $this->load->model('usuarios_model');
//        if (!$this->session->userdata('id_usuario')) {
//            redirect('autentificacion');
//        }
    }
    
    public function personas() {
        $datos['PERSONAS'] = $this->usuarios_model->get_personas2('7');
        $this->load->view('f019/tabla_e/expedientes_view.php',$datos);
    }
    
    
    public function expediente($id_persona) {
        
        $datos['PERSONAS'] = $this->f019_model->getPersonas($id_persona);
          $datos['ID_PERSONA'] = $id_persona;
           $matriz = array();
        for ($i = 0; $i <= 10; $i++) {
            $matriz[$i] = array( "", "","");
        }
        $datos['EXISTE'] = "NO";
        $result = $this->f019_model->getExpediente();
        if ($result && count($result) > 0) {
            $datos['EXISTE'] = "SI";
            $matriz = array();
            for ($i = 0; $i <=10; $i++) {
                $val = $result[$i];
                $matriz[$i] = array( $val->ITEM,$val->CUMPLE,$val->OBSERVACION);
            }
            
        }
        $datos['F19'] = $matriz;
        $this->load->view('f019/expediente.php',$datos);
        
    }
    
      public function guardarFormulario() {
        $existe = $_REQUEST["existe"];
        $id_persona = $_REQUEST["id_persona"];
        

        if ($existe == "NO") {
            //ingresando datos generales
            for ($i = 0; $i <= 10; $i++) {
                $this->f019_model->insertar($id_persona, $_REQUEST["fila_$i" . "_0"], $_REQUEST["fila_$i" . "_1"], $_REQUEST["fila_$i" . "_2"]);
            }
            
        } else {
           

            //actualizando datos generales
            for ($i = 0; $i <= 10; $i++) {
                $this->f019_model->actualizar($id_persona, $_REQUEST["fila_$i" . "_0"], $_REQUEST["fila_$i" . "_1"], $_REQUEST["fila_$i" . "_2"]);
            }
            
            
        }
        redirect('f019/personas');
    }
   
    
}

<?php


class f021  extends CI_Controller{
  
    public function __construct() {
        parent::__construct();
        
        $this->load->library('grocery_CRUD');
        $this->load->model('f021_model');
        $this->load->model('usuarios_model');
        $this->load->model('evaluacion_model');
//        if (!$this->session->userdata('id_usuario')) {
//            redirect('autentificacion');
//        }
    }
    
    public function personas() {
        
        $datos['PERSONAS'] = $this->usuarios_model->get_personas3('6','NINGUNO');
        
        
        $this->load->view('f021/evaluacion',$datos);
    }
    public function evaluar($id) {
        $datos['ID_PERSONA'] = $id;
        $datos['EXISTE'] = "NO";
         $datos['V1']="";
                $datos['V2']="";
                $datos['V3']="";
                $datos['V4']="";
                $datos['V5']="";
                $datos['V6']="";
                $datos['V7']="";
                $datos['V8']="";
                $datos['V9']="";
         $dato = $this->f021_model->getEvaluacion($id);
        if ($dato) {
            $datos['EXISTE'] = "SI";
            foreach ($dato as $value) {
                $datos['V1']=$value->VALOR1;
                $datos['V2']=$value->VALOR2;
                $datos['V3']=$value->VALOR3;
                $datos['V4']=$value->VALOR4;
                $datos['V5']=$value->VALOR5;
                $datos['V6']=$value->VALOR6;
                $datos['V7']=$value->VALOR7;
                $datos['V8']=$value->VALOR8;
                $datos['V9']=$value->VALOR9;
            }
            
        }  
        $datos['PERSONAS'] = $this->usuarios_model->get_personas($id);
        $this->load->view('f021/f021_view',$datos);
    }
    
    public function guardar() {
       $existe = $_REQUEST['existe'];
        if ($existe=="SI") {
            $this->f021_model->actualizar($_REQUEST['id_persona'],$_REQUEST['1'],$_REQUEST['2']
                ,$_REQUEST['3'],$_REQUEST['4'],$_REQUEST['5'],$_REQUEST['6'],$_REQUEST['7']
                ,$_REQUEST['8'],$_REQUEST['9'],$_REQUEST['total']);
            
        }  else {
            $this->f021_model->insertar($_REQUEST['id_persona'],$_REQUEST['1'],$_REQUEST['2']
                ,$_REQUEST['3'],$_REQUEST['4'],$_REQUEST['5'],$_REQUEST['6'],$_REQUEST['7']
                ,$_REQUEST['8'],$_REQUEST['9'],$_REQUEST['total']);
        }
       $total= $_REQUEST['total'];
       if ($total >= 45) {
                    $this->evaluacion_model->actulizarEstado($_REQUEST['id_persona'], '7');
                }
        
        
        redirect('f021/personas');
    }
}

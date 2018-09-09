

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class menu extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        if (!$this->session->userdata('autentificado')) {
//            redirect("login");
//        }
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('parametros/_parametros_model');
        $this->load->model('usuario/usuario_model');
        $this->load->model('parametros/vacio_model');
        $this->load->model('login/login_model');
    }
     public function index() {
        //$this->load->helper('url');
        $this->load->view('menu_view');
    }
  

    public function usuario() {
        $datos = array();
        $this->_parametros_model->informacion($datos);
        $datos['titulo_pagina'] = "INICIO";
        $this->load->view('f015/question', $datos);
        
    }

    public function administrador() {
        $datos = array();
        $this->_parametros_model->informacion($datos);
        $datos['titulo_pagina'] = "INICIO";
        $this->load->view('vista_administrador', $datos);
        $this->load->view('template/pie', $datos);
    }

    public function prueba() {
        $prueba = $this->vacio_model->llena_tablasid('tab_evaluado', 'ID_USUARIO', $this->session->userdata('id'));
        $prueba = $prueba[0];
        $post_array = array();

        $post_array['FECHA_FIN'] = date("Y-m-d H:i:s");
        $post_array['ESTADO'] = 'F';


        $this->db->update('tab_evaluado', $post_array, array('ID_EVALUADO' => $prueba->ID_EVALUADO));
        $consulta = array();

        $consulta = $this->vacio_model->llena_tablasid('tab_evaluacion', 'ID_EVALUADO', $prueba->ID_EVALUADO);
        $i = 1;
        foreach ($consulta as $datos) {
            $post_array = array();

            $post_array['RESPUESTA'] = $_REQUEST[$i];
            $post_array['ESTADO'] = 'R';


            $this->db->update('tab_evaluacion', $post_array, array('ID_EVALUADO' => $prueba->ID_EVALUADO ,'ID_PREGUNTA'=>$datos->ID_PREGUNTA));
            $i++;
        }
      redirect("menu/usuario");

        
    }
public function p()
{
   $this->load->view(ex); 
}
}


<?php

class proceso extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        if (!$this->session->userdata('autentificado')) {
//            redirect("login");
//        }
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('parametros/_parametros_model');
        $this->load->model('parametros/vacio_model');
        $this->load->model('usuario/usuario_model');
        $this->load->library('grocery_CRUD');
        
    }

    public function enunciado() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_perfiles_pro_estados');

            $crud->set_subject('Perfil');
            $crud->display_as('NOMBRE_PERFIL_PRO_ESTADO', 'DESCRIPCION DEL PERFIL');
            $crud->required_fields('NOMBRE_PERFIL_PRO_ESTADO');
            $crud->columns('NOMBRE_PERFIL_PRO_ESTADO');
            $crud->add_action('Preguntas', '66', '6', '6', array($this, 'link_preguntas'));
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Administrar Roles";

            $this->_parametros_model->informacion($datos);
            $datos['TITULO_PAGINA'] = "PERFILES A EVALUAR";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function evaluador() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_evaluador');
            $crud->set_relation('ID_PERSONA', 'tab_personas', '{APELLIDO_PATERNO} {APELLIDO_MATERNO} {NOMBRES}');
            $crud->set_relation('ID_PERFIL_PRO_ESTADO', 'tab_perfiles_pro_estados', 'NOMBRE_PERFIL_PRO_ESTADO');
            $crud->set_subject('Evaluador');
            $crud->required_fields('ID_PERSONA', 'ID_PERFIL_PRO_ESTADO');
            $crud->display_as('ID_PERSONA', 'EVALUADOR');
            $crud->display_as('ID_PERFIL_PRO_ESTADO', 'PERFIL');

            $crud->columns('ID_PERSONA', 'ID_PERFIL_PRO_ESTADO');
            $output = $crud->render();
            $datos = (array) $output;
            $this->_parametros_model->informacion($datos);
            $datos['TITULO_PAGINA'] = "PERFILES A EVALUAR";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function link_preguntas($primarykey, $row) {
        return site_url('proceso/preguntas/' . $row->ID_PERFIL_PRO_ESTADO);
    }

    public function preguntas($ID_PERFIL_PRO_ESTADO) {
        if (isset($ID_PERFIL_PRO_ESTADO)) {
            $this->session->set_userdata('pregunta', $ID_PERFIL_PRO_ESTADO);
        } else {
            $ID_PERFIL_PRO_ESTADO = $this->session->userdata('pregunta');
        }

        $crud = new grocery_CRUD();
        $crud->set_table('tab_preguntas_bloquea');

        $crud->where('tab_preguntas_bloquea.ID_PERFIL_PRO_ESTADO', $ID_PERFIL_PRO_ESTADO);
        $crud->set_subject('Pregunta');
        $crud->field_type('ESTADO', 'dropdown', array('A' => 'ACTIVO', 'P' => 'PASIVO'));
        $crud->field_type('ID_PERFIL_PRO_ESTADO', 'hidden', $ID_PERFIL_PRO_ESTADO);
        $crud->field_type('BLOQUE', 'dropdown', array('A' => 'A', 'B' => 'B'));
        $crud->columns('DESCRIPCION_PREGUNTA', 'ESTADO', 'BLOQUE');
        $crud->required_fields('DESCRIPCION_PREGUNTA', 'ESTADO', 'BLOQUE');
        $crud->add_action('Respuestas', '66', '6', '6', array($this, 'link_respuestas'));
        $output = $crud->render();

        $datos = (array) $output;
        $this->_parametros_model->informacion($datos);
        $datos['TITULO_PAGINA'] = "Preguntas";
        $datos['PREGUNTA'] = $ID_PERFIL_PRO_ESTADO;
        $this->load->view('vista_preguntas.php', $datos);
    }

    public function link_respuestas($primarykey, $row) {
        return site_url('proceso/respuestas/' . $row->ID_PREGUNTA);
    }

    public function respuestas($ID_PREGUNTA) {

        $crud = new grocery_CRUD();
        $crud->set_table('tab_respuestas');

        $crud->where('tab_respuestas.ID_PREGUNTA', $ID_PREGUNTA);
        $crud->set_subject('Respuesta');
        $crud->field_type('CALIFICACION', 'dropdown', array('S' => 'SI', 'N' => 'NO'));
        $crud->field_type('ESTADO', 'dropdown', array('A' => 'ACTIVO', 'P' => 'PASIVO'));
        $crud->field_type('ID_PREGUNTA', 'hidden', $ID_PREGUNTA);
        $crud->columns('DESCRIPCION_RESPUESTA', 'CALIFICACION', 'ESTADO');
        $crud->required_fields('DESCRIPCION_RESPUESTA', 'CALIFICACION', 'ESTADO');

        $output = $crud->render();

        $datos = (array) $output;
        $this->_parametros_model->informacion($datos);
        $datos['TITULO_PAGINA'] = "Respuestas";
        $datos['PREGUNTA'] = $ID_PREGUNTA;
        $this->load->view('vista_respuestas.php', $datos);
    }

    public function evaluado() {

        $crud = new grocery_CRUD();
        $crud->set_table('tab_evaluado');
//$crud->set_relation('ID_USUARIO', 'tab_personas', '{APELLIDO_PATERNO} {APELLIDO_MATERNO} {NOMBRES}');

        $crud->set_relation('ID_PERFIL_PRO_ESTADO', 'tab_perfiles_pro_estados', 'NOMBRE_PERFIL_PRO_ESTADO');
        $crud->set_subject('Evaluado');
        $crud->required_fields('ID_USUARIO', 'ID_PERFIL_PRO_ESTADO');
       // $crud->unique_fields('ID_USUARIO', 'ID_PERFIL_PRO_ESTADO');
        $crud->display_as('ID_USUARIO', 'EVALUADOR');
        $crud->display_as('ID_PERFIL_PRO_ESTADO', 'PERFIL');
        $crud->field_type('FECHA', 'hidden', date("Y-m-d H:i:s"));
        $crud->field_type('FECHA_FIN', 'hidden', '');
        $crud->field_type('ESTADO', 'hidden', 'A');
        $crud->callback_after_insert(array($this, 'agregar_preguntas'));

        $tabla = "vista_usuario";
        $combo_agente = array();
        $combo_agente = $this->vacio_model->llena_tablas($tabla);


        foreach ($combo_agente as $lis) {

            $combo_agente[$lis->ID_USUARIO] = $lis->APELLIDO_PATERNO . ' ' . $lis->APELLIDO_MATERNO . ' ' . $lis->NOMBRES;
        }
        $crud->field_type('ID_USUARIO', 'dropdown', $combo_agente);
        $crud->columns('ID_USUARIO', 'ID_PERFIL_PRO_ESTADO', 'FECHA', 'ESTADO', 'FECHA_FIN');
        $tabla = "vista_preguntas";
        $combo = array();
        $combo = $this->vacio_model->llena_tablas($tabla);
        foreach ($combo as $lis) {


            $crud->set_relation('ID_PERFIL_PRO_ESTADO', 'tab_perfiles_pro_estados', 'NOMBRE_PERFIL_PRO_ESTADO', array('ID_PERFIL_PRO_ESTADO' => $lis->ID_PERFIL_PRO_ESTADO));
        }

$crud->unset_edit();
$crud->unset_delete();

        $output = $crud->render();
        $datos = (array) $output;
        $this->_parametros_model->informacion($datos);
        $datos['TITULO_PAGINA'] = "USUARIO A EVALUAR";
        $this->load->view('template_grocery.php', $datos);
    }

    public function agregar_preguntas($post_array, $primary_key) {

      $datos = $this->vacio_model->llena_tablasid('tab_evaluado', 'ID_EVALUADO', $primary_key);
        $datos = $datos[0];
       $p = $this->vacio_model->llena_tablasid('tab_preguntas_bloquea', 'ID_PERFIL_PRO_ESTADO', $datos->ID_PERFIL_PRO_ESTADO);
            foreach ($p as $c) {

                $datos1['FECHA_REGISTRO'] = date("Y-m-d H:i:s");
                $datos1['ID_PREGUNTA'] = $c->ID_PREGUNTA;
                $datos1['ID_EVALUADO'] = $primary_key;
                $datos1['ESTADO'] = 'A';

                $this->db->insert('tab_evaluacion', $datos1);
            }
        return true;
    }

}

<?php

class f009 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usuarios_model');
        $this->load->model('f009_model');
        $this->load->library('grocery_CRUD');
    }


    
    public function encunciado() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_certificacion');

            $crud->set_subject('Enunciado');

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Enunciado";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function detalle_encunciado() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_detalle_certificacion');
            $crud->display_as('ID_CERIFICACION', 'Enunciado');
            $crud->set_relation('ID_CERIFICACION', 'tab_certificacion', 'ASUNTO');


            $crud->set_subject('Detalles de la Certificacion');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Detalles de la Certificacion";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function curso() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_curso');
            $crud->display_as('ID_DETALLE_CERTIFICACION', 'Enunciado');
            $crud->set_relation('ID_DETALLE_CERTIFICACION', 'tab_certificacion', 'ASUNTO');


            $crud->set_subject('Detalles de la Certificacion');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Detalles de la Certificacion";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function detalle_certificado() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_detalle__cert');
            $crud->display_as('ID_DETALLE_CERTIFICACION', 'Enunciado');
            $crud->set_relation('ID_DETALLE_CERTIFICACION', 'tab_certificacion', 'ASUNTO');
            $crud->display_as('ID_CURSO', 'Horas');
            $crud->set_relation('ID_CURSO', 'tab_curso', '{fecha} {duracion}');
            $crud->display_as('ID_PERSONA', 'PERSONA');
            $crud->set_relation('ID_PERSONA', 'tab_personas', '{cedula} {nombres}  {apellido_paterno} {apellido_materno} ');


            $crud->set_subject('Detalles de la Certificación');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Detalles de la Certificación";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    
    public function reportes() {
         $dato['DETALLE'] = $this->f009_model->detalle_reporte();
         $this->load->view('f009/f009_view.php',$dato);
    }
     
    

}

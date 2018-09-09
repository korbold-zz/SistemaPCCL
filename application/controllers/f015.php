<?php

class f015 extends CI_Controller {

    public function __construct() {
        
        parent::__construct();
        $this->load->model("hoja_model");
        $this->load->model("evaluacion_model");

        $this->load->helper('date');
        $this->load->library('grocery_CRUD');
    }

    public function evaluacion() {
        $data['PERSONAS'] = $this->hoja_model->get_estado_persona();
        $this->load->view('f011/estados.php', $data);
    }

    public function encunciado() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_enunciado_eva_examinador');

            $crud->set_subject('Enunciado');

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Enunciado";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function respuestas() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_exa_eva_respuestas_multiples');
            $crud->display_as('ID_ENUNCIADO_EVA_EXAMINADOR', 'ENUNCIADO');
            $crud->set_relation('ID_ENUNCIADO_EVA_EXAMINADOR', 'Tab_enunciado_eva_examinador', 'NOMBRE_ENUNCIADO');
            $crud->display_as('ID_EVA_EXA_ESTADO_RESPUESTA', 'ESTADO');
            $crud->set_relation('ID_EVA_EXA_ESTADO_RESPUESTA', 'Tab_eva_exa_estado_respuestas', 'ESTADO');
            $crud->display_as('ID_DENOMINACION_CATALOGO_PERF_PRO', 'PERFIL');
            $crud->set_relation('ID_DENOMINACION_CATALOGO_PERF_PRO', 'Tab_denominacion_catalogo_perf_pro', 'NOMBRE_DENOMINACION_CATALOGO_PERF_PRO');

            $crud->set_subject('Respuesta');

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Respuesta";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function respuestas_criterio() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_eva_exa_preguntas_criterio');
            $crud->display_as('ID_ENUNCIADO_EVA_EXAMINADOR', 'ENUNCIADO');
            $crud->set_relation('ID_ENUNCIADO_EVA_EXAMINADOR', 'Tab_enunciado_eva_examinador', 'NOMBRE_ENUNCIADO');
            $crud->display_as('ID_EVA_EXA_ESTADO_RESPUESTA', 'ESTADO');
            $crud->set_relation('ID_EVA_EXA_ESTADO_RESPUESTA', 'Tab_eva_exa_estado_respuestas', 'ESTADO');
            $crud->display_as('ID_DENOMINACION_CATALOGO_PERF_PRO', 'PERFIL');
            $crud->set_relation('ID_DENOMINACION_CATALOGO_PERF_PRO', 'Tab_denominacion_catalogo_perf_pro', 'NOMBRE_DENOMINACION_CATALOGO_PERF_PRO');

            $crud->set_subject('Respuesta');

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Respuesta";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

}

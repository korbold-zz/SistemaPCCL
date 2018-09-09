<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Evaluacion_examinador
 *
 * @author José
 */
class Evaluacion_examinador extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->load->model('evaluacion_examinadores_model');
    }

    public function perfiles() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_perfiles_pro_estados');
           
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Perfiles";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function perfiles_examinadores() {
        $datos['TITULO_PAGINA'] = "Preguntas de esquemas de certificación";
        $datos['PERFILES'] = $this->evaluacion_examinadores_model->getPerfiles();
        $this->load->view('f015/perfiles_list', $datos);
    }

    public function preguntas_esquemas($id_perfil) {
        $perfil = $this->evaluacion_examinadores_model->getPerfiles($id_perfil);
        $perfil = $perfil[0];
        try {
            $crud = new grocery_CRUD();
            $crud->where('ID_PERFIL_PRO_ESTADO', $id_perfil);
            $crud->set_table('tab_preguntas_esquemas_certificacion');
            $crud->columns('DESCRIPCION_PREGUNTA', 'RESPUESTA_CORRECTA', 'VALOR_MAXIMO', 'NRO_PREGUNTA', 'ESTADO');

            $crud->change_field_type('ID_PERFIL_PRO_ESTADO', 'hidden', $id_perfil);
            $crud->field_type('RESPUESTA_CORRECTA', 'dropdown', array('A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D'));
            $crud->field_type('ESTADO', 'dropdown', array('AC' => 'ACTIVO', 'PA' => 'PASIVO'));

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Preguntas de esquemas de certificación";
            $datos['PERFIL'] = $perfil;
            $this->load->view('f015/preguntas_view', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function preguntas_procedimientos($id_perfil) {
        $perfil = $this->evaluacion_examinadores_model->getPerfiles($id_perfil);
        $perfil = $perfil[0];
        try {
            $crud = new grocery_CRUD();
            $crud->where('ID_PERFIL_PRO_ESTADO', $id_perfil);
            $crud->set_table('tab_preguntas_procedimientos_documentos');
            $crud->columns('DESCRIPCION_PREGUNTA', 'VALOR_MAXIMO', 'NRO_PREGUNTA', 'ESTADO');

            $crud->change_field_type('ID_PERFIL_PRO_ESTADO', 'hidden', $id_perfil);
            $crud->field_type('ESTADO', 'dropdown', array('AC' => 'ACTIVO', 'PA' => 'PASIVO'));

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Preguntas de Procedimientos de los exámenes y documentos";
            $datos['PERFIL'] = $perfil;
            $this->load->view('f015/preguntas_view', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function registro_examinadores() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_evaluacion_examinadores');

            $crud->columns('ID_PERSONA', 'FECHA_EVALUACION', 'DURACION_HORAS', 'ID_PERFIL_PRO_ESTADO', 'ID_PERSONA_EXAMINADOR');

            $crud->set_subject('Evaluación Examinadores');

            $crud->display_as('ID_PERSONA', 'Persona');
            $crud->set_relation('ID_PERSONA', 'tab_personas', '{APELLIDO_PATERNO} {APELLIDO_MATERNO} {NOMBRES}');

            $crud->display_as('ID_PERFIL_PRO_ESTADO', 'Pefil');
            $crud->set_relation('ID_PERFIL_PRO_ESTADO', 'tab_perfiles_pro_estados', '{NOMBRE_PERFIL_PRO_ESTADO}');

            $crud->display_as('ID_PERSONA_EXAMINADOR', 'Evaluador');
            $crud->set_relation('ID_PERSONA_EXAMINADOR', 'tab_personas', '{APELLIDO_PATERNO} {APELLIDO_MATERNO} {NOMBRES}');

            $crud->display_as('ID_PERSONA_FIRMA_1', 'Persona Firma 1');
            $crud->set_relation('ID_PERSONA_FIRMA_1', 'tab_personas', '{APELLIDO_PATERNO} {APELLIDO_MATERNO} {NOMBRES}');

            $crud->display_as('ID_PERSONA_FIRMA_2', 'Persona Firma 1');
            $crud->set_relation('ID_PERSONA_FIRMA_2', 'tab_personas', '{APELLIDO_PATERNO} {APELLIDO_MATERNO} {NOMBRES}');

            $crud->change_field_type('ESTADO', 'hidden', 'PE');

            $crud->display_as('FECHA_EVALUACION', 'Fecha de Evaluación');
            $crud->display_as('DURACION_HORAS', 'Duración en Horas');
           
            
            

            $crud->callback_after_insert(array($this, 'crear_preguntas_evaluacion'));

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Registro de evaluación de examinadores";
            $this->load->view('f015/template_grocery', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function crear_preguntas_evaluacion($post_array, $primary_key) {
        $evaluacion = $this->evaluacion_examinadores_model->getEvaluacionExaminador($primary_key);
        $evaluacion = $evaluacion[0];

        //preguntas de esquemas
        $preguntas_esquemas = $this->evaluacion_examinadores_model->getPeguntasEsquemas($evaluacion->ID_PERFIL_PRO_ESTADO);
        foreach ($preguntas_esquemas as $value) {
            $this->evaluacion_examinadores_model->insertar_respuestas_esquemas($primary_key, $value->ID_PREGUNTA_ESQUEMA_CERTIFICACION);
        }

        //preguntas de procedimientos
        $preguntas_procedimientos = $this->evaluacion_examinadores_model->getPeguntasProcedimientos($evaluacion->ID_PERFIL_PRO_ESTADO);
        foreach ($preguntas_procedimientos as $value) {
            $this->evaluacion_examinadores_model->insertar_respuestas_procedimientos($primary_key, $value->ID_PREGUNTA_PROCEDIMIENTO_DOCUMENTOS);
        }
    }

    function realizar_evaluacion() {
        $id_persona = $this->session->userdata('ID_PERSONA_ACTUAL');
        $datos['PREGUNTAS_ESQUEMAS'] = $this->evaluacion_examinadores_model->getRespuestasEsquemas($id_persona);
        $datos['PREGUNTAS_PROCEDIMIENTOS'] = $this->evaluacion_examinadores_model->getRespuestasProcedimientos($id_persona);
        $datos['TITULO_PAGINA'] = "Evaluación";
        $this->load->view('f015/evaluacion_view', $datos);
    }

    function actualizar_evaluacion() {
        //guardando esquemas
        $esquemas = $_REQUEST['ESQUEMAS'];
        foreach ($esquemas as $key => $value) {
            $partes = explode("-", $key);
            if ($partes[2] == $value) {//respuesta correcta
                $this->evaluacion_examinadores_model->actualizarEsquemas($partes[1], $value, $partes[3]);
            } else {
                $this->evaluacion_examinadores_model->actualizarEsquemas($partes[1], $value, 0);
            }
        }
        //guardando procedimientos
        $procedimientos = $_REQUEST['PROCEDIMIENTOS'];
        foreach ($procedimientos as $key => $value) {
            $partes = explode("-", $key);
            $this->evaluacion_examinadores_model->actualizarProcedimientos($partes[1], $value);
        }

        $this->evaluacion_examinadores_model->actualizarEstadoEvaluacion($_POST['ID_EVALUACION'], "EV");
        redirect('autentificacion/salir');
    }

    public function revisarEvaluacion() {
        $datos['PERSONAS'] = $this->evaluacion_examinadores_model->getPersonasExaminadores();
        $datos['TITULO_PAGINA'] = "Revisar Evaluación";
        $this->load->view('f015/revisar_evaluacion_view', $datos);
    }

    public function respuestas_procedimientos($id_evaluacion_examinador) {
        $persona = $this->evaluacion_examinadores_model->getPersonasExaminadores($id_evaluacion_examinador);
        $persona = $persona[0];
        try {
            $crud = new grocery_CRUD();
            $crud->where('ID_EVALUACION_EXAMINADOR', $id_evaluacion_examinador);
            $crud->set_table('tab_respuestas_procedimientos_documentos');
            $crud->columns('ID_PREGUNTA_PROCEDIMIENTO_DOCUMENTOS', 'RESPUESTA', 'VALOR_RESPUESTA');

            $crud->display_as('ID_PREGUNTA_PROCEDIMIENTO_DOCUMENTOS', 'PREGUNTA');
            $crud->set_relation('ID_PREGUNTA_PROCEDIMIENTO_DOCUMENTOS', 'tab_preguntas_procedimientos_documentos', '{DESCRIPCION_PREGUNTA} - Puntaje Máximo: {VALOR_MAXIMO}');

            $crud->field_type('ID_EVALUACION_EXAMINADOR', 'hidden');
            $crud->field_type('ID_PREGUNTA_PROCEDIMIENTO_DOCUMENTOS', 'readonly');
            $crud->field_type('RESPUESTA', 'readonly');

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Revisar Procedimientos de los exámenes y documentos";
            $datos['PERSONA'] = $persona;
            $datos['ID_EVALUACION'] = $id_evaluacion_examinador;
            $this->load->view('f015/respuestas_view', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function terminarRevision($id_evaluacion_examinador) {
        $this->evaluacion_examinadores_model->actualizarEstadoEvaluacion($id_evaluacion_examinador, "RE");
        redirect('evaluacion_examinador/revisarEvaluacion');
    }

    public function listaPersonas() {
        $datos['PERSONAS'] = $this->evaluacion_examinadores_model->getPersonasF009();
        $datos['TITULO_PAGINA'] = "CERTIFICADO DE INDUCCIÓN DEL PROCESO DE CERTIFICACIÓN DE PERSONAS";
        $this->load->view('f015/personas_list', $datos);
    }
    
    

}

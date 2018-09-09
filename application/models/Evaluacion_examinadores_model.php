<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Evaluacion_examinadores_model
 *
 * @author José
 */
class Evaluacion_examinadores_model extends CI_Model {

    //put your code here
    public function __construct() {
        $this->load->database();
    }

    public function getPerfiles($id_perfil = null) {
        $this->db->select('*');
        $this->db->from('tab_perfiles_pro_estados');
        if (isset($id_perfil)) {
            $this->db->where('ID_PERFIL_PRO_ESTADO', $id_perfil);
        }
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function getPeguntasEsquemas($id_perfil) {
        $this->db->select('*');
        $this->db->from('tab_preguntas_esquemas_certificacion');
        $this->db->where('ID_PERFIL_PRO_ESTADO', $id_perfil);
        $this->db->order_by('NRO_PREGUNTA ASC');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function getPeguntasProcedimientos($id_perfil) {
        $this->db->select('*');
        $this->db->from('tab_preguntas_procedimientos_documentos');
        $this->db->where('ID_PERFIL_PRO_ESTADO', $id_perfil);
        $this->db->order_by('NRO_PREGUNTA ASC');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function getEvaluacionExaminador($id_evaluacion_examinador) {
        $this->db->select('*');
        $this->db->from('tab_evaluacion_examinadores');
        $this->db->where('ID_EVALUACION_EXAMINADOR', $id_evaluacion_examinador);
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function getEvaluacionPersonalPendiente($id_persona) {
        $this->db->select('*');
        $this->db->from('tab_evaluacion_examinadores');
        $this->db->where('ID_PERSONA', $id_persona);
        $this->db->where('ESTADO', "PE");
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function insertar_respuestas_esquemas($id_evaluacion_examinador, $id_pregunta) {
        $datos['ID_EVALUACION_EXAMINADOR'] = $id_evaluacion_examinador;
        $datos['ID_PREGUNTA_ESQUEMA_CERTIFICACION'] = $id_pregunta;
        $datos['RESPUESTA'] = NULL;
        $datos['CALIFICACION'] = NULL;
        $this->db->insert('tab_respuestas_esquemas_certificacion', $datos);
    }

    public function insertar_respuestas_procedimientos($id_evaluacion_examinador, $id_pregunta) {
        $datos['ID_EVALUACION_EXAMINADOR'] = $id_evaluacion_examinador;
        $datos['ID_PREGUNTA_PROCEDIMIENTO_DOCUMENTOS'] = $id_pregunta;
        $datos['RESPUESTA'] = '';
        $datos['VALOR_RESPUESTA'] = 0;
        $this->db->insert('tab_respuestas_procedimientos_documentos', $datos);
    }

    public function getRespuestasEsquemas($id_persona) {
        $this->db->select('*');
        $this->db->from('tab_respuestas_esquemas_certificacion');
        $this->db->join('tab_evaluacion_examinadores', 'tab_evaluacion_examinadores.ID_EVALUACION_EXAMINADOR = tab_respuestas_esquemas_certificacion.ID_EVALUACION_EXAMINADOR');
        $this->db->join('tab_preguntas_esquemas_certificacion', 'tab_preguntas_esquemas_certificacion.ID_PREGUNTA_ESQUEMA_CERTIFICACION = tab_respuestas_esquemas_certificacion.ID_PREGUNTA_ESQUEMA_CERTIFICACION');

        $this->db->where('tab_evaluacion_examinadores.ID_PERSONA', $id_persona);
        $this->db->order_by('tab_preguntas_esquemas_certificacion.NRO_PREGUNTA ASC');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function getRespuestasProcedimientos($id_persona) {
        $this->db->select('*');
        $this->db->from('tab_respuestas_procedimientos_documentos');
        $this->db->join('tab_evaluacion_examinadores', 'tab_evaluacion_examinadores.ID_EVALUACION_EXAMINADOR = tab_respuestas_procedimientos_documentos.ID_EVALUACION_EXAMINADOR');
        $this->db->join('tab_preguntas_procedimientos_documentos', 'tab_preguntas_procedimientos_documentos.ID_PREGUNTA_PROCEDIMIENTO_DOCUMENTOS=tab_respuestas_procedimientos_documentos.ID_PREGUNTA_PROCEDIMIENTO_DOCUMENTOS');

        $this->db->where('tab_evaluacion_examinadores.ID_PERSONA', $id_persona);
        $this->db->order_by('tab_preguntas_procedimientos_documentos.NRO_PREGUNTA ASC');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function actualizarEsquemas($id_respuesta_esquema, $respuesta, $calificacion) {
        $this->db->set("RESPUESTA", $respuesta);
        $this->db->set("CALIFICACION", $calificacion);
        $this->db->where('ID_RESPUESTA_ESQUEMA', $id_respuesta_esquema);
        $this->db->update('tab_respuestas_esquemas_certificacion');
    }

    public function actualizarProcedimientos($id_respuesta_procedimiento, $respuesta) {
        $this->db->set("RESPUESTA", $respuesta);
        $this->db->where('ID_RESPUESTA_PROCEDIMIENTO', $id_respuesta_procedimiento);
        $this->db->update('tab_respuestas_procedimientos_documentos');
    }

    public function actualizarEstadoEvaluacion($id_evaluacion_examinador, $estado) {
        $this->db->set("ESTADO", $estado);
        $this->db->where('ID_EVALUACION_EXAMINADOR', $id_evaluacion_examinador);
        $this->db->update('tab_evaluacion_examinadores');
    }

    public function getPersonasExaminadores($id_evaluacion_examinador = null) {
        $this->db->select('*');
        $this->db->from('tab_evaluacion_examinadores');
        $this->db->join('tab_personas', 'tab_personas.ID_PERSONA = tab_evaluacion_examinadores.ID_PERSONA');
        $this->db->join('tab_perfiles_pro_estados', 'tab_perfiles_pro_estados.ID_PERFIL_PRO_ESTADO = tab_evaluacion_examinadores.ID_PERFIL_PRO_ESTADO');
        if (isset($id_evaluacion_examinador)) {
            $this->db->where('ID_EVALUACION_EXAMINADOR', $id_evaluacion_examinador);
        }
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function getRespuestasEsquemas2($id_evaluacion_examinador) {
        $this->db->select('*');
        $this->db->from('tab_respuestas_esquemas_certificacion');
        $this->db->join('tab_evaluacion_examinadores', 'tab_evaluacion_examinadores.ID_EVALUACION_EXAMINADOR = tab_respuestas_esquemas_certificacion.ID_EVALUACION_EXAMINADOR');
        $this->db->join('tab_preguntas_esquemas_certificacion', 'tab_preguntas_esquemas_certificacion.ID_PREGUNTA_ESQUEMA_CERTIFICACION = tab_respuestas_esquemas_certificacion.ID_PREGUNTA_ESQUEMA_CERTIFICACION');

        $this->db->where('tab_evaluacion_examinadores.ID_EVALUACION_EXAMINADOR', $id_evaluacion_examinador);
        $this->db->order_by('tab_preguntas_esquemas_certificacion.NRO_PREGUNTA ASC');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function getRespuestasProcedimientos2($id_evaluacion_examinador) {
        $this->db->select('*');
        $this->db->from('tab_respuestas_procedimientos_documentos');
        $this->db->join('tab_evaluacion_examinadores', 'tab_evaluacion_examinadores.ID_EVALUACION_EXAMINADOR = tab_respuestas_procedimientos_documentos.ID_EVALUACION_EXAMINADOR');
        $this->db->join('tab_preguntas_procedimientos_documentos', 'tab_preguntas_procedimientos_documentos.ID_PREGUNTA_PROCEDIMIENTO_DOCUMENTOS=tab_respuestas_procedimientos_documentos.ID_PREGUNTA_PROCEDIMIENTO_DOCUMENTOS');

        $this->db->where('tab_evaluacion_examinadores.ID_EVALUACION_EXAMINADOR', $id_evaluacion_examinador);
        $this->db->order_by('tab_preguntas_procedimientos_documentos.NRO_PREGUNTA ASC');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function getPersonasF009($id_persona=null) {
        $this->db->select('*');
        $this->db->from('tab_personas');
        $this->db->join('tab_cargos', 'tab_cargos.ID_CARGO=tab_personas.ID_CARGO');
        $this->db->where('tab_personas.ESTADO_TAREA', '3');
        if(isset($id_persona)){
            $this->db->where('tab_personas.ID_PERSONA', $id_persona);
            
        }
//        $this->db->where('tab_evaluacion_examinadores.ID_EVALUACION_EXAMINADOR', $id_evaluacion_examinador);
//        $this->db->order_by('tab_preguntas_procedimientos_documentos.NRO_PREGUNTA ASC');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
    public function eliminar_evaluacion() {
        
    }

}

<?php

class f044_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    
    
    public function actualizar_personas($id) {
        $datos['ID_CARGO'] = "6";
        
        $this->db->where('ID_PERSONA', $id);
        $this->db->update('tab_personas', $datos);
    }

    public function get_datos_generales() {
        $this->db->select('*');
        $this->db->from('tab_nombre_empresa');
         $this->db->join('tab_provincias', 'tab_provincias.ID_PROVINCIA=tab_nombre_empresa.ID_PROVINCIA');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    

    public function get_reconocimiento() {
        $this->db->select('*');
        $this->db->from('Tab_denominacion_catalogo_perf_pro');
        $this->db->join('Tab_unidad_competencia', 'Tab_unidad_competencia.ID_UNIDAD_COMPETENCIA=Tab_denominacion_catalogo_perf_pro.ID_UNIDAD_COMPETENCIA');
        $this->db->join('Tab_asociacion_perf_pro', 'Tab_asociacion_perf_pro.ID_ASOCIACION_PERF_PRO=Tab_denominacion_catalogo_perf_pro.ID_ASOCIACION_PERF_PRO');
        
        $this->db->join('Tab_familia_profesional_perf_pro', 'Tab_familia_profesional_perf_pro.ID_FAMILIA_PROFESIONAL_PERF_PRO=Tab_denominacion_catalogo_perf_pro.ID_FAMILIA_PROFESIONAL_PERF_PRO');

        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function get_tipo_solicitud() {
        $this->db->select('*');
        $this->db->from('Tab_tipo_solicitante');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function get_oec1() {
        $this->db->select('*');
        $this->db->from('Tab_personas');
        $this->db->join('Tab_cargos', 'Tab_cargos.ID_CARGO=Tab_personas.ID_CARGO');
        $this->db->where('Tab_cargos.ID_CARGO','1');
        
//        $this->db->join('');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
    public function get_oec2() {
        $this->db->select('*');
        $this->db->from('Tab_personas');
        $this->db->join('Tab_cargos', 'Tab_cargos.ID_CARGO=Tab_personas.ID_CARGO');
            $this->db->where('Tab_cargos.ID_CARGO>=','2');
            $this->db->where('Tab_cargos.ID_CARGO<=','4');
           
//        $this->db->join('');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    public function get_oec3() {
        $this->db->select('*');
        $this->db->from('Tab_personas');
        $this->db->join('Tab_cargos', 'Tab_cargos.ID_CARGO=Tab_personas.ID_CARGO');
         $this->db->where('Tab_cargos.ID_CARGO','1');
//        $this->db->join('');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    public function get_oec4() {
        $this->db->select('*');
        $this->db->from('Tab_personas');
        $this->db->join('Tab_cargos', 'Tab_cargos.ID_CARGO=Tab_personas.ID_CARGO');
       $this->db->where('Tab_cargos.ID_CARGO','5');
//        $this->db->join('');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
    public function examinador() {
        $this->db->select('*');
        $this->db->from('Tab_personas');
        $this->db->join('Tab_cantones', 'Tab_cantones.ID_CANTON=Tab_personas.ID_CANTON');
        $this->db->join('Tab_provincias', 'Tab_provincias.ID_PROVINCIA=Tab_personas.ID_PROVINCIA');
        $this->db->join('Tab_cargos', 'Tab_cargos.ID_CARGO=Tab_personas.ID_CARGO');
         $this->db->where('Tab_cargos.ID_CARGO','6');
       
//        $this->db->join('');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
    public function estudios($id_persona=null) {
        $this->db->select('*');
        $this->db->from('Tab_educacion_superior');
        $this->db->join('Tab_personas', 'Tab_personas.ID_PERSONA=Tab_educacion_superior.ID_PERSONA');
        $this->db->join('Tab_formacion_edu_sup', 'Tab_formacion_edu_sup.ID_FORMACION_EDU_SUP=Tab_educacion_superior.ID_FORMACION_EDU_SUP');
        $this->db->join('Tab_cargos', 'Tab_cargos.ID_CARGO=Tab_personas.ID_CARGO');
        $this->db->where('Tab_cargos.ID_CARGO','6');  
        if (isset($id_persona)){
            $this->db->where('Tab_educacion_superior.ID_PERSONA',$id_persona); 
        }
//        $this->db->join('');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
    public function experiencia() {
        $this->db->select('*');
        $this->db->from('tab_detalles_experiencias_profesionales');
        $this->db->join('Tab_personas', 'Tab_personas.ID_PERSONA=Tab_detalles_experiencias_profesionales.ID_PERSONA');
        $this->db->join('Tab_experiencias_profesionales', 'Tab_experiencias_profesionales.ID_EXPE_PROFESIONAL=Tab_detalles_experiencias_profesionales.ID_EXPE_PROFESIONAL');
        $this->db->join('Tab_cargos', 'Tab_cargos.ID_CARGO=Tab_personas.ID_CARGO');
        $this->db->where('Tab_cargos.ID_CARGO','6');
        $this->db->where('Tab_experiencias_profesionales.NOMBRE_EXPE_PROFESIONAL','PEDAGOGICA');
//        $this->db->join('');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    public function formacion() {
        $this->db->select('*');
        $this->db->from('tab_detalles_formaciones');
        $this->db->join('Tab_personas', 'Tab_personas.ID_PERSONA=tab_detalles_formaciones.ID_PERSONA');
        $this->db->join('Tab_formaciones_generales', 'Tab_formaciones_generales.ID_FORMACION_GENERAL=tab_detalles_formaciones.ID_FORMACION_GENERAL');
        $this->db->join('Tab_cargos', 'Tab_cargos.ID_CARGO=Tab_personas.ID_CARGO');
        $this->db->where('Tab_cargos.ID_CARGO','6');
//        $this->db->join('');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    public function aulas() {
        $this->db->select('*');
        $this->db->from('Tab_aulas');
        $this->db->join('Tab_modalidades', 'Tab_modalidades.ID_MODALIDAD=Tab_aulas.ID_MODALIDAD');
        $this->db->join('Tab_provincias', 'Tab_provincias.ID_PROVINCIA=Tab_aulas.ID_PROVINCIA');
        
        
//        $this->db->join('');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    public function talleres() {
        $this->db->select('*');
        $this->db->from('Tab_talleres_lab');
        $this->db->join('Tab_modalidades', 'Tab_modalidades.ID_MODALIDAD=Tab_talleres_lab.ID_MODALIDAD');
        $this->db->join('Tab_provincias', 'Tab_provincias.ID_PROVINCIA=Tab_talleres_lab.ID_PROVINCIA');
        
        
//        $this->db->join('');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    public function sucursal() {
        $this->db->select('*');
        $this->db->from('tab_detalles_sucursales');
       
//        $this->db->join('');
        $consulta = $this->db->get();
        return $consulta->result();
    }

}

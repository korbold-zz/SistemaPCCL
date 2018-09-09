<?php


class f015_model extends CI_Model{
   public function __construct() {
        $this->load->database();
    }
    
    public function multiples1($id) {
        $this->db->select('*');
        $this->db->from('Tab_exa_eva_respuestas_multiples');
        $this->db->join('Tab_enunciado_eva_examinador', 'Tab_enunciado_eva_examinador.ID_ENUNCIADO_EVA_EXAMINADOR=Tab_exa_eva_respuestas_multiples.ID_ENUNCIADO_EVA_EXAMINADOR');
        $this->db->join('Tab_denominacion_catalogo_perf_pro', 'Tab_denominacion_catalogo_perf_pro.ID_DENOMINACION_CATALOGO_PERF_PRO=Tab_exa_eva_respuestas_multiples.ID_DENOMINACION_CATALOGO_PERF_PRO');
        
        $this->db->where('Tab_denominacion_catalogo_perf_pro.ID_DENOMINACION_CATALOGO_PERF_PRO', $id);
       
        $consulta = $this->db->get();
        return $consulta->result();
    }
    public function criterio1($id) {
        $this->db->select('*');
        $this->db->from('Tab_eva_exa_preguntas_criterio');
        $this->db->join('Tab_enunciado_eva_examinador', 'Tab_enunciado_eva_examinador.ID_ENUNCIADO_EVA_EXAMINADOR=Tab_eva_exa_preguntas_criterio.ID_ENUNCIADO_EVA_EXAMINADOR');
        $this->db->join('Tab_denominacion_catalogo_perf_pro', 'Tab_denominacion_catalogo_perf_pro.ID_DENOMINACION_CATALOGO_PERF_PRO=Tab_eva_exa_preguntas_criterio.ID_DENOMINACION_CATALOGO_PERF_PRO');
        
        $this->db->where('Tab_denominacion_catalogo_perf_pro.ID_DENOMINACION_CATALOGO_PERF_PRO', $id);
       
        $consulta = $this->db->get();
        return $consulta->result();
    }
}

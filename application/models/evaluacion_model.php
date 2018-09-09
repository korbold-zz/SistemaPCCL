<?php


class evaluacion_model extends CI_Model {
   public function __construct() {
        $this->load->database();
    }
    
    public function candidato($id) {
        $this->db->select('*');
        $this->db->from('tab_subcategoria_criterios_evaluacion');
        $this->db->join('tab_personas','tab_subcategoria_criterios_evaluacion.ID_PERSONA = tab_personas.ID_PERSONA ');
        $this->db->where('tab_personas.ID_PERSONA ='.$id);
        $consulta = $this->db->get();
        return $consulta->result();
    }
     public function candidatoTodos() {
        $this->db->select('tab_personas.ID_PERSONA,tab_personas.NOMBRES,tab_personas.APELLIDO_PATERNO,tab_personas.APELLIDO_MATERNO,tab_subcategoria_criterios_evaluacion.ESTADO');
        $this->db->from('tab_subcategoria_criterios_evaluacion');
        $this->db->join('tab_personas','tab_subcategoria_criterios_evaluacion.ID_PERSONA = tab_personas.ID_PERSONA ');
       
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
      public function sub_categorias1() {
        $this->db->select('*');
        $this->db->from('tab_subcategoria_criterios_evaluacion');
//        $this->db->join('tab_categorias_criterios_evaluacion','tab_subcategoria_criterios_evaluacion.ID_CAT_CRITERIO_EVALUACION = tab_categorias_criterios_evaluacion.ID_CAT_CRITERIO_EVALUACION');
        $this->db->where('ID_CAT_CRITERIO_EVALUACION=1');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
    
    public function sub_categorias2() {
        $this->db->select('*');
        $this->db->from('tab_subcategoria_criterios_evaluacion');
//        $this->db->join('tab_categorias_criterios_evaluacion','tab_subcategoria_criterios_evaluacion.ID_CAT_CRITERIO_EVALUACION = tab_categorias_criterios_evaluacion.ID_CAT_CRITERIO_EVALUACION');
        $this->db->where('ID_CAT_CRITERIO_EVALUACION=2');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
    public function sub_categorias3() {
        $this->db->select('*');
        $this->db->from('tab_subcategoria_criterios_evaluacion');
//        $this->db->join('tab_categorias_criterios_evaluacion','tab_subcategoria_criterios_evaluacion.ID_CAT_CRITERIO_EVALUACION = tab_categorias_criterios_evaluacion.ID_CAT_CRITERIO_EVALUACION');
        $this->db->where('ID_CAT_CRITERIO_EVALUACION=3');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
    public function sub_categorias4() {
        $this->db->select('*');
        $this->db->from('tab_subcategoria_criterios_evaluacion');
//        $this->db->join('tab_categorias_criterios_evaluacion','tab_subcategoria_criterios_evaluacion.ID_CAT_CRITERIO_EVALUACION = tab_categorias_criterios_evaluacion.ID_CAT_CRITERIO_EVALUACION');
        $this->db->where('ID_CAT_CRITERIO_EVALUACION=4');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
    public function encabezado() {
        $this->db->select('*');
        $this->db->from('tab_encabezado');
        $this->db->join('tab_categorias_criterios_evaluacion','tab_subcategoria_criterios_evaluacion.ID_CAT_CRITERIO_EVALUACION = tab_categorias_criterios_evaluacion.ID_CAT_CRITERIO_EVALUACION');
        $this->db->where('ID_CAT_CRITERIO_EVALUACION=4');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
     public function calificacion($id) {
        $this->db->select('*');
        $this->db->from('tab_evaluacion_persona');
        
        $this->db->where('ID_PERSONA',$id);
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
    public function guardar_calificacion($id_persona,$valor1,$valor2,$valor3,$valor4,$suma,$fecha) {
        $datos['ID_PERSONA']=$id_persona;
        $datos['ID_SUBCAT_CRIT_EVA']="1";
        $datos['VALOR1']=$valor1;
        $datos['VALOR2']=$valor2;
        $datos['VALOR3']=$valor3;
        $datos['VALOR4']=$valor4;
        $datos['FECHA']=$fecha;
        $datos['SUMA']=$suma;
        $this->db->insert('tab_evaluacion_persona',$datos);
        
    }
    public function actualizar_calificacion($id_persona,$valor1,$valor2,$valor3,$valor4,$suma,$fecha) {
        
        $datos['ID_SUBCAT_CRIT_EVA']="1";
        $datos['VALOR1']=$valor1;
        $datos['VALOR2']=$valor2;
        $datos['VALOR3']=$valor3;
        $datos['VALOR4']=$valor4;
        $datos['FECHA']=$fecha;
        $datos['SUMA']=$suma;
        $this->db->where('tab_evaluacion_persona.ID_PERSONA',$id_persona);
        $this->db->update('tab_evaluacion_persona',$datos);
        
    }
    public function actulizarEstado($id,$estado) {
        $datos['ESTADO_TAREA'] = $estado;
        $this->db->where('ID_PERSONA', $id);
        $this->db->update('tab_personas', $datos);
    }
    
    public function actulizarEstado1($id,$estado) {
        $datos['ESTADO_TAREA'] = $estado;
        $this->db->where('ID_PERSONA', $id);
        $this->db->update('tab_personas', $datos);
    }
    
}

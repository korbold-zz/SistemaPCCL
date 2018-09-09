<?php

class repositorio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        if (!$this->session->userdata('id_usuario')) {
            redirect('autentificacion');
        }
        $this->load->model("repositorio_model");
        $this->load->model("f019_model");
    }

    public function docs() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_repositorio_externo');
            $crud->set_subject('Repositorio Externo');
            $crud->set_field_upload('ARCHIVO', 'assets/uploads/files');

            $crud->unset_fields('ID_ENCABEZADO','TAMANO', 'FORMATO');
            $crud->unset_export();
            $crud->unset_print();



            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Repositorio Externo";
            $this->load->view('repositorio/repositorio_externo.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function docs_interno() {
        try {
            $id = $this->session->userdata('id_usuario');
            $crud = new grocery_CRUD();
            $crud->set_table('tab_respositorio_interno');
            $crud->set_subject('Repositorio Interno');
            $crud->set_field_upload('ARCHIVO', 'assets/uploads/files');
            $crud->display_as('ID_ARCHIVO', 'ARCHIVO');
            $crud->display_as('ID_PERSONA', 'NOMBRES');
            $crud->set_relation('ID_ARCHIVO', 'tab_archivos', 'nombre_archivo');
            $crud->set_relation('ID_PERSONA', 'tab_personas', '{cedula} {nombres}  {apellido_paterno} {apellido_materno} ');
            
             $crud->field_type('ID_PERSONA', 'readonly');
             $crud->field_type('ID_ARCHIVO', 'readonly');
             $crud->field_type('FECHA', 'readonly');
            $crud->unset_export();
            $crud->unset_print();
            $crud->unset_delete();
            $crud->unset_add();
            if (isset($id)) {
                $crud->where('tab_respositorio_interno.ID_PERSONA', $id);
            }
            $crud->unset_export();
            $crud->unset_print();
            $crud->callback_after_update(array($this, 'fecha'));

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Repositorio Interno";
            $this->load->view('repositorio/v_repositorio.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function fecha($post_array,$primary_key) {


        $user_logs_update = array(
            "ID_PERSONA" => $primary_key,
            "ID_ARCHIVO" => $post_array->ID_ARCHIVO
        );

        $this->db->update('tab_respositorio_interno', $user_logs_update, array('ID_PERSONA' => $primary_key));

        return true;
//        $id = $this->session->userdata('id_usuario');
//        $this->repositorio_model->insertarInterno($id, $archivo);
    }

}

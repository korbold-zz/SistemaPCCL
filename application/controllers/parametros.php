<?php

class parametros extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
//        if (!$this->session->userdata('id_usuario')) {
//            redirect('autentificacion');
//        }
        $this->load->model("parametros_model");
    }

    public function profesionalAdd() {
        $this->load->view('F044/profile.php');
//         $this->load->view('personas/profile.php');
    }

    public function resposabilidad() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_estado_responsabilidad');
            $crud->set_subject('Responsable');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Responsable";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function tipoArchivo() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_archivos');
            $crud->set_subject('Archivo');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Archivo";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function tipoCodigos($id=null) {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_codigos');
            $crud->set_subject('Archivos');
            $crud->display_as('ID_ARCHIVO', 'Archivo');
            $crud->set_relation('ID_ARCHIVO', 'tab_archivos', 'nombre_archivo');
            $crud->display_as('ID_ENCABEZADO', 'Nombre Archivo');
            $crud->set_relation('ID_ENCABEZADO', 'tab_encabezado', 'DESCRIPCION_HOJA');
            $crud->display_as('ID_PERSONA', 'Persona');
            $crud->set_relation('ID_PERSONA', 'tab_personas', '{cedula} {nombres}  {apellido_paterno} {apellido_materno} ');
            $crud->unset_fields('CODIGO');
            if (isset($id)) {
                $crud->where('nombre_archivo',$id);
            }
            
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Archivos";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function encabezado() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_encabezado');
            $crud->set_subject('Encabezado');

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Encabezado";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function empresa() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_nombre_empresa');
            $crud->set_subject('Empresa');
            $crud->display_as('ID_PROVINCIA', 'PROVINCIA');
            $crud->set_relation('ID_PROVINCIA', 'tab_provincias', 'provincia');
            $crud->display_as('ID_CANTON', 'CANTON');
            $crud->set_relation('ID_CANTON', 'tab_cantones', 'canton');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Empresa";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function provincias() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_provincias');
            $crud->set_subject('Provincias');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Provincias";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function cantones() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_cantones');
            $crud->set_subject('Cantones');
            $crud->display_as('ID_PROVINCIA', 'PROVINCIA');
            $crud->set_relation('ID_PROVINCIA', 'tab_provincias', 'provincia');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Cantones";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function generos() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_generos');
            $crud->set_subject('Géneros');

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Géneros";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function cargos() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_cargos');
            $crud->set_subject('Administrar Cargos');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Administrar Cargos";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

}

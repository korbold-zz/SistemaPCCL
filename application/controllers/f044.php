<?php

class f044 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
//        if (!$this->session->userdata('id_usuario')) {
//            redirect('autentificacion');
//        }
        $this->load->model("f044_model");
    }

    public function formulario() {


        $datos['GENERAL'] = $this->f044_model->get_datos_generales();
        $datos['RECO'] = $this->f044_model->get_reconocimiento();
        $datos['TIPO'] = $this->f044_model->get_tipo_solicitud();
        $datos['S1'] = $this->f044_model->get_oec1();
        $datos['S2'] = $this->f044_model->get_oec2();
        $datos['S3'] = $this->f044_model->get_oec3();
        $datos['S4'] = $this->f044_model->get_oec4();
        $datos['EXAMINADOR'] = $this->f044_model->examinador();
        $datos['ESTUDIOS'] = $this->f044_model->estudios();
        $datos['EXPERIENCIA'] = $this->f044_model->experiencia();

        $this->load->view('F044/formulario_view.php', $datos);
    }

    public function ADDperfilesProfesionales() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_denominacion_catalogo_perf_pro');
            $crud->display_as('ID_UNIDAD_COMPETENCIA', 'UNIDAD COMPETENCIA');
            $crud->display_as('ID_ASOCIACION_PERF_PRO', 'ASOCIACION');
            $crud->display_as('ID_SECTOR_CIUU_PERF_PRO', 'SECTOR UUI');
            $crud->display_as('ID_FAMILIA_PROFESIONAL_PERF_PRO', 'FAMILIA PRFESIONAL');
            $crud->set_relation('ID_UNIDAD_COMPETENCIA', 'Tab_unidad_competencia', 'UNIDAD_COMPETENCIA');
            $crud->set_relation('ID_ASOCIACION_PERF_PRO', 'Tab_asociacion_perf_pro', 'NOMBRE_ASOCIACION_PERF_PRO');
            $crud->set_relation('ID_SECTOR_CIUU_PERF_PRO', 'Tab_sector_ciuu_perf_pro', 'NOMBRE_SECTOR_CIUU_PERF_PRO');
            $crud->set_relation('ID_FAMILIA_PROFESIONAL_PERF_PRO', 'Tab_familia_profesional_perf_pro', 'NOMBRE_FAMILIA_PROFESIONAL_PERF_PRO');

            $crud->set_subject('Perfiles Profesionales DENOMINACION CATÁLOGO ');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Perfiles Profesionales DENOMINACION CATÁLOGO";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function perf_pro() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_denominacion_catalogo_perf_pro');

            $crud->set_subject('Perfiles Profesionales');
//            $crud->display_as('ID_GENERO', 'GÉNERO');
//            $crud->set_relation('ID_GENERO', 'tab_generos', 'nombre_genero');

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Perfiles Profesionales";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function familia_prof() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_familia_profesional_perf_pro');

            $crud->set_subject('Familia Profesional ');
//            $crud->display_as('ID_GENERO', 'GÉNERO');
//            $crud->set_relation('ID_GENERO', 'tab_generos', 'nombre_genero');

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Familia Profesional";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function sectorUUI() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_sector_ciuu_perf_pro');
            $crud->set_subject('Sector UUI');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Sector UII";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function asociacion() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_asociacion_perf_pro');

            $crud->set_subject('Asociación');
//            $crud->display_as('ID_GENERO', 'GÉNERO');
//            $crud->set_relation('ID_GENERO', 'tab_generos', 'nombre_genero');

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Asociación";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function unidadCompetencia() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_unidad_competencia');

            $crud->set_subject('Unidad de Competencia');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Unidad de Competencia";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function perfilesDisponibles() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_perfiles_profesionales');
            $crud->set_subject('Perfiles Prfesionales');
            $crud->set_relation_n_n('tab_denominacion_catalogo_perf_pro', 'tab_perfiles_profesionales', 'tab_denominacion_catalogo_perf_pro', 'ID_DENOMINACION_CATALOGO_PERF_PRO', 'ID_PERFIL_PRO_ESTADO', 'nombre_denominacion_catalogo_perf_pro', 'PRIORIDAD');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Perfiles Prfesionales";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    public function modalidades() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_modalidades');
            $crud->set_subject('Modalidades');
           
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Modalidades";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    public function aulas() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_aulas');
            $crud->set_subject('Aulas');
           $crud->set_relation('ID_MODALIDAD', 'tab_modalidades', 'nombre_modalidad');
           $crud->set_relation('ID_PROVINCIA', 'tab_provincias', 'provincia');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Aulas";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    public function talleres() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_talleres_lab');
            $crud->set_subject('Talleres');
             $crud->set_relation('ID_MODALIDAD', 'tab_modalidades', 'nombre_modalidad');
            $crud->display_as('LUGAR_UBICAION', 'LUGAR_UBICACION');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Talleres Lab";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    public function sucursales() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_detalles_sucursales');
            $crud->set_subject('Sucursales');           
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Sucursales";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    public function solicitud() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_tipo_solicitante');
            $crud->set_subject('Tipo Solicitud');           
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Tipo Solicitud";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    
    
    

}

<?php

class f011 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("hoja_model");
        $this->load->model("evaluacion_model");

        $this->load->helper('date');
        $this->load->library('grocery_CRUD');
    }

    public function calificar_persona() {
        $data['PERSONAS'] = $this->hoja_model->get_estado_persona();
        $this->load->view('f011/estados.php', $data);
    }

    public function calificar($id) {
        $datos['EXISTE'] = "NO";
        $datos['V1'] = "";
        $datos['V2'] = "";
        $datos['V3'] = "";
        $datos['V4'] = "";
        $datos['SUMA'] = "";
        $result = $this->evaluacion_model->calificacion($id);
        if ($result && count($result) > 0) {
            $datos['EXISTE'] = "SI";
            foreach ($result as $value) {
                $datos['V1'] = $value->VALOR1;
                $datos['V2'] = $value->VALOR2;
                $datos['V3'] = $value->VALOR3;
                $datos['V4'] = $value->VALOR4;
                $datos['SUMA'] = $value->SUMA;
            }
        }

        $datos['REG2'] = $this->evaluacion_model->sub_categorias2();
        $datos['REG1'] = $this->evaluacion_model->sub_categorias1();
        $datos['REG3'] = $this->evaluacion_model->sub_categorias3();
        $datos['REG4'] = $this->evaluacion_model->sub_categorias4();
        $datos['PERSONAS'] = $this->hoja_model->get_calificar($id);


        $this->load->view('f011/examinar_view.php', $datos);
    }

    public function categoria_eva() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_categorias_criterios_evaluacion');
            $crud->set_subject('Categoría');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Categoría";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function subCategoria_eva() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_subcategoria_criterios_evaluacion');
            $crud->set_subject('SubCategoría');
            $crud->display_as('ID_CAT_CRITERIO_EVALUACION', 'CATEGORÍA');
            $crud->set_relation('ID_CAT_CRITERIO_EVALUACION', 'tab_categorias_criterios_evaluacion', 'NOMBRE_CAT_CRIT_EVA');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "SubCategoría";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function Resultados_evaluacion() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_evaluacion_persona');
            $crud->set_subject('Resultados');
            $crud->unset_fields('ID_SUBCAT_CRIT_EVA');
            $crud->display_as('ID_PERSONA', 'PERSONA');
            $crud->set_relation('ID_PERSONA', 'tab_personas', '{cedula} {nombres}  {apellido_paterno} {apellido_materno} ');
            $crud->unset_operations();

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Resultados";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function guardar_califiacion() {
        $existe = $_REQUEST["existe"];
        $resultado = $_POST['res'];
        if ($existe == "NO") {
            $this->evaluacion_model->guardar_calificacion($_POST['id_persona'], $_POST['rg1'], $_POST['rg2'], $_POST['rg3'], $_POST['rg4'], $_POST['res'], date('Y-m-d '));
        } else {
            $this->evaluacion_model->actualizar_calificacion($_POST['id_persona'], $_POST['rg1'], $_POST['rg2'], $_POST['rg3'], $_POST['rg4'], $_POST['res'], date('Y-m-d '));
        }
        if ($resultado >= 70) {
            $this->evaluacion_model->actulizarEstado($_POST['id_persona'],"2");
        }



        $data['PERSONAS'] = $this->hoja_model->get_estado_persona();
        $this->load->view('f011/estados.php', $data);
    }

}

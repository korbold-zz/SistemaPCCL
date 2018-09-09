<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class prueba extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        if (!$this->session->userdata('autentificado')) {
//            redirect("login");
//        }
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('parametros/_parametros_model');
        $this->load->model('parametros/vacio_model');
        $this->load->model('usuario/usuario_model');
        $this->load->library('grocery_CRUD');
    }

    public function preguntas() {

        try {
            $crud = new grocery_CRUD();
            $crud->set_table('vista_reporte');
            $crud->set_primary_key('ID_EVALUADO');
            $crud->set_subject('Perfil');

            $crud->columns('CEDULA', 'APELLIDO_PATERNO', 'APELLIDO_MATERNO', 'NOMBRES', 'NOMBRE_PERFIL_PRO_ESTADO');
            $crud->add_action('f009', '66', '6', '6', array($this, 'link_preguntas'));
            $crud->add_action('f015', '66', '6', '6', array($this, 'link_preguntas1'));
            $crud->unset_add();
            $crud->unset_delete();
            $crud->unset_read();
            $crud->unset_edit();
            $crud->unset_print();
            $crud->unset_export();
            $output = $crud->render();
            $datos = (array) $output;


            $this->_parametros_model->informacion($datos);
            $datos['TITULO_PAGINA'] = "CERTIFICADO";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function link_preguntas($primarykey, $row) {
        return site_url('prueba/pdf/' . $row->ID_EVALUADO);
    }

    public function link_preguntas1($primarykey, $row) {
        return site_url('prueba/pdf2/' . $row->ID_EVALUADO);
    }

    public function pdf($ID_EVALUADO) {
        // echo ($this->session->userdata('ido'));
        $this->load->helper('path');
        //$periodo=$this->usuario_model->busca_periodo();
        $user = $this->vacio_model->llena_tablasid('vista_reporte', 'ID_EVALUADO', $ID_EVALUADO);
        $user = $user[0];



        $this->load->library('pdf');

        $this->fpdf = new Pdf();

        $this->fpdf->AddPage("P"); //L:Horizontal o P:Vertical 


        $this->fpdf->SetFont('Times', 'B', 14);
        $this->fpdf->Ln(30);

        $this->fpdf->Cell(50, 6, "", 0, 0, 'C');

        $this->fpdf->Cell(90, 6, utf8_decode("CERTIFICACIÓN No.  ") . $ID_EVALUADO, 0, 1, 'C');
        $this->fpdf->SetFont('Times', '', 11);
        $this->fpdf->Ln();
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("Por medio del presente, certifico que el Sr. ") . utf8_decode($user->APELLIDO_PATERNO . " " . $user->APELLIDO_MATERNO . "" . $user->NOMBRES) . utf8_decode(", con Cédula de "), 0, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("Ciudadanía Nº ") . utf8_decode($user->CEDULA) . utf8_decode(", ha participado en el proceso de Inducción del  Sistema de Gestión de"), 0, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("Certificación de Personas por Competencias Laborales,realizado el día  ") . utf8_decode($user->FECHA) . utf8_decode(","), 0, 1, 'L');
        //$this->fpdf->Output('recibos.pdf', 'D');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("con una duración de  ____ horas. "), 0, 1, 'L');
        $this->fpdf->Ln();
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("Esta inducción es habilitante para participar como (personal involucrado en el proceso de certificación)"), 0, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("en la ejecución de las actividades de los Procesos del Sistema de Gestión de Certificación de Personas )"), 0, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("del Instituto Tecnológico Superior ''José Chiriboga Grijalva'' en relación al desarrollo del proceso de"), 0, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("Certificación de Personas por Competencias Laborales."), 0, 1, 'L');
        $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("Los temas tratados fueron:"), 0, 1, 'L');
        $this->fpdf->SetFillColor(200, 200, 200);
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("No."), 1, 0, 'L', TRUE);
        $this->fpdf->Cell(130, 6, utf8_decode("Documentos relacionados con el proceso de certificación de personas"), 1, 1, 'L', TRUE);
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("1"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Aceptación de la aplicación para la certificación"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("2"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Acuerdo de cumplimiento con los lineamientos para personas certificadas"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("3"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Aplicación para la certificación de personas"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("4"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Certificado de competencia laboral"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("5"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Código de ética y conducta para el examinado"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("6"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Declaración de imparcialidad en la examinación de competencia"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("7"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Diagrama de flujo del proceso de certificación"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("8"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Evaluación diagnóstica de lecto-escritura y cálculo básico"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("9"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Examinación de la competencia"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("10"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Guía para la examinación de la competencia"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("11"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Notificación de resultados de la re-examinación"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("12"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Lista de asistencia a la examinación"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("13"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Lista de verificación del lugar de examinación"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("14"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Lista de verificación del proceso de examinación"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("15"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Lista maestra de documentos"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("16"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("No aceptación de aplicación para la certificación"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("17"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Notificación de certificación - No certificación"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("18"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Notificación de resultados de la examinación"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("19"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Notificación de suspensión o retiro de la certificación"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("20"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Procedimiento de concesión y mantenimiento de la certificación"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("21"), 1, 0, 'L');
        $this->fpdf->Cell(130, 6, utf8_decode("Procedimiento de examinación de la competencia"), 1, 1, 'L');
        if ($this->fpdf->GetY() >= 210) {
            $this->fpdf->AddPage("P");
        }
        $this->fpdf->Ln(35);
        $this->fpdf->SetFillColor(200, 200, 200);
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("No."), 1, 0, 'L', TRUE);
        $this->fpdf->Cell(140, 6, utf8_decode("Documentos relacionados con el proceso de certificación de personas"), 1, 1, 'L', TRUE);
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("22"), 1, 0, 'L');
        $this->fpdf->Cell(140, 6, utf8_decode("Procedimiento de renovación, suspensión, modificación del alcance o retiro"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("23"), 1, 0, 'L');
        $this->fpdf->Cell(140, 6, utf8_decode("Recomendación para certificación por competencias laborales"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("24"), 1, 0, 'L');
        $this->fpdf->Cell(140, 6, utf8_decode("Recomendación para no certificación"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("25"), 1, 0, 'L');
        $this->fpdf->Cell(140, 6, utf8_decode("Registro de ausencia e informe de cambio de fecha de la examinación"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("26"), 1, 0, 'L');
        $this->fpdf->Cell(140, 6, utf8_decode("Solicitud  de cambio de fecha de examinación"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("27"), 1, 0, 'L');
        $this->fpdf->Cell(140, 6, utf8_decode("Acuerdo de no subcontratación"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("28"), 1, 0, 'L');
        $this->fpdf->Cell(140, 6, utf8_decode("Notificación de aceptación de la aplicación para la certificación"), 1, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(20, 6, utf8_decode("29"), 1, 0, 'L');
        $this->fpdf->Cell(140, 6, utf8_decode("Solicitud de ampliación de alcance de certificación"), 1, 1, 'L');
        $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(80, 6, utf8_decode("Ing. Carla Jaramillo"), 0, 0, 'L');
        $this->fpdf->Cell(80, 6, utf8_decode("  			Dra. Nuria Galárraga Montalvo"), 0, 1, 'L');
        $this->fpdf->SetFont('Times', 'B', 11);
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');
        $this->fpdf->Cell(80, 6, utf8_decode("Analista de Certificación y control"), 0, 0, 'L');
        $this->fpdf->Cell(80, 6, utf8_decode(" Responsable de Procesos de Certificación y Control"), 0, 1, 'L');
// 	Responsable de Procesos de Certificación y Control
        $this->fpdf->AddPage("P");

        $this->fpdf->Ln(35);
        $this->fpdf->SetFont('Times', 'B', 14);


        $this->fpdf->Cell(50, 6, "", 0, 0, 'C');

        $this->fpdf->Cell(90, 6, utf8_decode("COMPROMISO"), 0, 1, 'C');
        $this->fpdf->SetFont('Times', '', 11);
        $this->fpdf->Ln();
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("Yo,  ") . utf8_decode($user->APELLIDO_PATERNO . " " . $user->APELLIDO_MATERNO . "" . $user->NOMBRES) . utf8_decode("en el marco de  los procesos del Sistema  "), 0, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("de Gestión de Certificación de Personas me comprometo a cumplir estrictamente los "), 0, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("procesos conforme las responsabilidades asignadas por el Instituto Tecnológico "), 0, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("Superior  ''José Chiriboga Grijalva'' ,  para lo cual me comprometo a dominar la  "), 0, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("normativa vigente aplicable."), 0, 1, 'L');
        $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("Nombre: ") . utf8_decode($user->APELLIDO_PATERNO . " " . $user->APELLIDO_MATERNO . "" . $user->NOMBRES), 0, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("Cédula:") . utf8_decode($user->CEDULA), 0, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'L');

        $this->fpdf->Cell(90, 6, utf8_decode("Cargo en el OEC"), 0, 1, 'L');
        $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Times', 'B', 12);
        $this->fpdf->Cell(20, 6, "", 0, 0, 'C');

        $this->fpdf->Cell(90, 6, utf8_decode("RECIBIDO"), 0, 1, 'L');
        $this->fpdf->SetFont('Times', '', 11);
        $this->fpdf->Ln();
        $this->fpdf->Cell(20, 6, "", 0, 0, 'C');

        $this->fpdf->Cell(90, 6, utf8_decode("Recibido por Analista de Certificación y Control: Ing. Carla Jaramillo"), 0, 1, 'L');
        $this->fpdf->Cell(20, 6, "", 0, 0, 'C');

        $this->fpdf->Cell(90, 6, utf8_decode("Fecha:") . date("Y-m-d H:i:s"), 0, 1, 'L');
        $this->fpdf->Ln();
        $this->fpdf->Ln();




        $this->fpdf->Cell(20, 6, "", 0, 0, 'C');

        $this->fpdf->Cell(90, 6, utf8_decode("Firma: ______________________"), 0, 1, 'L');





        $this->fpdf->Output();
    }

    public function pdf2($ID_EVALUADO) {
        // echo ($this->session->userdata('ido'));
        $this->load->helper('path');
        //$periodo=$this->usuario_model->busca_periodo();
        $user = $this->vacio_model->llena_tablasid('vista_reporte', 'ID_EVALUADO', $ID_EVALUADO);
        $user = $user[0];



        $this->load->library('pdf_1');

        $this->fpdf = new Pdf_1();

        $this->fpdf->AddPage("P"); //L:Horizontal o P:Vertical 
        $this->fpdf->SetFont('Times', 'B', 10);
        $this->fpdf->Ln(15);

        $this->fpdf->Cell(20, 6, "", 0, 0, 'C');
        $this->fpdf->Cell(65, 6, utf8_decode("Nombres del Candidato a Examinador: "), 0, 0, 'L');
        $this->fpdf->SetFont('Times', '', 10);
        $this->fpdf->Cell(90, 6, utf8_decode($user->APELLIDO_PATERNO . " " . $user->APELLIDO_MATERNO . "" . $user->NOMBRES), 0, 1, 'L');
        $this->fpdf->SetFont('Times', 'B', 10);


        $this->fpdf->Cell(20, 6, "", 0, 0, 'C');
        $this->fpdf->Cell(65, 6, utf8_decode("Fecha de evaluación: "), 0, 0, 'L');
        $this->fpdf->SetFont('Times', '', 10);
        $this->fpdf->Cell(90, 6, utf8_decode($user->FECHA), 0, 1, 'L');
        $this->fpdf->SetFont('Times', 'B', 10);
        $this->fpdf->Cell(20, 6, "", 0, 0, 'C');
        $this->fpdf->Cell(65, 6, utf8_decode("Perfil calificado para ser examinador: "), 0, 1, 'L');
        $this->fpdf->SetFont('Times', '', 10);
        $this->fpdf->Cell(20, 6, "", 0, 0, 'C');
        $this->fpdf->SetFont('Times', '', 12);
        // Imprimimos el texto justificado
        $this->fpdf->MultiCell(0, 5, utf8_decode($user->NOMBRE_PERFIL_PRO_ESTADO));
        $this->fpdf->SetFont('Times', 'B', 10);
        $this->fpdf->Cell(20, 6, "", 0, 0, 'C');
        $this->fpdf->Cell(35, 6, utf8_decode("A.	Esquema de Certificación (50%)"), 0, 1, 'L');
        $this->fpdf->SetFont('Times', 'B', 10);
        $this->fpdf->Cell(20, 6, "", 0, 0, 'C');

        $this->fpdf->Cell(80, 6, "Preguntas", 1, 0, 'C');
        $this->fpdf->Cell(40, 6, "Contenido de la pregunta", 1, 0, 'C');
        $this->fpdf->Cell(25, 6, utf8_decode("Valor máximo"), 1, 0, 'C');
        $this->fpdf->Cell(25, 6, utf8_decode("Valor obtenido"), 1, 1, 'C');
        $consulta = array();
        $i = 1;
        $consulta = $this->vacio_model->llena_tablasid('tab_evaluacion', 'ID_EVALUADO', $ID_EVALUADO);
        foreach ($consulta as $datos) {

            $txt = ".  ";
            $user = $this->vacio_model->llena_tablasid('tab_preguntas_bloquea', 'ID_PREGUNTA', $datos->ID_PREGUNTA);
            $user = $user[0];
            if ($user->BLOQUE == 'A') {
                $txt = $user->DESCRIPCION_PREGUNTA;
                $user1 = array();
                $txt = $txt . "Respuestas";
                $user1 = $this->vacio_model->llena_tablasid('tab_respuestas', 'ID_PREGUNTA', $datos->ID_PREGUNTA);
                foreach ($user1 as $d) {
                    $txt = $txt . $d->DESCRIPCION_RESPUESTA;
                }
                $this->fpdf->Cell(20, 6, "", 0, 0, 'C');
                $this->fpdf->SetFont('Times', '', 12);
                // Imprimimos el texto justificado
                $this->fpdf->MultiCell(80, 5, utf8_decode($i . " " . $txt), 1);
                $i++;
                if ($this->fpdf->GetY() >= 210) {
                    $this->fpdf->AddPage("P");
                    $this->fpdf->Ln(15);
                }
            }
        }
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Times', 'B', 10);
        $this->fpdf->Cell(20, 6, "", 0, 0, 'C');
        $this->fpdf->Cell(35, 6, utf8_decode("B.	Procedimientos de los exámenes y documentos (50%)"), 0, 1, 'L');
        $this->fpdf->SetFont('Times', 'B', 10);
        $this->fpdf->Cell(20, 6, "", 0, 0, 'C');

        $this->fpdf->Cell(80, 6, "Preguntas", 1, 0, 'C');
        $this->fpdf->Cell(40, 6, "Contenido de la pregunta", 1, 0, 'C');
        $this->fpdf->Cell(25, 6, utf8_decode("Valor máximo"), 1, 0, 'C');
        $this->fpdf->Cell(25, 6, utf8_decode("Valor obtenido"), 1, 1, 'C');
        $consulta = array();
        $i = 1;
        $consulta = $this->vacio_model->llena_tablasid('tab_evaluacion', 'ID_EVALUADO', $ID_EVALUADO);
        foreach ($consulta as $datos) {

            $txt = ".  ";
            $user = $this->vacio_model->llena_tablasid('tab_preguntas_bloquea', 'ID_PREGUNTA', $datos->ID_PREGUNTA);
            $user = $user[0];
            if ($user->BLOQUE == 'B') {
                $txt = $user->DESCRIPCION_PREGUNTA;
                $user1 = array();
                $txt = $txt . "Respuestas";
                $user1 = $this->vacio_model->llena_tablasid('tab_respuestas', 'ID_PREGUNTA', $datos->ID_PREGUNTA);
                foreach ($user1 as $d) {
                    $txt = $txt . $d->DESCRIPCION_RESPUESTA;
                }
                $this->fpdf->Cell(20, 6, "", 0, 0, 'C');
                $this->fpdf->SetFont('Times', '', 12);
                // Imprimimos el texto justificado
                $this->fpdf->MultiCell(80, 5, utf8_decode($i . " " . $txt), 1);
                $i++;
                if ($this->fpdf->GetY() >= 210) {
                    $this->fpdf->AddPage("P");
                    $this->fpdf->Ln(20);
                }
            }
        }
        $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->Ln();
         $this->fpdf->SetFont('Times', 'B', 10);
        $this->fpdf->Cell(20, 6, "", 0, 0, 'C');

        $this->fpdf->Cell(80, 6, "______________________________", 0, 1, 'C');
        $this->fpdf->SetFont('Times', 'B', 10);
        $this->fpdf->Cell(20, 6, "", 0, 0, 'C');
 $user = $this->vacio_model->llena_tablasid('vista_reporte', 'ID_EVALUADO', $ID_EVALUADO);
        $user = $user[0];
        $this->fpdf->Cell(80, 6, utf8_decode($user->APELLIDO_PATERNO . " " . $user->APELLIDO_MATERNO . "" . $user->NOMBRES), 0, 1, 'C');
        $this->fpdf->Output();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
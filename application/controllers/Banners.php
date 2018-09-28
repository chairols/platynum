<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Banners extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'session',
            'r_session',
            'form_validation'
        ));
        $this->load->model(array(
            'banners_model'
        ));

        $session = $this->session->all_userdata();
        $this->r_session->check($session);
    }

    public function modelos() {
        $data['session'] = $this->session->all_userdata();
        $data['menu'] = 4;
        $data['javascript'] = array(
            '/assets/modulos/banners/js/modelos.js'
        );

        $data['banners'] = $this->banners_model->gets('banners_platynum');

        $this->load->view('layout/header', $data);
        $this->load->view('layout/menu');
        $this->load->view('banners/modelos');
        $this->load->view('layout/footer');
    }

    public function agregar_ajax() {
        $this->form_validation->set_rules('posicion', 'Posición', 'required|integer');
        $this->form_validation->set_rules('contenido', 'Contenido', 'required');
        $this->form_validation->set_rules('tabla', 'Tabla', 'required');

        if ($this->form_validation->run() == FALSE) {
            $json = array(
                'status' => 'error',
                'data' => validation_errors()
            );
            echo json_encode($json);
        } else {
            $where = array(
                'posicion' => $this->input->post('posicion')
            );
            $resultado = $this->banners_model->get_where($this->input->post('tabla'), $where);
            if ($resultado) {
                $json = array(
                    'status' => 'error',
                    'data' => 'Ya existe un banner en la posicion ' . $this->input->post('posicion')
                );
                echo json_encode($json);
            } else {
                $datos = array(
                    'posicion' => $this->input->post('posicion'),
                    'contenido' => $this->input->post('contenido')
                );
                $resultado = $this->banners_model->set($this->input->post('tabla'), $datos);

                if ($resultado) {
                    $json = array(
                        'status' => 'ok',
                        'data' => 'Se agregó el Banner correctamente'
                    );
                    echo json_encode($json);
                } else {
                    $json = array(
                        'status' => 'error',
                        'data' => 'Ocurrió un error inesperado'
                    );
                    echo json_encode($json);
                }
            }
        }
    }

    public function gets_tabla() {
        $this->form_validation->set_rules('tabla', 'Tabla', 'required');

        if ($this->form_validation->run() == FALSE) {
            echo "OCURRIO UN ERROR AL CARGAR";
        } else {
            $data['banners'] = $this->banners_model->gets($this->input->post('tabla'));
            $data['tabla'] = $this->input->post('tabla');

            $this->load->view('banners/gets_tabla', $data);
        }
    }

    public function borrar() {
        $this->form_validation->set_rules('tabla', 'Tabla', 'required');
        $this->form_validation->set_rules('posicion', 'Posición', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            $json = array(
                'status' => 'error',
                'data' => validation_errors()
            );
            echo json_encode($json);
        } else {
            $where = array(
                'posicion' => $this->input->post('posicion')
            );
            $resultado = $this->banners_model->delete($this->input->post('tabla'), $where);
            if ($resultado) {
                $json = array(
                    'status' => 'ok',
                    'data' => 'Se eliminó correctamente'
                );
                echo json_encode($json);
            } else {
                $json = array(
                    'status' => 'error',
                    'data' => 'Ocurrió un error inesperado'
                );
                echo json_encode($json);
            }
        }
    }

}

?>
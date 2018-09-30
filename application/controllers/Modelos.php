<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Modelos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'session',
            'r_session'
        ));
        $this->load->model(array(
            'modelos_model',
            'pelos_model',
            'ojos_model',
            'pieles_model',
            'idiomas_model',
            'paises_model',
            'provincias_model',
            'ciudades_model',
            'barrios_model'
        ));
        
        
    }
    
    public function listar($estado = 'habilitado') {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        
        $data['session'] = $this->session->all_userdata();
        $data['javascript'] = array(
            '/assets/modulos/modelos/js/listar.js'
        );
        $data['menu'] = 2;
        
        
        $where = $this->input->get();
        if(!isset($where['estado'])){
            $where['estado'] = $estado;
        }
        $data['estado'] = $where['estado'];
        $data['modelos'] = $this->modelos_model->gets_where($where);
        
        
        $this->load->view('layout/header', $data);
        $this->load->view('layout/menu');
        $this->load->view('modelos/listar');
        $this->load->view('layout/footer');
    }
    
    public function agregar() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        
        $data['session'] = $this->session->all_userdata();
        $data['javascript'] = array(
            '/assets/modulos/modelos/js/agregar.js'
        );
        $data['menu'] = 3;
        
        $data['pelos'] = $this->pelos_model->gets();
        $data['ojos'] = $this->ojos_model->gets();
        $data['pieles'] = $this->pieles_model->gets();
        $data['idiomas'] = $this->idiomas_model->gets();
        $data['paises'] = $this->paises_model->gets();
        $data['provincias'] = $this->provincias_model->gets();
        $data['ciudades'] = $this->ciudades_model->gets();
        $data['barrios'] = $this->barrios_model->gets();
        
        $this->load->view('layout/header', $data);
        $this->load->view('layout/menu');
        $this->load->view('modelos/agregar');
        $this->load->view('layout/footer');
    }
    
    public function agregar_ajax() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        
        $datos = array(
            'status' => 'ok',
            'data' => $this->input->post()
        );
        echo json_encode($datos);
    }
    
    public function ver($idmodelo = null) {
        if($idmodelo == null) {
            redirect('/web/pagina/', 'refresh');
        }
        
        $where = array(
            'modelos.ID' => $idmodelo
        );
        $data['modelo'] = $this->modelos_model->get_where($where);
        
        $data['perfil'] = '';
        
        $this->load->view('layout_web/header', $data);
        $this->load->view('modelos/ver');
        $this->load->view('layout_web/footer');
    }
}
?>
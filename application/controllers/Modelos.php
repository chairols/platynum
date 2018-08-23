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
        
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
    }
    
    public function listar() {
        $data['session'] = $this->session->all_userdata();
        $data['javascript'] = array(
            '/assets/modulos/modelos/js/listar.js'
        );
        
        $data['modelos'] = $this->modelos_model->gets();
        $data['menu'] = 2;
        
        $this->load->view('layout/header', $data);
        $this->load->view('layout/menu');
        $this->load->view('modelos/listar');
        $this->load->view('layout/footer');
    }
    
    public function agregar() {
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
}
?>
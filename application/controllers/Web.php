<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'pagination'
        ));
        $this->load->model(array(
            'modelos_model',
            'banners_model'
        ));
    }
    
    public function pagina($perfil = null, $pagina = 0) {
        $data['javascript'] = array(
            '/assets/modulos/web/js/pagina.js'
        );
        
        if($perfil == null) {
            $perfil = 'Modelos';
        }
        $where = array(
            'estado' => 'habilitado'
        );
        $per_page = 48;
        
        $idbanner = ($pagina / $per_page) + 1;
        $w = array(
            'posicion' => $idbanner
        );
        
        
        switch ($perfil) {
            case 'Modelos':
                $where['perfil'] = 'A-MujeresModelos';
                $data['perfil'] = 'Modelos';
                $data['banner'] = $this->banners_model->get_where('banners_platynum', $w);
                $data['banners'] = $this->banners_model->gets('banners_platynum');
                break;
            case 'Masajistas':
                $where['perfil'] = 'B-Mujeres-Masajistas';
                $data['perfil'] = 'Masajistas';
                $data['banner'] = $this->banners_model->get_where('banners_platynum_masajes', $w);
                $data['banners'] = $this->banners_model->gets('banners_platynum_masajes');
                break;
            case 'AlgoDistinto':
                $where['perfil'] = 'C-Mujeres-AlgoDistinto';
                $data['perfil'] = 'AlgoDistinto';
                $data['banner'] = $this->banners_model->get_where('banners_platynum_algodistinto', $w);
                $data['banners'] = $this->banners_model->gets('banners_platynum_algodistinto');
                break;
            case 'Fantasias':
                $where['perfil'] = 'D-Mujeres-Fantasias';
                $data['perfil'] = 'Fantasias';
                $data['banner'] = $this->banners_model->get_where('banners_platynum_fantasias', $w);
                $data['banners'] = $this->banners_model->gets('banners_platynum_fantasias');
                break;
            default:
                $where['perfil'] = 'A-MujeresModelos';
                $data['perfil'] = 'Modelos';
                break;
        }
        
        
        
        
        
        /*
         * inicio paginador
         */
        $total_rows = $this->modelos_model->get_count_where($where);
        $config['reuse_query_string'] = TRUE;
        $config['base_url'] = '/web/pagina/'.$perfil.'/';
        $config['total_rows'] = $total_rows['cantidad'];
        $config['per_page'] = $per_page;
        $config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = '<i class="fa fa-angle-double-right"></i>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['links'] = $this->pagination->create_links();
        $data['total_rows'] = $total_rows;
        /*
         * fin paginador
         */
        
        $data['modelos'] = $this->modelos_model->gets_where_limit($where, $per_page, $pagina);
        
        $where = array(
            'perfil' => 'A-MujeresModelos',
            'estado' => 'habilitado'
        );
        $data['modelos_todas'] = $this->modelos_model->gets_where($where);
        
        $where = array(
            'perfil' => 'B-Mujeres-Masajistas',
            'estado' => 'habilitado'
        );
        $data['masajistas_todas'] = $this->modelos_model->gets_where($where);
        
        
        $this->load->view('layout_web/header', $data);
        $this->load->view('web/pagina');
        $this->load->view('layout_web/footer');
    }
}
?>
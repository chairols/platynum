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
            'banners_model',
            'pelos_model',
            'barrios_model',
            'ciudades_model',
            'idiomas_model',
            'novedades_model'
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
        $or_where = array(
            'estado' => 'deshabilitado'
        );
        $per_page = 54;
        
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
        $total_rows = $this->modelos_model->get_count_where_or_where($where, $or_where);
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
        
        $data['modelos'] = $this->modelos_model->gets_where_limit($where, $or_where, $per_page, $pagina);
        
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
    
    
    public function buscar() {
        $data['perfil'] = 'Buscador';
        $data['javascript'] = array(
            '/assets/modulos/web/js/buscar.js'
        );
        
        $data['pelos'] = $this->pelos_model->gets();
        $data['barrios'] = $this->barrios_model->gets();
        $data['ciudades'] = $this->ciudades_model->gets();
        $data['idiomas'] = $this->idiomas_model->gets();
        
        $this->load->view('layout_web/header', $data);
        $this->load->view('web/buscar');
        $this->load->view('layout_web/footer');
    }
    
    public function buscador() {
        var_dump($this->input->post());
        
        $where = array(
            'estado' => 'habilitado',
            'visible' => '1'
        );
        $like = array();
        
        if($this->input->post('colordepelo') != '') {
            $where['colordepelo'] = $this->input->post('colordepelo');
        }
        if($this->input->post('altura') != '') {
            switch ($this->input->post('altura')) {
                case '1':
                    $where['altura <='] = '150';
                    break;
                case '2':
                    $where['altura >='] = '151';
                    $where['altura <='] = '155';
                    break;
                case '3':
                    $where['altura >='] = '156';
                    $where['altura <='] = '160';
                    break;
                case '4':
                    $where['altura >='] = '161';
                    $where['altura <='] = '165';
                    break;
                case '5':
                    $where['altura >='] = '166';
                    $where['altura <='] = '170';
                    break;
                case '6':
                    $where['altura >='] = '171';
                    $where['altura <='] = '175';
                    break;
                case '7':
                    $where['altura >='] = '176';
                    $where['altura <='] = '180';
                    break;
                case '8':
                    $where['altura >='] = '181';
                    break;
            }
        }
        
        if($this->input->post('medidas1') != '') {
            switch ($this->input->post('medidas1')) {
                case '1':
                    $where['medidas1 <='] = '80';
                    break;
                case '2':
                    $where['medidas1 >='] = '81';
                    $where['medidas1 <='] = '85';
                    break;
                case '3':
                    $where['medidas1 >='] = '86';
                    $where['medidas1 <='] = '90';
                    break;
                case '4':
                    $where['medidas1 >='] = '91';
                    $where['medidas1 <='] = '95';
                    break;
                case '5':
                    $where['medidas1 >='] = '96';
                    $where['medidas1 <='] = '100';
                    break;
                case '6':
                    $where['medidas1 >='] = '101';
                    $where['medidas1 <='] = '105';
                    break;
                case '7':
                    $where['medidas1 >='] = '106';
                    $where['medidas1 <='] = '110';
                    break;
                case '8':
                    $where['medidas1 >='] = '111';
                    break;
            }
        }
        
        if($this->input->post('barrio') != '') {
            $where['barrio'] = $this->input->post('barrio');
        }
        
        if($this->input->post('ciudad') != '') {
            $where['ciudad'] = $this->input->post('ciudad');
        }
        
        if($this->input->post('a_domicilio') == 'si') {
            $where['a_domicilio'] = 'on';
        } else {
            $where['a_domicilio !='] = 'on';
        }
        
        if($this->input->post('a_hotel') == 'si') {
            $where['a_hotel'] = 'on';
        } else {
            $where['a_hotel !='] = 'on';
        }
        
        if($this->input->post('con_lugar') == 'si') {
            $where['con_lugar'] = 'on';
        } else {
            $where['con_lugar !='] = 'on';
        }
        
        if($this->input->post('con_email') == 'si') {
            $where['email !='] = ''; 
        } else {
            $where['email'] = '';
        }
        
        if($this->input->post('viaja_argentina') == 'si') {
            $where['viaja'] = 'on';
            $like['viaja_donde'] = 'Argentina';
        } else {
            $where['viaja !='] = 'on';
        }
        
        if($this->input->post('visa_usa') == 'si') {
            $where['visa_usa'] = 'on';
        } else {
            $where['visa_usa !='] = 'on';
        } 
        
        if($this->input->post('idiomas') != '') {
            $like['idiomas'] = $this->input->post('idiomas');
        }
        
        
        var_dump($where);
        var_dump($like);
        
        
        $data['modelos'] = $this->modelos_model->gets_where($where, $like);
        
        
        $this->load->view('web/buscador', $data);
    }
    
    public function novedades() {
        $data['perfil'] = 'Novedades';
        
        $data['novedades'] = $this->novedades_model->gets_para_web();
        foreach($data['novedades'] as $key => $value) {
            $where = array(
                'modelos.ID' => $value['idmodelo']
            );
            $data['novedades'][$key]['modelo'] = $this->modelos_model->get_where($where);
        }
        
        $this->load->view('layout_web/header', $data);
        $this->load->view('web/novedades');
        $this->load->view('layout_web/footer');
    }
}
?>
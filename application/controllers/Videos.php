<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array(
            'modelos_model'
        ));
    }

    public function listar() {
        $data['perfil'] = 'Videos';
        $where = array(
            'videos.estado' => 'A'
        );
        $data['videos'] = $this->modelos_model->gets_videos_where($where);
        foreach($data['videos'] as $key => $value) {
            $where = array(
                'modelos.ID' => $value['idmodelo']
            );
            $data['videos'][$key]['modelo'] = $this->modelos_model->get_where($where);
        }
        
        $this->load->view('layout_web/header', $data);
        $this->load->view('videos/listar');
        $this->load->view('layout_web/footer');
    }

}

?>
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Novedades_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function set($datos) {
        $this->db->insert('novedades', $datos);
        return $this->db->insert_id();
    }

    public function gets_para_web() {
        $query = $this->db->query("SELECT 
                                        *
                                    FROM
                                        novedades
                                    ORDER BY
                                        fecha DESC, idnovedad DESC");
        
        return $query->result_array();
    }
}

?>
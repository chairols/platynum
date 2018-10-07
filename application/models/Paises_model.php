<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paises_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /*
     *  Modelos/agregar
     */
    public function gets() {
        $this->db->select('*');
        $this->db->from('paises');
        $this->db->where('estado', 'on');
        $this->db->order_by('value');

        $query = $this->db->get();
        return $query->result_array();
    }
}
?>
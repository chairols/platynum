<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pieles_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /*
     *  Modelos/agregar
     */
    public function gets() {
        $this->db->select('*');
        $this->db->from('colordepiel');
        $this->db->order_by('value_es');

        $query = $this->db->get();
        return $query->result_array();
    }
}
?>
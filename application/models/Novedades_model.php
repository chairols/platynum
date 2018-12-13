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
                                        *, YEAR(fecha) as anio, MONTH(fecha) as mes
                                    FROM
                                        novedades
                                    GROUP BY
                                        YEAR(fecha), MONTH(fecha)
                                    ORDER BY
                                        YEAR(fecha) DESC, MONTH(fecha) DESC");
        
        return $query->result_array();
    }
}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
    
    /*
     *  Usuarios/login
     */
    public function get_usuario($usuario, $password) {
        $query = $this->db->query("SELECT 
                                        id,
                                        usuario,
                                        tipo
                                    FROM
                                        usuarios
                                    WHERE
                                        usuario = '$usuario' AND
                                        password = '$password'");
        return $query->row_array();
    }
}
?>
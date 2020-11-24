<?php

class programstudi extends CI_Model{

    public function getAllprogramstudi(){
        return $this->db->get('programstudi')->result_array();
    }
}

?>
<?php

class UrunHammaddeMapping extends CI_Model{
    public function getUrunHammaddeMapping(){
        $query = $this->db->get('UrunHammaddeMapping');
        return $query->result();
    }

    public function insertUrunHammaddeMapping($formDataMap){
        return $this->db->insert('UrunHammaddeMapping', $formDataMap);
    }

    /**
     */
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
}
?>
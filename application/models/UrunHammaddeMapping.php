<?php

class UrunHammaddeMapping extends CI_Model{
    public function getUrunHammaddeMapping(){
        $query = $this->db->get('UrunHammaddeMapping');
        return $query->result();
    }

    public function insertUrunHammaddeMapping($formData){
        return $this->db->insert('UrunHammaddeMapping', $formData);
    }

    /**
     */
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
}
?>
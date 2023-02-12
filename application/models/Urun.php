<?php

class Urun extends CI_Model{
    public function getUruns(){
        $query = $this->db->get('urun');
        return $query->result();
    }

    public function insertUrun($formData){
        return $this->db->insert('urun', $formData);
    }

    public function getUrunByName($filter){

        $this->db->where('name', $filter);
        $query = $this->db->get('urun');
        return $query->result();
    }

    /**
     */
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
}
?>
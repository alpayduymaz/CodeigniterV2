<?php

class Hammadde extends CI_Model{
    public function getHammaddes(){
        $query = $this->db->get('hammadde');
        return $query->result();
    }

    public function insertHammadde($formData){
        return $this->db->insert('hammadde', $formData);
    }

    public function getHammaddeByName($filter){

        $this->db->where('Id', $filter);
        $query = $this->db->get('hammadde');
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

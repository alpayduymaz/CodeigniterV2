<?php

class Home extends CI_Model{
    public function getHammaddes(){
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

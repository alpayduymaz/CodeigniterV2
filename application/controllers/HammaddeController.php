<?php
class HammaddeController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hammadde');
        $this->load->helper('url');

        
    }

    public function insertUrun()
    {
        $fromData = array(
            'Name' => $this->select->post('hammadde'),
        );
    }
    public function insert(){
        $fromData = array(
            'Name' => $this->input->post('name'),
        );
        $result = $this->Hammadde->insertHammadde($fromData);
        if ($result == 1)
            redirect("/HammaddeController/getHammaddes");
        else
            echo $result;
    }
    public function getHammaddes(){
        $data['hammadde'] = $this->Hammadde->getHammaddes();
        $this->load->view('Hammaddes',$data);
    }
}


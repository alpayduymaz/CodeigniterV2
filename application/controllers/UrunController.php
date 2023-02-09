<?php
class UrunController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Urun');
        $this->load->model('Hammadde');
        $this->load->helper('url');

        
    }

    
    
    public function insert(){
        $fromData = array(
            'Name' => $this->input->post('name'),
        );
        $result = $this->Urun->insertUrun($fromData);
        if ($result == 1)
            redirect("/UrunController/getUruns");
        else
            echo $result;
    }
    public function getUruns(){
        $data['urun'] = $this->Urun->getUruns();
        $data['hammadde'] = $this->Hammadde->getHammaddes();
        $this->load->view('Uruns',$data);
    }
    
}
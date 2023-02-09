<?php

class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Hammadde');
        
    }

    public function getHammaddes(){
        $data['hammadde'] = $this->Home->getHammaddes();
        $this->load->view('Hammaddes',$data);
    }
}

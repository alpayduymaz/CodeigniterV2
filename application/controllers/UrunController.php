<?php
class UrunController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Urun');
        $this->load->model('Hammadde');
        $this->load->model('UrunHammaddeMapping');
        $this->load->helper('url');

        
    }

    public function insertUrunIcerik(){
      
    }
    
    public function insert(){
        $fromData = array(
            'Name' => $this->input->post('name'),
        );
        $result = $this->Urun->insertUrun($fromData);

        
        

        $fromDataMap = array(
         'urunId' => $this->Urun->getUruns().count() + 1, // burda o name ait ürünü dbden çekip idsini atcan
         'hammaddeId' => filter_input(INPUT_POST, 'hammadde', FILTER_SANITIZE_STRING),
         );

         $resultMap = $this->UrunHammaddeMapping->insertUrunHammaddeMapping($fromDataMap);
         

        if ($result == 1 && $resultMap == 1)
            redirect("/UrunController/getUruns");
        else
            echo $result;
    }
    public function getUruns(){
        $data['urun'] = $this->Urun->getUruns();
        $data['hammadde'] = $this->Hammadde->getHammaddes();
        $data['urunHammaddeMapping'] = $this->UrunHammaddeMapping->getUrunHammaddeMapping();
        $this->load->view('Uruns',$data);
    }
    
    
}
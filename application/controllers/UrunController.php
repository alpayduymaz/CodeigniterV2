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

    public function insert(){
        $fromData = array(
            'Name' => $this->input->post('name'),
        );
        $result = $this->Urun->insertUrun($fromData);

        $datas = explode('|',$_POST['hammaddeId']);
        $id = $datas[0];
        $name = $datas[1];
        

        $fromDataMap = array(
         'urunId' => 2,
         'urunAdi' => $this->input->post('name'),
         'hammaddeId' => 3,
         'hammaddeAdi' => "Yağ",
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
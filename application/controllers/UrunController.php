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

        $resUrun = $this->Urun->getUrunByName($this->input->post('name'));
        echo "<script>console.log('Debug Objects: " . json_encode($resUrun[0]->Id) . "' );</script>";
        
        $resHammadde = $this->Hammadde->getHammaddeByName($_POST['hammaddeler']);
        echo "<script>console.log('Debug Objects: " . json_encode($resHammadde) . "' );</script>";

        $fromDataMap = array(
         'urunId' => json_encode($resUrun[0]->Id),
         'urunAdi' => $this->input->post('name'),
         'hammaddeId' => $_POST['hammaddeler'],
         'hammaddeAdi' => json_encode($resHammadde[0]->name),
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
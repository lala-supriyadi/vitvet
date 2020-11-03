<?php

use \modules\controllers\MainController;

class GrafikController extends MainController {

public function index()
    {
    	$this->model('grafik');
        // $data['pie_data']=$this->grafikmodel->GetPie();
        // $this->load->view('index.php',$data);
        
        

        

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $bulan           = isset($_POST["bulan"]) ? $_POST["bulan"]  : "";
            $tahun          = isset($_POST["tahun"])        ? $_POST["tahun"]         : "";
            $dataMenu = $this->grafik->GetPieSearch($bulan,$tahun);
            $GetPieSearchByJenisPet = $this->grafik->GetPieSearchByJenisPet($bulan,$tahun);
            $GetPieSearchByPenyakit = $this->grafik->GetPieSearchByPenyakit($bulan,$tahun);
            $this->template('grafik_hasil', array('grafik' => $dataMenu, 'GetPieSearchByJenisPet' => $GetPieSearchByJenisPet, 'GetPieSearchByPenyakit'=>$GetPieSearchByPenyakit));
        }else{
            $dataMenu = $this->grafik->GetPie();
            $GetKuesioner = $this->grafik->GetKuesioner();
            // $dataMenu = $this->grafik->GetPie();
            // echo "<pre>";print_r($GetKuesioner);die();
            $this->template('grafik', array('grafik' => $dataMenu, 'GetKuesioner' => $GetKuesioner));
        }
        // $this->template('grafik',$data);
    }

}
?>
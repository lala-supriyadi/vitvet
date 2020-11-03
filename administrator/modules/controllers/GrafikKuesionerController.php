<?php

use \modules\controllers\MainController;

class GrafikKuesionerController extends MainController {

public function index()
    {
    	$this->model('grafik');
        // $data['pie_data']=$this->grafikmodel->GetPie();
        // $this->load->view('index.php',$data);
        /*$dataMenu = $this->grafik->GetPie();
        $GetKuesioner = $this->grafik->GetKuesioner();*/
        // echo "<pre>";print_r($GetKuesioner);die();

        
        // $this->template('grafik',$data);

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $bulan           = isset($_POST["bulan"]) ? $_POST["bulan"]  : "";
            $tahun          = isset($_POST["tahun"])        ? $_POST["tahun"]         : "";
            $GetKuesioner = $this->grafik->GetKuesionerSearch($bulan,$tahun);
            $GetKuesionerSearchCount = $this->grafik->GetKuesionerSearchCount($bulan,$tahun);
            $jumlah_data = count($GetKuesionerSearchCount);
            // print_r($jumlah_data);die();
            $GetPertanyaan = $this->grafik->GetPertanyaan();
            $this->template('grafik_kuesioner_hasil', array('GetKuesioner' => $GetKuesioner,'GetPertanyaan' => $GetPertanyaan , 'jumlah_data' => $jumlah_data));
        }else{
            $dataMenu = $this->grafik->GetPie();
            $GetKuesioner = $this->grafik->GetKuesioner();
            $GetPertanyaan = $this->grafik->GetPertanyaan();
            // $dataMenu = $this->grafik->GetPie();
            // echo "<pre>";print_r($dataMenu);die();
            $this->template('grafik_kuesioner', array('grafik' => $dataMenu, 'GetKuesioner' => $GetKuesioner, 'GetPertanyaan' => $GetPertanyaan));
        }
    }

}
?>
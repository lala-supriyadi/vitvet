<?php


use \modules\controllers\MainController;

class PertanyaanController extends MainController{

    public function index() {
        $error      = array();
        $success    = null;
        $this->model('pertanyaan');

        $data = $this->pertanyaan->get();

         if($_SERVER["REQUEST_METHOD"] == "POST") {

            $email      = isset($_POST["email"]) ? $_POST["email"] : "";
            $tanggal      = isset($_POST["tanggal"]) ? $_POST["tanggal"] : "";
            $dataMenu = $this->pertanyaan->getPertanyaan($email,$tanggal);

            // print_r(count($dataMenu));die();

            if (count($dataMenu) >= 1) {

                $success = "Anda Sudah Mengisi kuesioner Untuk Hari ini.";

            }else{
                $jumlah_data      = isset($_POST["jumlah_data"]) ? $_POST["jumlah_data"] : "";

                if(empty($jumlah_data) || $jumlah_data == "") {

                    array_push($error, "Kategori artikel harus di isi.");
                }

                if(count($error) == 0) {

                    $jumlah_data      = isset($_POST["jumlah_data"]) ? $_POST["jumlah_data"] : "";
                    $this->model('kuesioner');

                    for ($i=1; $i <$jumlah_data ; $i++) { 
                        
                        $nilai = "nilai".$i;
                        $id_pertanyaan = "id_pertanyaan".$i;
                        
                        $data_nilai      = isset($_POST[$nilai]) ? $_POST[$nilai] : "";
                        $data_pertanyaan      = isset($_POST[$id_pertanyaan]) ? $_POST[$id_pertanyaan] : "";

                        $insert = $this->kuesioner->insert(
                            array(
                                'id_pertanyaan'   => $data_pertanyaan,
                                'nilai'           => $data_nilai,
                                'tanggal'           => $tanggal,
                                'email'           => $email
                            )
                        );
                    }
                    

                    if($insert) {

                        $success = "Data Berhasil di simpan.";
                    }
                }
            }

            

        }
        // print_r($success);die();

        $this->template('pertanyaan', array('pertanyaan' => $data, 'success' => $success));
    }

    // untuk menampilkan detail pertanyaan

    public function detail() {

        $id = isset($_GET["id"]) ? $_GET["id"] : "0";

        $this->model('pertanyaan');

        $pertanyaan = $this->pertanyaan->getWhere(array('id_pertanyaan' => $id));

        $prev    = $this->pertanyaan->getPrev($id);
        $next    = $this->pertanyaan->getNext($id);

        $this->template('detailpertanyaan', array('pertanyaan' => $pertanyaan, 'prev' => $prev, 'next' => $next));

    }

}
?>
<?php


use \modules\controllers\MainController;

class PertanyaanController extends MainController {

    public function index() {

        $this->model('pertanyaan');

        $data = $this->pertanyaan->get();

        $this->template('pertanyaan', array('pertanyaan' => $data));
    }

    public function delete() {

        $id = isset($_GET["id"]) ? $_GET["id"] : 0;

        $this->model('pertanyaan');

        $delete = $this->pertanyaan->delete(array('id_pertanyaan' => $id));

        if($delete) {
            $this->back();
        }

    }

    public function insert() {

        $this->model('pertanyaan');

        $error      = array();
        $success    = null;

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $pertanyaan      = isset($_POST["pertanyaan"]) ? $_POST["pertanyaan"] : "";

            if(empty($pertanyaan) || $pertanyaan == "") {

                array_push($error, "Pertanyaan artikel harus di isi.");
            }

            if(count($error) == 0) {

                $insert = $this->pertanyaan->insert(

                    array(
                        'pertanyaan'   => $pertanyaan
                    )
                );

                if($insert) {

                    $success = "Data Berhasil di simpan.";
                }
            }

        }

        $this->template('frmPertanyaan', array('error' => $error, 'success' => $success, 'title' => 'Tambah Pertanyaan'));

    }

    public function update() {

        $this->model('pertanyaan');

        $error      = array();
        $success    = null;


        $id = isset($_GET["id"]) ? $_GET["id"] : "";

        $data = $this->pertanyaan->getWhere(array(

            'id_pertanyaan' => $id
        ));

        if(count($data) == 0) $this->redirect(PATH . '?page=pertanyaan');

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $pertanyaan      = isset($_POST["pertanyaan"]) ? $_POST["pertanyaan"] : "";

            if(empty($pertanyaan) || $pertanyaan == "") {

                array_push($error, "Role artikel harus di isi.");
            }
            $updateArrayData = array(

                'pertanyaan' => $pertanyaan
            );

            if(count($error) == 0) {

                $update = $this->pertanyaan->update($updateArrayData, array('id_pertanyaan' => $id));

                if($update) {

                    $success = "Data Berhasil di simpan.";
                }
            }

        }

        $this->template('frmPertanyaan', array('pertanyaan' => $data[0],'error' => $error, 'success' => $success, 'title' => 'Update Pertanyaan'));

    }
}
?>
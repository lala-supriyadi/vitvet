<?php

use \modules\controllers\MainController;

class PelangganController extends MainController {

    public function index() {

        $this->model('pelanggan');

        $data = $this->pelanggan->get();

        $this->template('pelanggan', array('pelanggan' => $data));
    }

    public function detail() {

        $id = isset($_GET["id"]) ? $_GET["id"] : '0';

        $this->model('pelanggan');

        $data = $this->pelanggan->getWhere(
            array(
                'id_pelanggan'  => $id
            )
        );

        $this->template('detailPelanggan', array('pelanggan' => $data[0]));

    }

    public function delete() {

        $id = isset($_GET["id"]) ? $_GET["id"] : 0;

        $this->model('pelanggan');

        $data = $this->pelanggan->getWhere(array(
            'id_pelanggan'  => $id
        ));

        $delete = $this->pelanggan->delete(array('id_pelanggan' => $id));


        // if($delete) {
        //     unlink('../public/images/pelanggan/' . $data[0]->images);
        //   $this->back();
        // }
        $this->back();
    }

    public function insert() {

        $this->model('pelanggan');

        $error      = array();
        $success    = null;

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $nama           = isset($_POST["nama_lengkap"]) ? $_POST["nama_lengkap"]  : "";
            $email          = isset($_POST["email"])        ? $_POST["email"]         : "";
            $noHP           = isset($_POST["no_hp"])        ? $_POST["no_hp"]         : "";
            $alamat         = isset($_POST["alamat"])       ? $_POST["alamat"]        : "";
            // $username       = isset($_POST["username"])     ? $_POST["username"]      : "";
            // $password       = isset($_POST["password"])     ? $_POST["password"]      : "";
            // $rePassword     = isset($_POST["re_password"])  ? $_POST["re_password"]   : "";
            $nama_pet       = isset($_POST["nama_pet"])     ? $_POST["nama_pet"]     : "";
            $jenis_pet      = isset($_POST["jenis_pet"])    ? $_POST["jenis_pet"]     : "";
            $umur_pet       = isset($_POST["umur_pet"])     ? $_POST["umur_pet"]      : "";
            $jk_pet         = isset($_POST["jk_pet"])       ? $_POST["jk_pet"]        : "";
            $penyakit       = isset($_POST["penyakit"])     ? $_POST["penyakit"]      : "";

            // $foto           = isset($_FILES["images"])      ? $_FILES["images"]       : "";

            if(empty($nama) || $nama == "") {

                array_push($error, "Nama harus di isi.");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                array_push($error, "Format e-mail salah.");
            }
            if(empty($nama_pet) || $nama_pet == "") {

                array_push($error, "Nama pet harus di isi.");
            }
            if(empty($jenis_pet) || $jenis_pet == "") {

                array_push($error, "Jenis pet harus di isi.");
            }
            if(empty($umur_pet) || $umur_pet == "") {

                array_push($error, "Umur pet harus di isi.");
            }
            if(empty($jk_pet) || $jk_pet == "") {

                array_push($error, "Jenis kelamin pet harus di isi.");
            }
            if(empty($penyakit) || $penyakit == "") {

                array_push($error, "Penyakit harus di isi.");
            }

            // if(!empty($foto["name"]) && $foto["type"] != 'image/jpg' && $foto["type"] != 'image/jpeg' && $foto["type"] != 'image/png') {
            //     array_push($error, "Gambar hanya boleh .JPG/.PNG");
            // }

            if(count($error) == 0) {

                // $imageName = $foto["name"];

                // if($foto["name"]) {

                //     $imageName = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nama) . '.jpg';

                //     move_uploaded_file($foto["tmp_name"], '../public/images/pelanggan/' . $imageName);
                // }

                $insert = $this->pelanggan->insert(

                    array(
                        'nama_lengkap'  => $nama,
                        'email'         => $email,
                        'no_hp'         => $noHP,
                        'alamat'        => $alamat,
                        'nama_pet'      => $nama_pet,
                        // 'username'      => $username,
                        // 'password'      => md5($password),
                        'jenis_pet'     => ($jenis_pet),
                        'umur_pet'      => ($umur_pet),
                        'jk_pet'        => ($jk_pet),
                        'penyakit'      => ($penyakit),
                        'tanggal'       => date('Y-m-d')
                        // 'images'        => $imageName
                    )
                );

                if($insert) {

                    $success = "Data Berhasil di simpan.";
                }
            }


        }

        $this->template('frmPelanggan', array('error' => $error, 'success' => $success, 'title' => 'Tambah Pelanggan'));

    }

    public function update() {

        $id = isset($_GET["id"]) ? $_GET["id"] : '0';

        $this->model('pelanggan');

        $data = $this->pelanggan->getWhere(
            array(
                'id_pelanggan'  => $id
            )
        );

        $error      = array();
        $success    = null;

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $nama           = isset($_POST["nama_lengkap"]) ? $_POST["nama_lengkap"]  : "";
            $email          = isset($_POST["email"])        ? $_POST["email"]         : "";
            $noHP           = isset($_POST["no_hp"])        ? $_POST["no_hp"]         : "";
            $alamat         = isset($_POST["alamat"])       ? $_POST["alamat"]        : "";
            // $username       = isset($_POST["username"])     ? $_POST["username"]      : "";
            // $password       = isset($_POST["password"])     ? $_POST["password"]      : "";
            // $rePassword     = isset($_POST["re_password"])  ? $_POST["re_password"]   : "";
            $nama_pet       = isset($_POST["nama_pet"])     ? $_POST["nama_pet"]      : "";
            $jenis_pet      = isset($_POST["jenis_pet"])    ? $_POST["jenis_pet"]     : "";
            $umur_pet       = isset($_POST["umur_pet"])     ? $_POST["umur_pet"]      : "";
            $jk_pet         = isset($_POST["jk_pet"])       ? $_POST["jk_pet"]        : "";
            $penyakit       = isset($_POST["penyakit"])     ? $_POST["penyakit"]      : "";

            // $foto           = isset($_FILES["images"])      ? $_FILES["images"]      : "";

            if(empty($nama) || $nama == "") {

                array_push($error, "Nama harus di isi.");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                array_push($error, "Format e-mail salah.");
            }

            // if(!empty($foto["name"]) && $foto["type"] != 'image/jpg' && $foto["type"] != 'image/jpeg' && $foto["type"] != 'image/png') {
            //     array_push($error, "Gambar hanya boleh .JPG/.PNG");
            // }

            if(count($error) == 0) {


                // $imageName = $foto["name"];

                $dataUpdate = array(
                    'nama_lengkap'  => $nama,
                    'email'         => $email,
                    'no_hp'         => $noHP,
                    'alamat'        => $alamat
                );

                // if($foto["name"]) {

                //     $imageName = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nama) . '.jpg';

                //     unlink('../public/images/pelanggan/' . $data[0]->images);
                //     move_uploaded_file($foto["tmp_name"], '../public/images/pelanggan/' . $imageName);

                //     $dataUpdate["images"] = $imageName;
                // }

                // if(isset($password) && $password != "") {

                //     if($rePassword == "" || $password != $rePassword) {

                //         array_push($error, "Password dan Re-Type Password harus sama.");

                //     }else {

                //         $dataUpdate["password"] = md5($password);
                //     }
                // }

                if(count($error) == 0) {

                    $update = $this->pelanggan->update($dataUpdate, array('id_pelanggan' => $id));

                    if($update) {

                        $success = "Data Berhasil di simpan.";
                    }
                }
            }


        }

        $this->template('frmPelanggan', array('pelanggan' => $data[0], 'error' => $error, 'success' => $success, 'title' => 'Update Pelanggan'));

    }
}
?>
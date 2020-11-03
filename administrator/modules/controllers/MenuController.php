<?php


use \modules\controllers\MainController;

class menuController extends MainController {

    public function index() {

        $this->model('menu');

        // $data = $this->menu->get();
        $dataMenu = $this->menu->getMenu();
        // echo "<pre>";print_r($dataMenu);die();

        $this->template('menu', array('menu' => $dataMenu));
    }

    public function delete() {

        $id = isset($_GET["id"]) ? $_GET["id"] : 0;

        $this->model('menu');

        $delete = $this->menu->delete(array('menu_id' => $id));

        if($delete) {
            $this->back();
        }

    }

    public function insert() {

        $this->model('menu');

        $error      = array();
        $success    = null;

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $men_menu_id      = isset($_POST["men_menu_id"]) ? $_POST["men_menu_id"] : "";
            $menu_name      = isset($_POST["menu_name"]) ? $_POST["menu_name"] : "";
            $menu_link      = isset($_POST["menu_link"]) ? $_POST["menu_link"] : "";
            // print_r($menu_name);die();

            if(empty($menu_name) || $menu_name == "" || $menu_link == "") {

                array_push($error, "menu harus di isi.");
            }

            if(count($error) == 0) {

                $insert = $this->menu->insert(

                    array(
                        'menu_name'   => $menu_name,
                        'menu_link'   => $menu_link,
                        'menu_status' => 1
                    )
                );

                if($insert) {

                    $success = "Data Berhasil di simpan.";
                }
            }

        }

        $menu_list = $this->menu->get();
        // print_r($menu_list);die();
        $this->template('frmmenu', array( 'menu_list' => $menu_list,'error' => $error, 'success' => $success, 'title' => 'Tambah menu'));

    }

    public function update() {

        $this->model('menu');

        $error      = array();
        $success    = null;


        $id = isset($_GET["id"]) ? $_GET["id"] : "";

        $data = $this->menu->getWhere(array(

            'menu_id' => $id
        ));
        // print_r($data);die();
        if(count($data) == 0) $this->redirect(PATH . '?page=menu');

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $men_menu_id      = isset($_POST["men_menu_id"]) ? $_POST["men_menu_id"] : "";
            $menu_name      = isset($_POST["menu_name"]) ? $_POST["menu_name"] : "";
            $menu_link      = isset($_POST["menu_link"]) ? $_POST["menu_link"] : "";

            if(empty($menu_name) || $menu_name == "") {

                array_push($error, "menu harus di isi.");
            }

            if($men_menu_id == ""){
                $updateArrayData = array(
                    // 'men_menu_id'   => $men_menu_id,
                    'menu_name'   => $menu_name,
                    'menu_link'   => $menu_link,
                    'menu_status' => 1
                );
            }else{
                $updateArrayData = array(
                    'men_menu_id'   => $men_menu_id,
                    'menu_name'   => $menu_name,
                    'menu_link'   => $menu_link,
                    'menu_status' => 1
                );
            }
            

            if(count($error) == 0) {

                $update = $this->menu->update($updateArrayData, array('menu_id' => $id));

                if($update) {

                    $success = "Data Berhasil di simpan.";
                }
            }

        }
        $menu_list = $this->menu->get();
        // print_r($menu_list);die();
        // print_r($data["menu"]);die();
        $this->template('frmmenu', array('menu_list' => $menu_list,'menu' => $data[0],'error' => $error, 'success' => $success, 'title' => 'Edit menu'));

    }
}
?>
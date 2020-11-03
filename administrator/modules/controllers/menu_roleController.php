<?php


use \modules\controllers\MainController;

class menu_roleController extends MainController {

    public function index() {

        $this->model('menu_role');

        $data = $this->menu_role->get();
        // echo "<pre>";print_r($datamenu_role);die();

        $this->template('menu_role', array('menu_role' => $data));
    }

    public function delete() {

        $id = isset($_GET["id"]) ? $_GET["id"] : 0;

        $this->model('menu_role');

        $delete = $this->menu_role->delete(array('menu_role_id' => $id));

        if($delete) {
            $this->back();
        }

    }

    public function insert() {

        $this->model('menu_role');

        $error      = array();
        $success    = null;

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $men_menu_role_id      = isset($_POST["men_menu_role_id"]) ? $_POST["men_menu_role_id"] : "";
            $menu_role_name      = isset($_POST["menu_role_name"]) ? $_POST["menu_role_name"] : "";
            $menu_role_link      = isset($_POST["menu_role_link"]) ? $_POST["menu_role_link"] : "";
            // print_r($menu_role_name);die();

            if(empty($menu_role_name) || $menu_role_name == "" || $menu_role_link == "") {

                array_push($error, "menu_role harus di isi.");
            }

            if(count($error) == 0) {

                $insert = $this->menu_role->insert(

                    array(
                        'men_menu_role_id'   => $men_menu_role_id,
                        'menu_role_name'   => $menu_role_name,
                        'menu_role_link'   => $menu_role_link
                    )
                );

                if($insert) {

                    $success = "Data Berhasil di simpan.";
                }
            }

        }

        $menu_role_list = $this->menu_role->get();
        // print_r($menu_role_list);die();
        $this->template('frmmenu_role', array( 'menu_role_list' => $menu_role_list,'error' => $error, 'success' => $success, 'title' => 'Tambah menu_role'));

    }

    public function update() {

        $this->model('menu_role');

        $error      = array();
        $success    = null;


        $id = isset($_GET["id"]) ? $_GET["id"] : "";

        $data = $this->menu_role->getWhere(array(

            'menu_role_id' => $id
        ));
        // print_r($data);die();
        if(count($data) == 0) $this->redirect(PATH . '?page=menu_role');

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $men_menu_role_id      = isset($_POST["men_menu_role_id"]) ? $_POST["men_menu_role_id"] : "";
            $menu_role_name      = isset($_POST["menu_role_name"]) ? $_POST["menu_role_name"] : "";
            $menu_role_link      = isset($_POST["menu_role_link"]) ? $_POST["menu_role_link"] : "";

            if(empty($menu_role_name) || $menu_role_name == "") {

                array_push($error, "menu_role harus di isi.");
            }
            $updateArrayData = array(

                'men_menu_role_id'   => $men_menu_role_id,
                'menu_role_name'   => $menu_role_name,
                'menu_role_link'   => $menu_role_link
            );

            if(count($error) == 0) {

                $update = $this->menu_role->update($updateArrayData, array('menu_role_id' => $id));

                if($update) {

                    $success = "Data Berhasil di simpan.";
                }
            }

        }
        $menu_role_list = $this->menu_role->get();
        // print_r($menu_role_list);die();
        // print_r($data["menu_role"]);die();
        $this->template('frmmenu_role', array('menu_role_list' => $menu_role_list,'menu_role' => $data[0],'error' => $error, 'success' => $success, 'title' => 'Edit menu_role'));

    }
}
?>
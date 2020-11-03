<?php


use \modules\controllers\MainController;

class RoleController extends MainController {

    public function index() {

        $this->model('role');

        $data = $this->role->get();

        $this->template('role', array('role' => $data));
    }

    public function delete() {

        $id = isset($_GET["id"]) ? $_GET["id"] : 0;

        $this->model('role');

        $delete = $this->role->delete(array('id_role' => $id));

        if($delete) {
            $this->back();
        }

    }
    
    private function insert_menu($menu_id, $role_id, $edit) {
        $this->model('menu_role');
        foreach ($menu_id as $id) {

            $insert = $this->menu_role->insert(
                    array(
                        'role_id'   => $role_id,
                        'menu_id'   => $id
                    )
                );
        }
    }

    public function insert() {

        $this->model('role');

        $error      = array();
        $success    = null;

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $role      = isset($_POST["role"]) ? $_POST["role"] : "";
            $parent = isset($_POST["parent"]) ? $_POST["parent"] : "";
            $child = isset($_POST["child"]) ? $_POST["child"] : "";
            $grandchild = isset($_POST["grandchild"]) ? $_POST["grandchild"] : "";


            if(empty($role) || $role == "") {

                array_push($error, "Role artikel harus di isi.");
            }

            if(count($error) == 0) {

                $insert = $this->role->insert(

                    array(
                        'nama_role'   => $role
                    )
                );

                $data = $this->role->getWhere(array(

                    'nama_role'   => $role
                ));


                $role_id = $data[0]->id_role;
                // print_r($role_id);die();
                // $role_id = $id;
                
                if(!empty($parent)){ $this->insert_menu($parent, $role_id, false); }
                if(!empty($child)){ $this->insert_menu($child, $role_id, false); }
                if(!empty($grandchild)){ $this->insert_menu($grandchild, $role_id, false); }

                if($insert) {

                    $success = "Data Berhasil di simpan.";
                }
            }

        }

        $this->model('menu');

        $result = $this->menu->get_whole_menu(null);
        $i = 0;
        foreach ($result as $menu) {
            $obj_id = $menu->menu_id;
            $child = $this->menu->get_whole_menu($obj_id);
            $result[$i]->submenu = $child;
            $j = 0;
            foreach ($child as $submenu) {
                $grandchild = $this->menu->get_whole_menu($submenu->menu_id);
                $result[$i]->submenu[$j]->subsubmenu = $grandchild;
                $j++;
            }
            $i++;
        }

        $result;

        $this->template('frmRole', array(
            'error' => $error, 
            'success' => $success, 
            'title' => 'Tambah Role',
            'menu' => $result,
            'active_menu' => array(),
            'edit' => false
            ));

    }

    public function menu_id($role_id){
        $this->model('menu');
        $result = $this->menu->get_menu($role_id);
        $arr = array();
        foreach ($result as $r){
            array_push($arr, $r->menu_id);
        }
        $this->data['active_menu'] = $arr;
    }

   

    public function update() {

        $this->model('role');

        $error      = array();
        $success    = null;


        $id = isset($_GET["id"]) ? $_GET["id"] : "";

        $parent = isset($_POST["parent"]) ? $_POST["parent"] : "";
        $child = isset($_POST["child"]) ? $_POST["child"] : "";
        $grandchild = isset($_POST["grandchild"]) ? $_POST["grandchild"] : "";

        /*$parent = $_GET('parent');
        $child = $_GET('child');
        $grandchild = $_GET('grandchild');*/
        // $id = $role_id;
        // $parent = $this->input->post('parent');
        // print_r($role_id);die();

        $data = $this->role->getWhere(array(

            'id_role' => $id
        ));

        if(count($data) == 0) $this->redirect(PATH . '?page=role');

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $role      = isset($_POST["role"]) ? $_POST["role"] : "";

            if(empty($role) || $role == "") {

                array_push($error, "Role artikel harus di isi.");
            }
            $updateArrayData = array(

                'nama_role' => $role
            );

            $this->menu_id($id);
           

            if(count($error) == 0) {
                $this->model('menu_role');
                $update = $this->role->update($updateArrayData, array('id_role' => $id));
                $delete = $this->menu_role->delete(array('role_id' => $id));

                $role_id = $id;
                
                if(!empty($parent)){ $this->insert_menu($parent, $role_id, false); }
                if(!empty($child)){ $this->insert_menu($child, $role_id, false); }
                if(!empty($grandchild)){ $this->insert_menu($grandchild, $role_id, false); }

                

                //insert menu
               

                if($update) {

                    $success = "Data Berhasil di simpan.";
                }
            }

        }

        $this->model('menu');
        
        $result = $this->menu->get_whole_menu(null);
        $i = 0;
        foreach ($result as $menu) {
            $obj_id = $menu->menu_id;
            $child = $this->menu->get_whole_menu($obj_id);
            $result[$i]->submenu = $child;
            $j = 0;
            foreach ($child as $submenu) {
                $grandchild = $this->menu->get_whole_menu($submenu->menu_id);
                $result[$i]->submenu[$j]->subsubmenu = $grandchild;
                $j++;
            }
            $i++;
        }

        $result;

        // echo "<pre>";print_r($result);die();
        
        $this->template('frmRole', array(
            'role' => $data[0],
            'error' => $error, 
            'success' => $success, 
            'title' => 'Update Role',
            'menu' => $result,
            'active_menu' => array(),
            'edit' => false
            ));

    }

    public function allmenu(){
        $this->model('menu');

        $result = $this->menu->get_whole_menu(null);
        $i = 0;
        foreach ($result as $menu) {
            $obj_id = $menu->menu_id;
            $child = $this->menu->get_whole_menu($obj_id);
            $result[$i]->submenu = $child;
            $j = 0;
            foreach ($child as $submenu) {
                $grandchild = $this->menu->get_whole_menu($submenu->menu_id);
                $result[$i]->submenu[$j]->subsubmenu = $grandchild;
                $j++;
            }
            $i++;
        }
        $this->data['menu'] = $result;
    }
}
?>
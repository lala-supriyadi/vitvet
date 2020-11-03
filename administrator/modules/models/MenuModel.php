<?php

class MenuModel extends Model{

    protected $tableName = "menu";

    public function get($params = "") {

        $data = array();

        $menu = $this->db->getAll($this->tableName)->toObject();

        // echo "<pre>";print_r($query);die();

        foreach($menu as $val) {

            $total = $this->db->getWhere('menu', array('menu_id' => $val->menu_id))->numRows();
            $val->total = $total;

            array_push($data, $val);
        }
        return $data;

    }

    public function getMenu(){
        
        $query = " SELECT A.*, parent.menu_name AS parent_menu_name FROM menu AS A LEFT JOIN menu AS parent ON A.menu_id = parent.men_menu_id ";     

        $this->db->query($query);

        return $this->db->execute()->toObject();

        // echo "<pre>";print_r($query);die();
    }

    public function get_whole_menu($parent = null) {
        if ($parent == null) {
            $sql = "SELECT menu_id, menu_name, menu_link from menu where menu_status = 1";
        } else {
            $sql = "SELECT menu_id, menu_name, menu_link from menu where men_menu_id = $parent and menu_status = 1";
        }
        $this->db->query($sql);
        // return $query->result();
        return $this->db->execute()->toObject();
    }

    public function get_active_menu($role_id, $parent = null, $ismaster = true) {
        // $ismaster = ($ismaster)?" and a.menu_ismaster = 1 ":" and a.menu_ismaster = 0";
        $isparent = (!empty($parent))?" and a.men_menu_id = $parent":" and a.men_menu_id is null";
        $sql = "select a.menu_id, a.menu_name, a.menu_link from menu a inner join menu_role b
            ON a.menu_id=b.menu_id 
            where a.menu_status = 1 and b.role_id='$role_id' ".$isparent."";
        $this->db->query($sql);
        return $this->db->execute()->toObject();
    }

     public function get_menu($role_id) {
        $sql = "select menu_id from menu_role where role_id='$role_id'";
        $this->db->query($sql);
        return $this->db->execute()->toObject();
    }

}
?>
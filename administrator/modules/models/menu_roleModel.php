<?php

class menu_roleModel extends Model{

    protected $tableName = "menu_role";

    public function get($params = "") {

        $data = array();

        $menu_role = $this->db->getAll($this->tableName)->toObject();

        // echo "<pre>";print_r($query);die();

        foreach($menu_role as $val) {

            $total = $this->db->getWhere('menu_role', array('role_id' => $val->role_id))->numRows();
            $val->total = $total;

            array_push($data, $val);
        }
        return $data;

    }


}
?>
<?php

class RoleModel extends Model{

    protected $tableName = "role";

    public function get($params = "") {

        $data = array();

        $role = $this->db->getAll($this->tableName)->toObject();


        foreach($role as $val) {

            $total = $this->db->getWhere('user', array('id_role' => $val->id_role))->numRows();
            $val->total = $total;

            array_push($data, $val);
        }
        return $data;

    }

}
?>
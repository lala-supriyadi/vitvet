<!-- <?php


// class UserModel extends Model{

//     protected $tableName = "user";

// }
?> -->

<?php
class UserModel extends Model{

    protected $tableName = "user";

    public function getPrev($id) {

        $sql = "select * from ". $this->tableName ." where id_user < ". $id ." order by id_user desc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function getNext($id) {

        $sql = "select * from ". $this->tableName ." where id_user > ". $id ." order by id_user asc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

}
?>
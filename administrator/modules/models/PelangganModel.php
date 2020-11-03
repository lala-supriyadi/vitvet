<?php


class PelangganModel extends Model{

    protected $tableName = "pelanggan";

    public function getPelanggan() {

        $sql = "SELECT * FROM pelanggan";
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

}
?>
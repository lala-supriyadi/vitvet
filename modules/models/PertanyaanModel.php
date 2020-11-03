<?php


class PertanyaanModel extends Model{

    protected $tableName = "pertanyaan";
	
	public function getList($id) {

        $sql = "select * from ". $this->tableName ." where id_pertanyaan < ". $id ." order by id_pertanyaan desc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function getPrev($id) {

        $sql = "select * from ". $this->tableName ." where id_pertanyaan < ". $id ." order by id_pertanyaan desc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function getNext($id) {

        $sql = "select * from ". $this->tableName ." where id_pertanyaan > ". $id ." order by id_pertanyaan asc limit 1";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function getPertanyaan($email,$tanggal) {

        $sql = "select * from kuesioner where email = '$email' AND tanggal = '$tanggal' ";

        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

}
?>
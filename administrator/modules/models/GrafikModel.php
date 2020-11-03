<?php
class GrafikModel extends Model{

    // protected $tableName = "pelanggan";

    public function GetPie() {

        //$sql = "SELECT SUM(A.pengujung) AS y, B.nama_kategori AS label FROM artikel AS A JOIN kategori AS B ON A.id_kategori = B.id_kategori GROUP BY A.id_kategori";     
        $sql = "SELECT COUNT(id_pelanggan) AS y, CONCAT( alamat, ' - ', jenis_pet, ' - ', penyakit ) AS label FROM pelanggan GROUP BY alamat";
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function GetPieSearch($bulan,$tahun) {

        //$sql = "SELECT SUM(A.pengujung) AS y, B.nama_kategori AS label FROM artikel AS A JOIN kategori AS B ON A.id_kategori = B.id_kategori GROUP BY A.id_kategori";     
        $sql = "SELECT COUNT(id_pelanggan) AS y, CONCAT( alamat) AS label FROM pelanggan WHERE MONTH (tanggal) = '$bulan' AND YEAR (tanggal) = '$tahun' GROUP BY alamat";
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function GetPieSearchByJenisPet($bulan,$tahun) {

        //$sql = "SELECT SUM(A.pengujung) AS y, B.nama_kategori AS label FROM artikel AS A JOIN kategori AS B ON A.id_kategori = B.id_kategori GROUP BY A.id_kategori";     
        $sql = "SELECT COUNT(id_pelanggan) AS y, CONCAT( jenis_pet ) AS label FROM pelanggan WHERE MONTH (tanggal) = '$bulan' AND YEAR (tanggal) = '$tahun' GROUP BY jenis_pet";
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function GetPieSearchByPenyakit($bulan,$tahun) {

        //$sql = "SELECT SUM(A.pengujung) AS y, B.nama_kategori AS label FROM artikel AS A JOIN kategori AS B ON A.id_kategori = B.id_kategori GROUP BY A.id_kategori";     
        $sql = "SELECT COUNT(id_pelanggan) AS y, CONCAT( penyakit ) AS label FROM pelanggan WHERE MONTH (tanggal) = '$bulan' AND YEAR (tanggal) = '$tahun' GROUP BY penyakit";
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function GetKuesioner() {

        $sql = "SELECT A.id_pertanyaan, COUNT(A.nilai) AS total, C.nilai AS label FROM kuesioner AS A LEFT JOIN pertanyaan AS B ON B.id_pertanyaan = A.id_pertanyaan LEFT JOIN penilaian AS C ON C.id_penilaian = A.nilai GROUP BY A.nilai, A.id_pertanyaan ORDER BY A.id_pertanyaan ASC";
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function GetKuesionerSearch($bulan,$tahun) {

        $sql = "SELECT A.id_pertanyaan, COUNT(A.nilai) AS total, C.nilai AS label FROM kuesioner AS A LEFT JOIN pertanyaan AS B ON B.id_pertanyaan = A.id_pertanyaan LEFT JOIN penilaian AS C ON C.id_penilaian = A.nilai WHERE MONTH (tanggal) = '$bulan' AND YEAR (tanggal) = '$tahun' GROUP BY A.nilai, A.id_pertanyaan ORDER BY A.id_pertanyaan ASC";
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function GetKuesionerSearchCount($bulan,$tahun) {

        $sql = "SELECT A.id_pertanyaan, COUNT(A.nilai) AS total, C.nilai AS label FROM kuesioner AS A LEFT JOIN pertanyaan AS B ON B.id_pertanyaan = A.id_pertanyaan LEFT JOIN penilaian AS C ON C.id_penilaian = A.nilai WHERE MONTH (tanggal) = '$bulan' AND YEAR (tanggal) = '$tahun' GROUP BY A.email ORDER BY A.id_pertanyaan ASC";
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }

    public function GetPertanyaan() {

        $sql = "SELECT * FROM pertanyaan ORDER BY id_pertanyaan ASC";
        $this->db->query($sql);

        return $this->db->execute()->toObject();
    }
}
?>
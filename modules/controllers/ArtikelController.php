<?php


use \modules\controllers\MainController;

class ArtikelController extends MainController{

    public function index() {

        $this->model('artikel');

        $data = $this->artikel->get();

        $this->template('artikel', array('artikel' => $data));
    }

    // untuk menampilkan detail artikel

    public function detail() {

        $id = isset($_GET["id"]) ? $_GET["id"] : "0";

        $this->model('artikel');

        $artikel = $this->artikel->getWhere(array('id_artikel' => $id));
        // print_r($artikel[0]->pengujung);die();
        $jumlah = $artikel[0]->pengujung + 1;

        $updateArrayData = array(

                'pengujung' => $jumlah
            );
        
        $update = $this->artikel->update($updateArrayData, array('id_artikel' => $id));

        $prev    = $this->artikel->getPrev($id);
        $next    = $this->artikel->getNext($id);

        $this->template('detailartikel', array('artikel' => $artikel, 'prev' => $prev, 'next' => $next));

    }

}
?>
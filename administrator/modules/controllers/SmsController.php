<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
use \modules\controllers\MainController;
class SmsController extends MainController {
  public function index() {
    $this->model('pelanggan');
    $getPelanggan = $this->pelanggan->getPelanggan();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $no_telepon = isset($_POST["no_telepon"]) ? $_POST["no_telepon"]  : "";

      if ($no_telepon != "") {
        
        $userkey_input = isset($_POST["userkey_singel"]) ? $_POST["userkey_singel"]  : "";
        $passkey_input = isset($_POST["passkey_singel"]) ? $_POST["passkey_singel"]  : "";
        $isi_pesan = isset($_POST["isi_pesan_singel"]) ? $_POST["isi_pesan_singel"]  : "";

        // print_r($userkey_input);die();

        $userkey = $userkey_input; //userkey lihat di zenziva
        $passkey = $passkey_input; // set passkey di zenziva
        $telepon = $no_telepon;
        $message = $isi_pesan;
        $url = "https://reguler.zenziva.net/apps/smsapi.php";
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$telepon.'&pesan='.urlencode($message));
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        $results = curl_exec($curlHandle);
        curl_close($curlHandle);

        $XMLdata = new SimpleXMLElement($results);
        $status = $XMLdata->message[0]->text;
        echo $status;  
        // die();
        $this->template('form_sms_succes', array('pelanggan' => $getPelanggan,'status' => $status));
      }else{
        foreach ($getPelanggan as $row) {
          /*$userkey_input = isset($_POST["userkey_singel"]) ? $_POST["userkey_singel"]  : "";
          $passkey_input = isset($_POST["passkey_singel"]) ? $_POST["passkey_singel"]  : "";
          $isi_pesan = isset($_POST["isi_pesan_singel"]) ? $_POST["isi_pesan_singel"]  : "";*/
          $userkey_input = isset($_POST["userkey"]) ? $_POST["userkey"]  : "";
          $passkey_input = isset($_POST["passkey"]) ? $_POST["passkey"]  : "";
          $isi_pesan = isset($_POST["isi_pesan"]) ? $_POST["isi_pesan"]  : "";

          // print_r($userkey_input);die();

          $userkey = $userkey_input; //userkey lihat di zenziva
          $passkey = $passkey_input; // set passkey di zenziva
          
          $telepon = $row->no_hp;
          $message = $isi_pesan;
          $url = "https://reguler.zenziva.net/apps/smsapi.php";
          $curlHandle = curl_init();
          curl_setopt($curlHandle, CURLOPT_URL, $url);
          curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$telepon.'&pesan='.urlencode($message));
          curl_setopt($curlHandle, CURLOPT_HEADER, 0);
          curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
          curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
          curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
          curl_setopt($curlHandle, CURLOPT_POST, 1);
          $results = curl_exec($curlHandle);
          curl_close($curlHandle);

          $XMLdata = new SimpleXMLElement($results);
          $status = $XMLdata->message[0]->text;
          echo $status;  
          $this->template('form_sms_succes', array('pelanggan' => $getPelanggan,'status' => $status));
        }
      }
    }else{
      $this->template('form_sms', array('pelanggan' => $getPelanggan));
    }
    
  }


}
/* End of file Sms.php */
/* Location: ./application/controllers/Sms.php */
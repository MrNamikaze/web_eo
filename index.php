<?php
require_once("koneksi.php");
// produk
$sql = "SELECT * FROM produk WHERE id_kategori = 0";
$row = $db->prepare($sql);
$row->execute();
$produk = $row->fetchAll();
// detail produk

require_once("koneksi.php");
$usr = 0;
if(isset($_POST['register'])){

    // filter data yang diinputkan
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
    $jenis_paket = filter_input(INPUT_POST, 'jenis_paket', FILTER_SANITIZE_STRING);
    $no_wa = filter_input(INPUT_POST, 'no_wa', FILTER_SANITIZE_STRING);
    $deskripsi = filter_input(INPUT_POST, 'deskripsi', FILTER_SANITIZE_STRING);

    $sql = "INSERT INTO orderan (nama, alamat, jenis_paket, no_wa, deskripsi) 
                VALUES (:nama, :alamat, :jenis_paket, :no_wa, :deskripsi)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":nama" => $nama,
        ":alamat" => $alamat,
        ":jenis_paket" => $jenis_paket,
        ":no_wa" => $no_wa,
        ":deskripsi" => $deskripsi,
    );
    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);
    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved){
        header("Location: index.php");
    }
    else{
        $usr = 2;
    }
}
require 'view_index.php'
?>


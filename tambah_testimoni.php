<?php
session_start();
if(is_null($_SESSION["user"])){
    header("Location: index.php");
}
else{
    require_once("koneksi.php");
    $sql1 = "SELECT * FROM produk WHERE id_kategori = 0";
    $row1 = $db->prepare($sql1);
    $row1->execute();
    $hasil1 = $row1->fetchAll();
    $usr = 0;

    if($_SESSION['user']['role'] == 1){
        if(isset($_POST['register'])){
            $namaFile = $_FILES['foto']['name'];
            $foto = explode(".",$namaFile);
            $namafoto = time().".".$foto[1];
            $namaSementara = $_FILES['foto']['tmp_name'];
                    // filter data yang diinputkan
            $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
            $tanggal = filter_input(INPUT_POST, 'tanggal', FILTER_SANITIZE_STRING);
            $orderan = filter_input(INPUT_POST, 'orderan', FILTER_SANITIZE_STRING);
            $id_ket = 0;
            $gambar = $namafoto;

            if($tanggal==''){
                $usr = 3;
            }
            else{
                // menyiapkan query
                $sql = "INSERT INTO testimoni (nama, tanggal, orderan, gambar, id_ket) 
                        VALUES (:nama, :tanggal, :orderan, :gambar, :id_ket)";
                $stmt = $db->prepare($sql);

                // bind parameter ke query
                $params = array(
                    ":nama" => $nama,
                    ":tanggal" => $tanggal,
                    ":orderan" => $orderan,
                    ":gambar" => $gambar,
                    ":id_ket" => $id_ket,
                );

                // eksekusi query untuk menyimpan ke database
                $saved = $stmt->execute($params);
                $dirUpload = "img/";

                // pindahkan file
                $terupload = move_uploaded_file($namaSementara, $dirUpload.$namafoto);
                // jika query simpan berhasil, maka user sudah terdaftar
                // maka alihkan ke halaman login
                if($saved){
                    header("Location: testimoni.php");
                }
                else{
                    $usr = 2;
                }
            }
        }
        require 'head.php';
        require 'navbar.php';
        require 'sidebar.php';
        require 'view_tambah_testimoni.php';
        require 'foot.php';
    }
    else{
        header("Location: dashboard.php");
    }
    
}
?>
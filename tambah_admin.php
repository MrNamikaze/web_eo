<?php
session_start();
if(is_null($_SESSION["user"])){
    header("Location: index.php");
}
else{
    require_once("koneksi.php");
    $usr = 0;
    if($_SESSION['user']['role'] == 1){
        if(isset($_POST['register'])){

            // filter data yang diinputkan
            $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
            // enkripsi password
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $foto = "default.jpeg";

            $data_email = $email;

            $sql = "SELECT * FROM user WHERE email = '$email'";
            $row = $db->prepare($sql);
            $row->execute();
            $hasil = $row->fetchAll();

            if(!empty($hasil)){
                $usr = 3;
            }
            else{
                // menyiapkan query
                $sql = "INSERT INTO user (nama, email, password, foto, role) 
                        VALUES (:nama, :email, :password, :foto, :role)";
                $stmt = $db->prepare($sql);

                // bind parameter ke query
                $params = array(
                    ":nama" => $nama,
                    ":email" => $email,
                    ":password" => $password,
                    ":foto" => $foto,
                    ":role" => 2,
                );

                // eksekusi query untuk menyimpan ke database
                $saved = $stmt->execute($params);
                // jika query simpan berhasil, maka user sudah terdaftar
                // maka alihkan ke halaman login
                if($saved){
                    header("Location: admin.php");
                }
                else{
                    $usr = 2;
                }
            }
        }
        require 'head.php';
        require 'navbar.php';
        require 'sidebar.php';
        require 'view_tambah_admin.php';
        require 'foot.php';
    }
    else{
        header("Location: dashboard.php");
    }
    
}
?>
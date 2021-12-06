<?php
    include "app/db/Koneksi.php";
    $db = new Koneksi();
    $conn = $db->connect();

    $conn->query("insert into user(id,nama,username,pass) values('".$_POST['id']."','".$_POST['nama']."','".$_POST['uname']."','".$_POST['pass']."')");

    header("Location: index.php");
?>
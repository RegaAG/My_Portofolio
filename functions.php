<?php

    $conn = mysqli_connect("localhost","root","","contactme_portofolio");


    function tambah($data){
        global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $pesan = htmlspecialchars($data["pesan"]);

        $query = "INSERT INTO pesan VALUES ('$nama','$email','$pesan')";
    
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>
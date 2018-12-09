<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "db_nilai_mahasiswa";

    //Create connection to db
    $connection = mysqli_connect($servername, $username, $password, $db);

    //Check connection to db
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";
?>
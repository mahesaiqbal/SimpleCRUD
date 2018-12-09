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

    $delete = "DELETE FROM mahasiswa WHERE nim=('$_GET[nim]')";

    if (mysqli_query($connection, $delete)) {
        header("location:SelectData.php");
    } else {
        echo "Data tidak berhasil dihapus : " . $insert . "<br>" . mysqli_error($connection);
    }

    mysqli_close($connection);
?>
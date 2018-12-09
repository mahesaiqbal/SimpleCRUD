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

    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $prodi = $_POST["program_studi"];
    $matkul = $_POST["mata_kuliah"];
    $sks = $_POST["sks"];
    $nilai = $_POST["nilai"];

    if ($nilai >= 85 || $nilai == 100) {
        $grade = 'A';
    } else if ($nilai >= 75 || $nilai == 84) {
        $grade = 'B';
    } else if ($nilai >= 60 || $nilai == 74) {
        $grade = 'C';
    } else if ($nilai >= 50 || $nilai == 59) {
        $grade = 'D';
    } else {
        $grade = 'E';
    }

    $update = "UPDATE mahasiswa SET nama='$nama', program_studi='$prodi', mata_kuliah='$matkul', sks='$sks', nilai='$nilai', grade='$grade' WHERE nim='$nim'";

    if (mysqli_query($connection, $update)) {
        header("location:SelectData.php");
    } else {
        echo "Data tidak berhasil dihapus : " . $insert . "<br>" . mysqli_error($connection);
    }

    mysqli_close($connection);
?>
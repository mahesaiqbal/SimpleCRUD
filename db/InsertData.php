<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "db_nilai_mahasiswa";

    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $prodi = $_POST["program_studi"];
    $matkul = $_POST["mata_kuliah"];
    $sks = $_POST["sks"];
    $nilai = $_POST["nilai"];

    //Create connection to db
    $connection = mysqli_connect($servername, $username, $password, $db);

    //Check connection to db
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //Aware data type
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

    $insert = "INSERT INTO mahasiswa (nim, nama, program_studi, mata_kuliah, sks, nilai, grade) 
                VALUES ('$nim', '$nama', '$prodi', '$matkul', '$sks', '$nilai', '$grade')";

    if (mysqli_query($connection, $insert)) {
        header("location:SelectData.php");
    } else {
        echo "Data tidak berhasil dimasukkan : " . $insert . "<br>" . mysqli_error($connection);
    }

    mysqli_close($connection);
?>
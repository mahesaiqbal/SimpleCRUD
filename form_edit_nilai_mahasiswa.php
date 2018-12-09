<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form Nilai</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>
        
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

            $select = "SELECT * FROM mahasiswa WHERE nim=('$_GET[nim]')";
            $result = mysqli_query($connection, $select);
            $row = mysqli_fetch_assoc($result);

            mysqli_close($connection);
        ?>

        <div class="container">
            <h2>Form Mahasiswa</h2>
            <form class="form-horizontal" action="/uas_pw2/db/EditData.php" method="post">
                <div class="form-group">
                <!-- <label for="nim">NIM : </label> -->
                    <div>
                        <input type="hidden" class="form-control" id="nim" placeholder="Masukan NIM" name="nim" value="<?php echo $row['nim']; ?>">
                    </div>
                </div>
                <div class="form-group">
                <label for="nama">NAMA : </label>
                    <div>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" value="<?php echo $row['nama']; ?>">
                    </div>
                </div>
                <div class="form-group">
                <label for="program_studi">PROGRAM STUDI : </label>
                    <div>
                        <input type="text" class="form-control" id="program_studi" placeholder="Masukan Program Studi" name="program_studi" value="<?php echo $row['program_studi']; ?>">
                    </div>
                </div>
                <div class="form-group">
                <label for="mata_kuliah">MATA KULIAH : </label>
                    <div>
                        <input type="text" class="form-control" id="mata_kuliah" placeholder="Masukan Mata Kuliah" name="mata_kuliah" value="<?php echo $row['mata_kuliah']; ?>">
                    </div>
                </div>
                <div class="form-group">
                <label for="sks">SKS : </label>
                    <div>
                        <input type="text" class="form-control" id="sks" placeholder="Masukan SKS" name="sks" value="<?php echo $row['sks']; ?>">
                    </div>
                </div>
                <div class="form-group">
                <label for="nilai">NILAI : </label>
                    <div>
                        <input type="text" class="form-control" id="nilai" placeholder="Masukan Nilai" name="nilai" value="<?php echo $row['nilai']; ?>">
                    </div>
                </div>
                <div class="form-group">        
                    <div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

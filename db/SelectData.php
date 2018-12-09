<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Select Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 70px;
            background-color: #111111;
            color: white;
            text-align: center;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Mahesa Iqbal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>    
                </ul>
            </div>  
        </nav>
        <br>
        <div class="container">
            <h2>Nilai Mahasiswa Universitas Budi Luhur</h2>
            <p>Data nilai mahasiswa</p>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>PROGRAM STUDI</th>
                        <th>MATA KULIAH</th>
                        <th>SKS</th>
                        <th>NILAI</th>
                        <th>GRADE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
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

                        $select = "SELECT * FROM mahasiswa ORDER BY nim ASC";
                        $result = mysqli_query($connection, $select);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                    ?>
                                <tr>
                                    <td><?php echo $row["nim"]; ?></td>
                                    <td><?php echo $row["nama"]; ?></td>
                                    <td><?php echo $row["program_studi"]; ?></td>
                                    <td><?php echo $row["mata_kuliah"]; ?></td>
                                    <td><?php echo $row["sks"]; ?></td>
                                    <td><?php echo $row["nilai"]; ?></td>
                                    <td><?php echo $row["grade"]; ?></td>
                                    <td>
                                        <a href="/uas_pw2/form_edit_nilai_mahasiswa.php?nim=<?php echo $row["nim"]; ?>">Edit</a> /
                                        <a href="DeleteData.php?nim=<?php echo $row["nim"]; ?>">Delete</a>
                                    </td>
                                </tr>
                    <?php
                            }
                        } else {
                            echo "Tidak ada data";
                        }

                        mysqli_close($connection);
                    ?>            
                </tbody>
            </table>
            <div>
                <button onclick="location.href='/uas_pw2/form_nilai_mahasiswa.php'" class="btn btn-primary">Create a new data</button>
            </div>
            <div class="footer">
                <p>Mahesa Iqbal Ridwansyah</p>
            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form Nilai Mahasiswa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Form Nilai Mahasiswa</h2>
            <form class="form-horizontal" action="/uas_pw2/db/InsertData.php" method="post">
                <div class="form-group">
                <label for="nim">NIM : </label>
                    <div>
                        <input type="text" class="form-control" id="nim" placeholder="Masukan NIM" name="nim">
                    </div>
                </div>
                <div class="form-group">
                <label for="nama">NAMA : </label>
                    <div>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
                    </div>
                </div>
                <div class="form-group">
                <label for="program_studi">PROGRAM STUDI : </label>
                    <div>
                        <input type="text" class="form-control" id="program_studi" placeholder="Masukan Program Studi" name="program_studi">
                    </div>
                </div>
                <div class="form-group">
                <label for="mata_kuliah">MATA KULIAH : </label>
                    <div>
                        <input type="text" class="form-control" id="mata_kuliah" placeholder="Masukan Mata Kuliah" name="mata_kuliah">
                    </div>
                </div>
                <div class="form-group">
                <label for="sks">SKS : </label>
                    <div>
                        <input type="text" class="form-control" id="sks" placeholder="Masukan SKS" name="sks">
                    </div>
                </div>
                <div class="form-group">
                <label for="nilai">NILAI : </label>
                    <div>
                        <input type="text" class="form-control" id="nilai" placeholder="Masukan Nilai" name="nilai">
                    </div>
                </div>
                <div class="form-group">        
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

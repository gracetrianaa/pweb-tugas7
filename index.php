<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <style>
        /* Add some basic styling to make it look like a button */
        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        a {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <header style="text-align: center">
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK Coding</h1>
    </header>

    <h4 style="text-align: center">Menu</h4>
    <div class="button-container">
        <a href="form-daftar.php">Daftar Baru</a>
        <a href="list-siswa.php">Pendaftar</a>
    </div>
    <?php if(isset($_GET['status'])): ?>
    <p style="text-align:center">
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>
    
    </body>
</html>
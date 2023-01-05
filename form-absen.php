<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Absensi | ULBI</title>
</head>
<body>
    <headeer>
        <h3>Masukan Data Kehadiran | ULBI <h3>
    </header>
    
    <form action="proses-absensi.php" method="POST">
        <fieldset>
            <p>
                <label for="Nama">Nama: </label>
                <textarea type="text" name="Nama" placeholder="Nama Lengkap"></textarea>
            </p>

            <p>
                <label for="NPM">NPM: </label>
                <textarea name="NPM" ></textarea>
            </p>

            <p>
                <label for="Prodi">Prodi: </label>
                <select name="Prodi">
                    <option>D3-Informatika</option>
                    <option>D4-Informatika</option>
</select>
            </p>

            <p>
                <label for="Kelas">Kelas : </label>
                <select name="Kelas">
                    <option>1-A</option>
                    <option>1-B</option>
</select>
                
            </p>

            <p>
                <label for="kehadiran">Kehadiran: </label>
                <select name="Kehadiran">
                    <option>Hadir</option>
                    <option>Tidak</option>
            </p>

            <p>
                <input type="submit" value="Masukan" name="masukan"/>
            </p>

</fieldset>
</form>
     
</body>
</html>
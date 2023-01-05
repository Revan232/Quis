<?php
include("config.php");

if(isset($_POST['masukan'])){

    $nama = $_POST['Nama'];
    $npm = $_POST['NPM'];
    $prodi = $_POST['Prodi'];
    $kelas = $_POST['Kelas'];
    $kehadiran = $_POST['Kehadiran'];

    $sql = "INSERT INTO absensi perkuliahan (Nama, NPM, Prodi, Kelas, Kekadiran)
    VALUE ('$nama', '$npm', '$prodi', '$kelas', '$kehadiran')";
    $query = mysqli_query($db, $sql);

    if($query) {
        header('Location: index.php?status=sukses');
    }
    else {
        header('Location: index.php?status=gagal');
    }
}else {
    die("Akses dilarang...");

}
?>
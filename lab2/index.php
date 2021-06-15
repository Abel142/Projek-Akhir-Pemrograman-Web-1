///////////////index.php
<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("location:login.php");
}

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
?>

<html>
<a href="logout.php">Keluar</a>
<h1>Halaman utama</h1>
<table>
    <tr>
        <td>No.</td>
        <td>NIM</td>
        <td>Nama</td>
        <td>Kom</td>
    </tr>
    <?php
    include_once 'koneksi.php';
    $nomor = 1;
    $data = mysqli_query($koneksi, 'select*from data_mahasiswa');
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $d['nim']; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['kom']; ?></td>
        </tr>

    <?php
    }
    ?>
</table>


</html>
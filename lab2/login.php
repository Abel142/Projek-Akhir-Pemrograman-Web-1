/////////////////login.php
<html>

<head>
</head>

<body>
    <form action="aksi_login.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="masukkan username anda"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="masukkan password anda"></td>
            </tr>
            <tr>
                <td><input type="submit" name="simpan" value="Simpan"> </td>
                <td><input type="reset" name="hapus" value="Reset"> </td>
            </tr>
        </table>
    </form>

    <a href="daftar.php">
        <h2>Belum punya akun? daftar di sini</h2>
    </a>

</body>

</html>
<--daftar_proses.php→ <?php

                        session_start();
                        $username   = "";
                        $nama       = "";
                        $email      = "";

                        $errors     = array();

                        include("koneksi.php");

                        if (isset($_POST['buatakun'])) {

                            $username   = mysqli_real_escape_string($koneksi, $_POST['username']);
                            $nama       = mysqli_real_escape_string($koneksi, $_POST['nama']);
                            $email      = mysqli_real_escape_string($koneksi, $_POST['email']);
                            $password_1 = mysqli_real_escape_string($koneksi, $_POST['pass1']);
                            $password_2 = mysqli_real_escape_string($koneksi, $_POST['pass2']);

                            if (empty($username)) {
                                array_push($errors, "Kolom username tidak boleh kosong");
                            }
                            if (empty($nama)) {
                                array_push($errors, "Namamu kosong, isi dong");
                            }
                            if (empty($email)) {
                                array_push($errors, "Email-nya diisi dong kak");
                            }
                            if (empty($password_1)) {
                                array_push($errors, "Passwordnya ga boleh kosong ya kak");
                            }
                            if ($password_1 != $password_2) {
                                array_push($errors, "Passwordnya kok ga sama ya kak");
                            }
                        }
                        $user_check_query = "select * from user where username='$username' or email='$email' limit 1";
                        $result           = mysqli_query($koneksi, $user_check_query);
                        $user             = mysqli_fetch_array($result);

                        if (isset($user)) {

                            if ($user['username'] === $username) {
                                array_push($errors, "Username sudah pernah dibuat");
                            }
                            if ($user['email'] === $email) {
                                array_push($errors, "Email sudah terdaftar");
                            }
                        }

                        if (count($errors) == 0) {
                            $password = ($password_1);
                            $query    = "insert into user(username, email, nama, password) values('$username','$email','$nama','$password’)";
                            mysqli_query($koneksi, $query);

                            $_SESSION['username'] = $username;
                            echo "<script>alert('Akun anda berhasil dibuat'); location='login.php';</script>";
                        }


                        ?>
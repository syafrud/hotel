<?php
session_start();
if (isset($_SESSION['email'])) {
    header("location: ../action/home.php");
    exit;
}

// Sertakan file koneksi dan file lain yang diperlukan
include('../action/koneksi.php');

// Inisialisasi variabel
$email = "";
$password = "";

$errors = array();
$emailErrorMessage = "";
$passwordErrorMessage = "";

// Jika tombol login ditekan
if (isset($_POST['login'])) {
    // Ambil nilai dari formulir
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    // Validasi formulir
    if (empty($email)) {
        array_push($errors, "Email diperlukan");
        $emailErrorMessage = "Email diperlukan";
    }
    if (empty($password)) {
        array_push($errors, "Password diperlukan");
        $passwordErrorMessage = "Password diperlukan";
    }

    // Jika tidak ada kesalahan, periksa login ke database
    if (count($errors) == 0) {
        // Query untuk mencari pengguna dengan email yang cocok
        $query = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);

            // Periksa apakah password cocok
            if (password_verify($password, $user['password'])) {
                // Masukkan pengguna ke dalam sesi
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['nik'] = $user["nik"];
                $_SESSION["username"] = $user["username"];
                $_SESSION['id_T'] = $user['id_T'];
                $_SESSION["id"] = $user["id"];
                header('location: ../action/home.php');
            } else {
                array_push($errors, "Password salah");
                $passwordErrorMessage = "Password salah";
            }
        } else {
            $emailErrorMessage = "Email tidak ditemukan";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/regis.css">
    <link rel="stylesheet" href="../css/cus1.css">
</head>

<body>
    <div class="container">
        <h1>Login</h1>

        <form method="post" action="./login.php">
            <div class="mb-10">
                <label>Email:</label>
                <input type="text" name="email" value="<?php echo $email; ?>"><br>

                <?php if (!empty($emailErrorMessage)) : ?>
                <p style="color: red;"><?php echo $emailErrorMessage; ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-10">
                <label>Password:</label>
                <input type="password" name="password"><br>

                <?php if (!empty($passwordErrorMessage)) : ?>
                <p style="color: red;"><?php echo $passwordErrorMessage; ?></p>
                <?php endif; ?>
            </div>
            <button type="submit" name="login">Login</button>
            <a href="./register.php">Don't have an account</a>?
        </form>
    </div>
</body>

</html>
<?php
session_start();
if (isset($_SESSION['email'])) {
    header("location: ../action/home.php");
    exit;
}

// Sertakan file koneksi dan file lain yang diperlukan
include('../action/koneksi.php');

// Inisialisasi variabel
$username = "";
$email = "";
$password = "";
$nik = "";
$id_T = 1; // Tetapkan id_T ke 1

$errors = array();

// Jika tombol register ditekan
if (isset($_POST['register'])) {
    // Ambil nilai dari formulir
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    // Validasi formulir
    if (empty($username)) {
        array_push($errors, "Username diperlukan");
    }
    if (empty($email)) {
        array_push($errors, "Email diperlukan");
    }
    if (empty($nik)) {
        array_push($errors, "NIK diperlukan");
    }
    if (strlen($password) < 8) {
        array_push($errors, "Password harus terdiri dari minimal 8 karakter");
    }

    // Query untuk memeriksa keberadaan email atau NIK dalam database
    $check_query = "SELECT * FROM user WHERE email='$email' OR nik='$nik' LIMIT 1";
    $check_result = mysqli_query($koneksi, $check_query);
    $user = mysqli_fetch_assoc($check_result);

    if ($user) { // Jika email atau NIK sudah ada dalam database
        if ($user['email'] === $email) {
            array_push($errors, "Email sudah terdaftar");
        }
        if ($user['NIK'] === $nik) {
            array_push($errors, "NIK sudah terdaftar");
        }
    } else { // Jika email atau NIK belum terdaftar dalam database
        // Enkripsi password sebelum menyimpannya ke database
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        // Query untuk menyimpan data pengguna ke database
        $query = "INSERT INTO user (username, NIK, email, password, id_T) 
                  VALUES('$username', '$nik', '$email', '$password_hashed', '$id_T')";
        mysqli_query($koneksi, $query);

        // Redirect ke halaman login
        header('location: ./login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/regis.css">
    <link rel="stylesheet" href="../css/cus1.css">
    <style>
    input[type="number"] {
        width: 95%;
        padding: 10px;
        /* margin-bottom: 15px; */
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Register</h1>

        <form method="post" action="./register.php">
            <div class="mb-10">
                <label>Username:</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
                <?php if (!empty($errors) && in_array("Username diperlukan", $errors)) : ?>
                <p style="color: red;">Username diperlukan</p>
                <?php endif; ?>
            </div>
            <div class="mb-10">
                <label>NIK:</label>
                <input type="number" name="nik">
                <?php if (!empty($errors) && in_array("NIK diperlukan", $errors)) : ?>
                <p style="color: red;">NIK diperlukan</p>
                <?php endif; ?>
            </div>
            <div class="mb-10">
                <label>Email:</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
                <?php if (!empty($errors) && in_array("Email diperlukan", $errors)) : ?>
                <p style="color: red;">Email diperlukan</p>
                <?php endif; ?>
                <?php if (!empty($errors) && in_array("Email sudah terdaftar", $errors)) : ?>
                <p style="color: red;">Email sudah terdaftar</p>
                <?php endif; ?>
            </div>
            <div class="mb-10">
                <label>Password:</label>
                <input type="password" name="password">
                <?php if (!empty($errors) && in_array("Password harus terdiri dari minimal 8 karakter", $errors)) : ?>
                <p style="color: red;">Password harus terdiri dari minimal 8 karakter</p>
                <?php endif; ?>
            </div>
            <button type="submit" name="register">Register</button>
            <a href="./login.php">Already have an account</a>?
        </form>
    </div>
</body>

</html>
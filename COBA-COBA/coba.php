<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Keren</title>
    <link rel="stylesheet" href="coba.css">
</head>
<body>
    <div class="container">
        <h2>Pendaftaran Pengguna</h2>
        <?php
        $namaErr = $emailErr = "";
        $nama = $email = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nama"])) {
                $namaErr = "Nama harus diisi";
            } else {
                $nama = htmlspecialchars($_POST["nama"]);
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email harus diisi";
            } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Format email tidak valid";
            } else {
                $email = htmlspecialchars($_POST["email"]);
            }
        }
        ?>
        
        <form id="registrationForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="input-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required>
                <span class="error"><?php echo $namaErr; ?></span>
            </div>

            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
                <span class="error"><?php echo $emailErr; ?></span>
            </div>

            <button type="submit">Daftar</button>
        </form>
    </div>
    <script src="coba.js"></script>
</body>
</html>

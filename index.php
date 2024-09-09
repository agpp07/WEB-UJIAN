<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="login-container">
        <h1>Login</h1>
        <p><a href="#jdaj">Sign in to continue</a></p>
        <form class="login" action="cek_login.php" method="post">
            <label for="username">EMAIL</label>
            <input type="username" name="username" required placeholder="example@gmail.com">

            <label for="password">PASSWORD</label>
            <input type="password" name="password" required placeholder="**************">

            <button type="submit">Login</button>
        </form>
    </div>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo"<script>window.alert('Username dan Password Salah')
                window.location='index.php'</script>";
        }
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="../css/home.css" />
</head>

<body>
    <header>
        <nav>
            <div class="user">
                <img src="../image/user.png" />
                <a href="">Ijal Udin</a>
            </div>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="profil.php">PROFIL</a></li>
                <li><a href="#">HISTORY</a></li>
                <li><a href="#">PETUNJUK</a></li>
                <li><a href="#">LOG OUT</a></li>
            </ul>
        </nav>
        <div class="garis"></div>
        <div class="hero">
            <h1>Welcome</h1>
            <form action="" method="post">
                <input type="text" placeholder="Search" />
                <button type="submit"><img src="image/search.png" /></button>
            </form>
        </div>
    </header>
    <main>
        <div class="features">
            <div class="feature">
                <img src="../image/bahasa-indonesia.png" alt="Bahasa Indonesia" />
                <h2>Bahasa Indonesia</h2>
            </div>
            <div class="feature">
                <img src="../image/matematika.png" alt="Matematika" />
                <h2>Matematika</h2>
            </div>
            <div class="feature">
                <img src="../image/pendidikan-agama.png" alt="Pendidikan Agama" />
                <h2>Pendidikan Agama</h2>
            </div>
            <div class="feature">
                <img src="../image/bahasa-inggris.png" alt="Bahasa Inggris" />
                <h2>Bahasa Inggris</h2>
            </div>
        </div>
        <div class="features">
            <div class="feature">
                <img src="../image/pkn.png" alt="PKn" />
                <h2>pkn</h2>
            </div>
            <div class="feature">
                <img src="../image/ppkr.png" alt="PKKr" />
                <h2>pkkr</h2>
            </div>
            <div class="feature">
                <img src="../image/pbo.png" alt="PBO" />
                <h2>pbo</h2>
            </div>
            <div class="feature">
                <img src="../image/database.png" alt="Database" />
                <h2>data base</h2>
            </div>
        </div>
        <div class="features">
            <div class="feature">
                <img src="../image/website.png" alt="Website" />
                <h2>website</h2>
            </div>
            <div class="feature">
                <img src="../image/web-mobile.png" alt="Web Mobile" />
                <h2>web mobile</h2>
            </div>
            <div class="feature">
                <img src="../image/robotika.png" alt="Robotik" />
                <h2>robotik</h2>
            </div>
            <div class="feature">
                <img src="../image/webp.png" alt="WEBP" />
                <h2>webp</h2>
            </div>
        </div>
    </main>
    <script>
    const navLinks = document.querySelectorAll("nav ul li a");

    navLinks.forEach((link) => {
        link.addEventListener("click", () => {
            // Hapus class 'active' dari semua link
            navLinks.forEach((link) => link.classList.remove("active"));

            // Tambahkan class 'active' pada link yang diklik
            link.classList.add("active");
        });
    });
    </script>
</body>

</html>
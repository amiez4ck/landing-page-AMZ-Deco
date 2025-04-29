<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih - AMZ Deco</title>
    <link rel="stylesheet" href="css_/styles.css">
</head>
<body>

<div id="preloader"></div>

<header class="header">
    <div class="container">
        <div class="nav-left">
            <img src="images/logo.png" alt="AMZ Deco Logo" class="logo-img">
        </div>
        <div class="nav-right">
        <ul>
    <li><a href="index.php">Halaman Utama</a></li>

    <li class="dropdown">
        <a href="#">Produk</a>
        <ul class="dropdown-menu">
            <li><a href="produk.php">Lihat Produk</a></li>
            <li><a href="form-tempahan.php">Tempahan Produk</a></li>
            <li><a href="testimoni.php">Testimoni Pelanggan</a></li>
        </ul>
    </li>

    <li class="dropdown">
           <a href="#">Mengenai Kami</a>
           <ul class="dropdown-menu">
           <li><a href="tentangkami.php">Mengenai Kami</a></li>
        </ul>
    </li>

</ul>

        </div>

        <div class="hamburger" onclick="toggleMenu()">
        <i class="fa-solid fa-bars"></i>
</div>
   </div>

</header>

<!-- Thank You Section -->
<section class="hero-produk">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>Terima Kasih!</h1>
    </div>
</section>

<section class="form-section">
    <div class="container form-container">
        <div class="thankyou-message">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama = htmlspecialchars($_POST['nama']);
                $telefon = htmlspecialchars($_POST['telefon']);
                $produk = htmlspecialchars($_POST['produk']);
                echo "<h2>Terima kasih, $nama!</h2>";
                echo "<p>Tempahan anda untuk <strong>$produk</strong> telah kami terima.</p>";
                echo "<p>Kami akan hubungi anda di nombor: <strong>$telefon</strong> secepat mungkin.</p>";
            } else {
                echo "<p>Tiada data diterima.</p>";
            }
            ?>
            <br>
            <a href="index.php" class="btn">Kembali ke Halaman Utama</a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p>© 2025 AMZ Deco. Semua Hak Cipta Terpelihara.</p>
    </div>
</footer>

<script>
  window.addEventListener('load', function(){
    document.getElementById('preloader').style.display = 'none';
  });
</script>

</body>
</html>

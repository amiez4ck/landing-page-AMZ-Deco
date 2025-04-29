<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tempahan - AMZ Deco</title>
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

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST["nama"]);
    $email = trim($_POST["email"]);
    $produk = trim($_POST["produk"]);
    
    if (empty($nama) || empty($email) || empty($produk)) {
        echo "<script>alert('Sila lengkapkan semua ruangan yang diperlukan.'); window.history.back();</script>";
        exit();
    } else {
        // Proses tempahan
        header("Location: thankyou.php");
        exit();
    }
}
?>


<!-- Hero Section -->
<section class="hero-produk">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>Tempahan Anda</h1>
    </div>
</section>

<!-- Form Section -->
<section class="form-section">
    <div class="container form-container">
        <form action="thankyou.php" method="post" class="tempahan-form">
            <div class="form-group">
                <label>Nama Penuh:</label>
                <input type="text" name="nama" placeholder="Masukkan Nama Penuh" required>
            </div>
            <div class="form-group">
                <label>Nombor Telefon:</label>
                <input type="text" name="telefon" placeholder="Contoh: 0123456789" required>
            </div>
            <div class="form-group">
                <label>Emel:</label>
                <input type="email" name="emel" placeholder="Contoh: nama@email.com" required>
            </div>
            <div class="form-group">
                <label>Produk Pilihan:</label>
                <select name="produk" required>
                    <option value="">-- Sila Pilih Produk --</option>
                    <option value="Langsir Moden">Langsir Modern</option>
                    <option value="Wallpaper Dinding">Wallpaper Dinding</option>
                    <option value="Lampu Hiasan">Lampu Hiasan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Alamat Penghantaran:</label>
                <textarea name="alamat" placeholder="Masukkan alamat penuh penghantaran" required></textarea>
            </div>
            <div class="form-group">
                <label>Nota Tambahan (Optional):</label>
                <textarea name="nota" placeholder="Contoh: Masa penghantaran yang diingini"></textarea>
            </div>
            <button type="submit" class="btn">Hantar Tempahan</button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p>© 2025 AMZ Deco. Semua Hak Cipta Terpelihara.</p>
    </div>
</footer>

<!-- Hamburger Script -->
<script>
function toggleMenu() {
    var nav = document.querySelector('.nav-right');
    nav.classList.toggle('active');
}
</script>

<script>
  window.addEventListener('load', function(){
    document.getElementById('preloader').style.display = 'none';
  });
</script>


</body>
</html>

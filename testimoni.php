<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni Pelanggan - AMZ Deco</title>
    <link rel="stylesheet" href="css_/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

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


<section class="hero-produk">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>Testimoni Pelanggan</h1>
    </div>
</section>

<section class="testimoni-list">
    <div class="container testimoni-grid">
        
        <div class="testimoni-item">
            <img src="images/pelanggan_1.jpg" alt="Amira" class="avatar">
            <h3>Amira Bt Hassan</h3>
            <div class="rating">
            ★★★★
            </div>

            <p>"Saya sangat berpuas hati dengan servis AMZ Deco. Rumah saya kelihatan lebih mewah!"</p>
        </div>

        <div class="testimoni-item">
            <img src="images/pelanggan_2.jpg" alt="Azman" class="avatar">
            <h3>Azman B. Ramli</h3>
            <div class="rating">
            ★★★★★
            </div>
            <p>"Produk berkualiti dan harga berpatutan. Highly recommended!"</p>
        </div>

        <div class="testimoni-item">
            <img src="images/pelanggan_3.jpg" alt="Lina" class="avatar">
            <h3>Lina Binti Yusuf</h3>
            <div class="rating">
            ★★★★★
            </div>
            <p>"Tempahan mudah dan penghantaran cepat. Terima kasih AMZ Deco!"</p>
        </div>

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

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true,
  });
</script>

<script>
  window.addEventListener('load', function(){
    document.getElementById('preloader').style.display = 'none';
  });
</script>

</body>
</html>

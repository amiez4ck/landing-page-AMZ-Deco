<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
    <li><a href="index.html">Halaman Utama</a></li>

    <li class="dropdown">
        <a href="#">Produk</a>
        <ul class="dropdown-menu">
            <li><a href="produk.html">Lihat Produk</a></li>
            <li><a href="form-tempahan.html">Tempahan Produk</a></li>
            <li><a href="testimoni.html">Testimoni Pelanggan</a></li>
        </ul>
    </li>

    <li class="dropdown">
           <a href="#">Mengenai Kami</a>
           <ul class="dropdown-menu">
           <li><a href="tentangkami.html">Mengenai Kami</a></li>
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
        <h1>Terima Kasih!</h1>
    </div>
</section>

<section class="form-section">
    <div class="container form-container">
        <div class="thankyou-message">
            
            <br>
            <a href="index.html" class="btn">Kembali ke Halaman Utama</a>
        </div>
    </div>
</section>


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

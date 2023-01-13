<?php
require 'Function.php';
$si = query ("SELECT FROM * murid")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Index.css">
    <title>KursusKu</title>
</head>
<body>
<nav class="navbar">
    <ul class="logo">Kursus<span id="Ku">Ku</span></ul>
    <a href="#judul">Home</a>
    <a href="#programs">Programs</a>
    <a href="#alumni">Alumni</a>
    <a href="#comunity">Comunity</a>
    <a href="#contact">Contact</a>
    <a class="button-login" href="Login.php">Login</a>
    </nav>

<header class="welcome-section">
    <h1 id="judul">Kursus<span id="Ku2">Ku</span></h1>
    <h2 id="slogan">Belajar Front End Web tanpa harus keluar rumah</h2>
    <p id="promosi">Disini kamu bisa belajar dengan nyaman tanpa harus keluar rumah. Yuk! Daftarkan diri anda sekarang juga..</p>
    <a id="button-daftar" href="Tambah_Data.php">Daftar Sekarang</a>
    </header>

<main class="programs">
    <h1>KursusKu</h1>
    <p id="programs">Kami menyediakan media pembelajaran menggunakan <span id="html">HTML</span> dan <span id="css">CSS</span></p>
    <p id="two">Disini kamu bisa belajar bahasa pemograman, seperti:</p>
    <p id="php">- PHP</p>
    <p id="pyton">- Pyton</p>
    <p id="java">- Java</p>
    <p id="javascript">- JavaScript</p>
    <p id="JQuery">- JQuery</p>
    <p id="flutter">- Flutter</p>
    </main>
    
<section class="alumni">
    <h1 id="alumni">Profil lulusan kami</h1>
    <h2 id="nama-lulusan1">Felix Widyanto</h1>
    <h3 id="pekerjaan">Web Developer</h2>
    <p id="ket_a">Felix adalah salah satu lulusan kami angkatan 2. Dia telah menguasai bahasa pemograman,</p>
    <p id="ket_b">seperti: PHP, Pyton, JavaScript, dan Query. Dia telah memenangkan berbagai perlombaan.</p>
    <p id="ket_c">Salah satunya ia memenangkan perlombaan tingkat Nasional yang diadakan oleh Amerika Serikat.</p>
    <p id="ket_d">Kini ia telah bekerja di Perusahan Besar, yaitu: Google</p> 

    <h2 id="nama-lulusan2">Michelle Bougenville</h1>
    <h3 id="pekerjaan">Web Developer</h2>
    <p id="ket_a">Michelle adalah salah satu lulusan kami angkatan 1. Dia telah menguasai bahasa pemograman,</p>
    <p id="ket_b">seperti: PHP, Pyton, Flutter, dan Query. Dia telah memenangkan berbagai perlombaan.</p>
    <p id="ket_c">Salah satunya ia memenangkan perlombaan tingkat Nasional yang diadakan oleh Filipina.</p>
    <p id="ket_d">Kini ia telah bekerja di NBS (Nusantara Beta Studio)</p> 
</section>
    
<section class="comunity">
    <h1 id="comunity">Kami bekerjasama dengan</h1>
    <img id="logo1" src="wow_ngoding.png" alt="#comunity" width="40px" height="40px">
    <img id="logo2" src="rumah_code.png" alt="#comunity" width="40px" height="20px">
    <img id="logo3" src="codeta.png" alt="#comunity" width="40px" height="20px">
    <img id="logo4" src="kodingin_aja.png" alt="#comunity" width="40px" height="20px">
    <img id="logo5" src="mengcode.png" alt="#comunity" width="40px" height="20px">
    </section>
    
<footer class="contact"> 
    <h1 id="contact">Hubungi kami</h1>
    <h2 id="c1">No.Telp: 0812-6521-9834</h2>
    <h3 id="c2">Email: kursusku@gmail.com</h2>
    <h4 id="c3">Instagram: kursus_ku</h2>
    <h5 id="c4">LinkedIn: KursusKu</h2>
    <img id="no_telp" src="#" alt="">
    <img id="email" src="#" alt="">
    <img id="instagram" src="#" alt="">
    <img id="linkedin" src="#" alt="">
    </footer>
</body>
</html>
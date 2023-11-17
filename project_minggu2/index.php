<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Perpustakaan Provinsi Jawa Tengah</title>
</head>
<body>
<?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
            }
        }
    ?>
<div>
    <!--Navbar-->
    <div class="container">
        <nav class="navbar">
            <ul class="navbar-list">
                <img src="foto/logo1.png" alt="" style="padding-left :10px;">
                <li class="navbar-item" style="padding-left :20px;"><a href="index.php">PERPUSTAKAAN</a></li>
                <li class="navbar-item" style="padding-left :20px;"><a href="index.php">Home</a></li>
                <li class="navbar-item"><a href="about.php">About</a></li>
                <li class="navbar-item"><a href="contact.php">Contact</a></li>
                <li class="navbar-item" style="padding-left: 56%;"><a href="login.php">Login</a></li>
                <li class="navbar-item"><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </div>
    
    <!--Grid Container-->
    <div class="grid-container">
        <div class="grid-item">
            <div class="container2">
                    <form class="login" action="cek_login.php" method="post">
                        <label>Username</label>
                        <input type="text" name="username" class="form_login" placeholder="Username" required="required">
                        <br/>
                        <label>Password</label>
                        <input type="password" name="password" class="form_login" placeholder="Password" required="required">
                        <br/>
                        <button class="btn-login" type="submit">LOGIN</button>
                    </form>
            </div>

            <div>
                <ul>
                    <a>
                        <img class="icon" href="" src="icon/instagram.png"></img>
                        <img class="icon" src="icon/twitter.png"></img>
                        <img class="icon" src="icon/facebook.png"></img>
                    </a>
                </ul>
            </div>

            <div class="call-center">
                <div class="row">
                    <div class="col"><p><b>HUBUNGI</b></p>
                        <ol>
                            <li><a href="#">08567894321</a></li>
                            <li><a href="#">08567894321</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item2" style="width: 100%;">
            <!--Tampilan Menu 1-->
            <div class="title">
                <center><h2>PERPUSTAKAAN PROVINSI JAWA TENGAH</h2></center>
                <div class="grid-index">
                    <label style="color:white;">Populer</label>
                    <div class="container-index">
                            <img class="book" src="buku/3.jpg">
                            <img class="book" src="buku/4.png">
                            <img class="book" src="buku/5.jpg">
                            <img class="book" src="buku/5.jpg">
                            <img class="book" src="buku/4.png">
                            <img class="book" src="buku/3.jpg">
                            <img class="book" src="buku/4.png">
                            <img class="book" src="buku/5.jpg">
                            <img class="book" src="buku/5.jpg">
                            <img class="book" src="buku/4.png">
                            <img class="book" src="buku/5.jpg">
                            <img class="book" src="buku/5.jpg">
                    </div>
            </div>
            <!--About-->
            <div class="about">
                <h2>ABOUT</h2>
                <br/><br/>
                <p>Perpustakaan Provinsi Jawa Tengah</p>
                <p>adalah salah satu perpustakaan yang
                    berlokasi di Kota Semarang, Indonesia.</p>
                <p>Perpustakaan ini memiliki tujuan untuk</p>
                <p>menyediakan sumber belajar dan informasi sebagai sarana pembelajaran</p>
                <p>bagi masyarakat kebutuhan akademis maupun nonakademis.</p>
            </div>

            <!--Tampilan Menu 2-->
            <div class="menu-list">
                <div class="row">
                    <div class="col"><p><b>SOSIAL MEDIA</b></p>
                        <ol>
                            <li><a href="login.php">Facebook</a></li>
                            <li><a href="login.php">Twitter</a></li>
                            <li><a href="login.php">Instagram</a></li>
                            <li><a href="login.php">Email</a></li>
                        </ol>
                    </div>
                    <div class="col"><p><b>PROFIL</b></p>
                        <ol>
                            <li><a href="login.php">Jl. Sriwijaya No. 29 Semarang</a></li>
                            <li><a href="login.php">Email@gmail.com</a></li>
                            <li><a href="login.php">+62.... </a></li>
                        </ol>
                    </div>
                    <div class="col"><p><b>KATEGORI</b></p>
                        <ol>
                            <li><a href="login.php">Pendidikan</a></li>
                            <li><a href="login.php">Novel</a></li>
                            <li><a href="login.php">Sastra</a></li>
                            <li><a href="login.php">Agama</a></li>
                            <li><a href="login.php">Bahasa</a></li>
                            <li><a href="login.php">Teknik</a></li>
                        </ol>
                    </div>
                </div>
                </div>
            </div>
            
        </div>
    </div>

</div>
<!--Footer-->
<div class="footer">
<footer>
    <p>&copy; Copyright 2023 | Web Perpustakaan Provinsi Jawa Tengah</p>
</div>
</body>
</html>
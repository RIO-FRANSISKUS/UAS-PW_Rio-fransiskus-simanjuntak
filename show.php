<?php
    session_start();
    include "koneksi.php";
    if (!isset($_SESSION['username'])){
        header("location : login.php");
    }

    if (!isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show | Cartoon Network</title>
    <link rel="shortcut icon" href="footer.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="styleshow.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="jquery.js"></script>
</head>
<body class="body_class">
    <!--awal navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light " id="nav">
        <a class="navbar-brand" href="cn.php">
            <img src="footer.jpg" width="30" height="30" class="d-inline-block align-top" alt="CN">
            Cartoon Network
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Store </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="show.php">Show </a>
              </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Wallpaper
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">The Amazing world of Gumball</a>
                    <a class="dropdown-item" href="#">We Bare bears</a>
                    <a class="dropdown-item" href="#">Regular Show</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">New Wallpaper</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">CN</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
          <ul class="navbar-nav">
            <a href="aksilogout.php" class="nav-link mr-1 ml-3">Logout</a>
          </ul>
        </div>
    </nav>
    <!--akhir navbar-->

    <section>
        <img src="awan.png" alt="awan" id="awan">
        <img src="rumah-iceking.png" alt="rumah-iceking" id="rumah_iceking">
        <img src="bukit-belakang.png" alt="mountains_behind" id="bukit_belakang">
        <img src="rumah.png" alt="rumah" id="rumah">
        <h2 id="logo">Cartoon Network</h2>
        <h3 id="org">Original</h3>
        <img src="bukit-depan.png" alt="bukit-depan" id="bukit_depan">
    </section>

    <div class="sec">
        <div class="container">
            <h2>Most popular show</h2>
            <div class="row show">
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="col-6"><a href="gumball.php"><img src="THE-AMAZING-WORLD-OF-GUMBALL-scaled.jpg" alt=""></a></div>
                        <div class="col-6"><a href="#"><img src="poster-clarence.jpg" alt=""></a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="col-6"><a href="#"><img src="poster-craign.jpg" alt=""></a></div>
                        <div class="col-6"><a href="#"><img src="poster-puffgirl.png" alt=""></a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="col-6"><a href="#"><img src="poster-ben10.jpg" alt=""></a></div>
                        <div class="col-6"><a href="#"><img src="poster-teentitansgo.jpg" alt=""></a></div>
                    </div>
                </div>
            </div>

        <h2>Populer this week</h2>
            <div class="row show">
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="col-6"><a href="gumball.html"><img src="images.jfif" alt=""></a></div>
                        <div class="col-6"><a href="#"><img src="d9275d9a07f9a43e7b93095f7dafbfa6.jpg" alt=""></a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="col-6"><a href="#"><img src="regular-show-cast-i15079.jpg" alt=""></a></div>
                        <div class="col-6"><a href="#"><img src="poster-steven.jpg" alt=""></a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="col-6"><a href="#"><img src="oggy.jpg" alt=""></a></div>
                        <div class="col-6"><a href="#"><img src="chowder.jpg" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="copyright">
                <p style="font-size: smaller; text-shadow: white;">&copy; 2016 turner. all rights reserved.</p>
            </div>
            <div class="call">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>

    <!--awal js-->
    <script>
        let awan = document.getElementById('awan');
        let rumah_iceking = document.getElementById('rumah_iceking');
        let bukit_belakang = document.getElementById('bukit_belakang');
        let rumah = document.getElementById('rumah');
        let bukit_depan = document.getElementById('bukit_depan');
        let logo = document.getElementById('logo');
        let org = document.getElementById('org')

        window.addEventListener('scroll',function(){
            let value = window.scrollY;
            awan.style.left = value * 0.25 + 'px';
            rumah_iceking.style.top = value * 0.25 + 'px';
            bukit_belakang.style.top = value * 0.75 + 'px';
            rumah.style.marginTop = value * 0.25 + 'px';
            logo.style.marginTop = value * 0.75 + 'px';
            org.style.marginTop = value * 0.75 + 'px';
            bukit_depan.style.top = value * 0+ 'px';
        })
    </script>
    <!--akhir js-->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
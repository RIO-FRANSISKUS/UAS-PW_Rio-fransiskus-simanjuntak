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
    <title>The Amazing World Of Gumball</title>
    <link rel="shortcut icon" href="footer.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="gumball.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="jquery.js"></script>
</head>
<body>
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
                  <a class="nav-link" href="login.php">Show </a>
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
        <img src="stars.png" alt="">
        <img src="1.png" id="1">
        <img src="2.png" id="2">
        <img src="3.png" id="3">
        <img src="4.png" id="4">
        <img src="5.png" id="5">
        <img src="6.png" id="6">
        <img src="7.png" id="7">
        <img src="8.png" id="8">
        <img src="9.png" id="9">
        <img src="logo-gumball.png" id="logo">
        <img src="gumball-family.png" id="gumball_family">
        <img src="10.png" id="10">
        <img src="11.png" id="11">
        <img src="12.png" id="12">
    </section>

    <div class="sec">
        <img src="stars.png" alt="">
        <div class="container">
            <h2 class="judul">Synopsis</h2>
            <p class="sinopsis">The series revolves around the lives of 12-year-old Gumball Watterson, a blue cat and his goldfish best friend, 
                adoptive brother 10-year-old Darwin, who attend middle school in the fictional city of Elmore, California. 
                They frequently find themselves involved in various shenanigans around the city, during which time they interact 
                with fellow family members : younger sister Anais, mother Nicole, and father Richard and an extended supporting cast of characters.
            <br>
            Bocquelet based several of the series' characters on rejected characters from his previous commercial work and making its 
            premise a mixture of "family shows and school shows", which Cartoon Network was heavily interested in. He pitched The Amazing 
            World of Gumball to the network and Turner Broadcasting executive Daniel Lennard subsequently greenlit the production of the series. 
            It is the first series to be produced by Cartoon Network Studios Europe (also known as Great Marlborough Productions, Inc. 
            and formerly known as Cartoon Network Development Studio Europe), and it is produced in association with Boulder Media Limited in 
            Ireland and Dandelion Studios for season 1 and Studio SOI in Germany from season 2 onward.
        </p>
        <a href="#" class="btn">SUBSCRIBE</a>
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

    <script>
        $(document).ready(function(){
            $(document).mousemove(function(e){
                $('#1').css({
                    'left': -e.pageX/20,
                    'top': -e.pageY/20 + 20
                })
                $('#2').css({
                    'left': e.pageX/20,
                    'top': e.pageY/20 
                })
                $('#3').css({
                    'left': e.pageX/15,
                    'top': e.pageY/15
                })
                $('#4').css({
                    'left': e.pageX/10,
                    'top': e.pageY/10
                })
                $('#5').css({
                    'left': e.pageX/5,
                    'top': e.pageY/5
                })
                $('#6').css({
                    'left': -e.pageX/90,
                    'top': -e.pageY/90
                })
                $('#7').css({
                    'left': e.pageX/15,
                    'top': e.pageY/15
                })
                $('#8').css({
                    'left': -e.pageX/3,
                    'top': -e.pageY/3
                })
                $('#9').css({
                    'left': e.pageX/10,
                    'top': e.pageY/10
                })
                $('#10').css({
                    'left': -e.pageX/5,
                    'top': -e.pageY/5
                })
                $('#11').css({
                    'left': -e.pageX/20,
                    'top': -e.pageY/20 
                })
                $('#12').css({
                    'left': e.pageX/20,
                    'top': e.pageY/20
                })
                $('#gumball_family').css({
                    'left': -e.pageX/15,
                    'top': -e.pageY/15 
                })
            })

            $(window).scroll(function(){
                var wScroll = $(this).scrollTop();
                    if(wScroll > $('.judul').offset().top-300){
                    $('.judul').addClass('muncul')
                    }

                    if(wScroll > $('.sinopsis').offset().top-200){
                    $('.sinopsis').addClass('muncul')
                    }
            })
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
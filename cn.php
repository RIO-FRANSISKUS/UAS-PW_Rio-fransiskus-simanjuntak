<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartoon Network</title>
    <link rel="shortcut icon" href="footer.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
                    <a class="nav-link" href="#">Store</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Show</a>
              </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false">
                        Walpaper
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">The Amazing world of Gumball</a>
                    <a class="dropdown-item" href="#">We Bare bears</a>
                    <a class="dropdown-item" href="#">Regular Show</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">New Walpaper</a>
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
            <a href="login.php" class="nav-link mr-1 ml-3">Login</a>
            <a href="#" class="nav-link ">Sign-Up</a>
          </ul>
        </div>
    </nav>
    <!--akhir navbar-->

    <section>
        <img src="stars.png" alt="stars" id="stars">
        <img src="moon.png" alt="moon" id="moon">
        <img src="mountains_behind.png" alt="mountains_behind" id="mountains_behind">
        <h2 id="text">Cartoon Network</h2>
        <a href="home.php" id="btn">Explore</a>
        <img src="mountains_front.png" alt="mountains_front" id="mountains_front">
    </section>

    <div class="sec">
        <div class="container">
        <h2 class="text-one">About Cartoon Network</h2>
        <p class="text-two">Cartoon Network is a kid's channel delivering the best comedy and adventure shows. It’s filled with universal humor and fun, 
            promoting the value of friendship and stimulating imagination of its core audience - boys and girls aged 6-12. With the ultimate 
            mission to encourage children to be themselves, Cartoon Network boasts an array of well-known animations and popular characters that have gained 
            recognition around the world. Cartoon Network is offering an original content for kids and families with hits
            such as “Amazing world of Gumball”, “We Bare Bears”, “Craig of the Creek”, “Clarence”, “Steven Universe” and “Uncle Grandpa”, as well as animated 
            adventure series: "The Powerpuff Girls", "Ben 10" and ”Teen Titans Go!”.
            <br><br>
            Cartoon Network is a global entertainment brand available in 20 languages in over 174 million homes in 111 countries. You can also get familiar 
            with channel productions thanks to the award-winning website, as well as through games, video on demand, mobile 
            devices and a wide range of license articles. The owner of the Cartoon Network brand is WarnerMedia.
        </p>
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

    <!--awal javascript-->
    <script>
        let stars = document.getElementById('stars');
        let moon = document.getElementById('moon');
        let mountains_behind = document.getElementById('mountains_behind');
        let text = document.getElementById('text');
        let btn = document.getElementById('btn');
        let mountains_front = document.getElementById('mountains_front');
        let nav = document.getElementById('nav');

        window.addEventListener('scroll',function(){
            let value = window.scrollY;
            stars.style.left = value * 0.25 + 'px';
            moon.style.top = value * 0.75 + 'px';
            mountains_behind.style.top = value * 0.25 + 'px';
            mountains_front.style.bottom = value * 0 + 'px';
            text.style.marginTop = value * 0.75 + 'px'; 
            btn.style.marginTop = value * 0.75 + 'px';
            nav.style.top = value * 0.75 + 'px';
        })

        $(document).ready(function(){
            $(window).scroll(function(){
                var wScroll = $(this).scrollTop();
                if(wScroll > $('.text-one').offset().top-300){
                    $('.text-one').addClass('muncul')
                }

                if(wScroll > $('.text-two').offset().top-150){
                    $('.text-two').addClass('muncul')
                }
            })
        })
    </script>
    <!--akhir javascript-->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
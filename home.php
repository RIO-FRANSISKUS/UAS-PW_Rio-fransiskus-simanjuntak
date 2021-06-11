<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Cartoon Network</title>
    <link rel="shortcut icon" href="footer.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="jquery.js"></script>

    <style>
      footer{
      background: white;
      overflow-y: hidden;
    }
    .footer-content{
      display: flex;
      flex-wrap: wrap;
    }
    .copyright{
      margin-right: 72%;
      margin-left: 30px;
      color: black;
    }
    .call .fab{
      margin-right: 30px;
    }
    .call a{
      color: black;
    }
    .call a:hover{
      color: gray;
    }
    .card-deck .card, .text-one, .text-two, .table, .embed-responsive{
      opacity: 0;
      transition: 0.5s;
      transform: translateY(-40px);
    }
    .card-deck .card.muncul, .text-one.muncul, .text-two.muncul, .table.muncul, .embed-responsive.muncul{
      opacity: 1;
      transform: translate(0,0);
    }
  </style>
  </head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                        wallpaper
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">The Amazing world of Gumball</a>
                    <a class="dropdown-item" href="#">We Bare bears</a>
                    <a class="dropdown-item" href="#">Regular Show</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">New wallpaper</a>
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
    <!-- awal carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="2557810.jpg" height="700" class="d-block w-100" alt="Walpaper-1">
            <div class="carousel-caption d-none d-md-block">
              <h5>It's time for Adventure Time</h5>
              <p>Checkout for our new wallpaper</p>
        </div>
            </div>
          <div class="carousel-item">
            <img src="3921811.jpg" height="700" class="d-block w-100" alt="Walpaper-2">
            <div class="carousel-caption d-none d-md-block">
              <h5>It's time for Adventure Time</h5>
              <p>Checkout for our new wallpaper</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="wallpaperflare.com_wallpaper (1).jpg" height="700" class="d-block w-100" alt="Walpaper-3">
            <div class="carousel-caption d-none d-md-block">
              <h5>It's time for Adventure Time</h5>
              <p>Checkout for our new wallpaper</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="wallpaperflare.com_wallpaper.jpg" height="700" class="d-block w-100" alt="Walpaper-4">
            <div class="carousel-caption d-none d-md-block">
              <h5>It's time for Adventure Time</h5>
              <p>Checkout for our new wallpaper</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <!--akhir carousel-->

    <!--awal carddeck-->
    <div class="container">
      <p class="mt-5"> <h1 class="text-one">Cartoon Network Original Marcantdises</h1></p>
      <div class="card-deck  mb-5">
        <div class="card shadow-lg my-4 py-3">
          <img src="mar1.jpg"  height="300" class="card-img-top" alt="The amazing world of gumball">
          <div class="card-body">
            <h5 class="card-title justify-content-center">Cartoon Network's Toys</h5>
            <h1 class="card-text">KLIK</h1>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card shadow-lg my-4 py-3">
          <img src="mar2.png" height="300" class="card-img-top" alt="We bare bears">
          <div class="card-body">
            <h5 class="card-title justify-content-center">Clothes and Others</h5>
            <h1 class="card-text">SHOP</h1>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card shadow-lg my-4 py-3">
          <img src="mar3.jpg" height="300" class="card-img-top" alt="Regular show">
          <div class="card-body">
            <h5 class="card-title justify-content-center">Event</h5>
            <h1 class="card-text">NOW !</h1>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
    </div>
    <!--akhir carddeck--> 

    <!--awal table-->
    <p class="mt-5"> <h1 class="text-two">Show's Schedule</h1></p>
    <table class="table table-bordered  mb-5 shadow-lg my-4 py-3">
        <thead>
          <tr>
            <th scope="col">Show</th>
            <th scope="col">Friday</th>
            <th scope="col">Saturday</th>
            <th scope="col">Sunday</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">The Amazing World of Gumball</th>
            <td>8 Am - 9 Am</td>
            <td>12 pm - 1 pm</td>
            <td>3 pm - 4 pm</td>
          </tr>
          <tr>
            <th scope="row">We bare bears</th>
            <td>3 pm - 4 pm</td>
            <td>8 Am - 9 Am</td>
            <td>12 pm - 1 pm</td>
          </tr>
          <tr>
            <th scope="row">Regular show</th>
            <td>12 pm - 1 pm</td>
            <td>3 pm - 4 pm</td>
            <td>8 Am - 9 Am</td>
          </tr>
        </tbody>
      </table>
    <!--akkhir jadwal-->

    <!--awal map-->
    <div class="embed-responsive embed-responsive-16by9 mb-5 shadow-lg my-4 py-3">
      <iframe class="embed-responsive-item" src="//www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5672.457631855857!2d-118.3134422812887!3d34.18239759721664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c295d9fba32dc1%3A0xeed0bb23a381030!2sCartoon%20Network%20Studios!5e0!3m2!1sid!2sid!4v1619883628139!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
  <!--akhir map-->

  <!--awal footer-->
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
    <!--akhir footer-->

<script>
  $(document).ready(function(){
    $(window).scroll(function(){
      var wScroll = $(this).scrollTop();
      if(wScroll > $('.card-deck').offset().top-300) {
        $('.card-deck .card').each(function(i){
          setTimeout(function(){
            $('.card-deck .card').eq(i).addClass('muncul')
          },300*(i+1))
        })
      }

      if(wScroll > $('.text-one').offset().top-300){
        $('.text-one').addClass('muncul')
      }

      if(wScroll > $('.text-two').offset().top-300){
        $('.text-two').addClass('muncul')
      }

      if(wScroll > $('.table').offset().top-150){
        $('.table').addClass('muncul')
      }

      if(wScroll > $('.embed-responsive').offset().top-100){
        $('.embed-responsive').addClass('muncul')
      }
    })
  })
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
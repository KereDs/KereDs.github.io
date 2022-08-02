<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title>KereDs的個人網站</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  <link rel="icon" href="/assets/img/letter-d.png" type="image/icon type">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">



  <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">




  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">

</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-light">
      <div class="container-fluid">

        <a class="navbar-brand text-black px-3" href="index.php" style="font-weight:bold;">Derek Fang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto mb-2 mb-md-0">
            <!-- <li class="nav-item">
              <a class="nav-link active text-black " aria-current="page" href="aboutme.html"
                style="font-weight: bold;"><span>About me</span></a>
            </li>
            <li class="nav-item">
              <p class="pt-2">|</p>
            </li> -->
            <li class="nav-item">
              <a class="nav-link text-black px-3" href="resume.php" style="font-weight: bold;">Resume</a>
            </li>
            <li class="nav-item">
              <p class="pt-2">|</p>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black px-3" href="articlehome.php" style="font-weight: bold;">Articles</a>
            </li>
            <li class="nav-item">
              <p class="pt-2">|</p>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black px-3" href="#" style="font-weight: bold;">Contact</a>
            </li>
            <img src="/assets/img/d.png" alt="d" width="32" height="32">
          </ul>
          <!-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
        </div>
      </div>
    </nav>
  </header>

  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
          <img src="/assets/img/succcess.jpg" width="100%" height="550" aria-hidden="true"
            preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <div class="container">
            <div class="carousel-caption text-start">
              <img src="/assets/img/me.jpg" height="250" width="250" data-holder-rendered="true" class="rounded-circle">
              <h1>Welcome to my blog.</h1>
              <p>Try to build up a personal website as a biginner</p>
              <p><a class="btn btn-lg btn-outline-light" href="/">Know more about me</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
          <img src="/assets/img/succcess.jpg" width="100%" height="550" aria-hidden="true"
            preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
          <img src="/assets/img/succcess.jpg" width="100%" height="550" aria-hidden="true"
            preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container">
      <div class="row p-4 ">
        <div class="col-md-4 ">
          <div class="article" style="height: 400px;">
            <button class="btnnn" onclick="window.location.href='articlehome.php'" type="button"
              style="font-weight: bold; font-size: large;">Article</button>
          </div>
        </div>

        <div class="col-md-4 ">
          <div class="project" style="height: 400px;">
            <button class="btnnn" onclick="window.location.href='#'" type="button"
              style="font-weight: bold; font-size: large;">Project</button>
          </div>
        </div>

        <div class="col-md-4 ">
          <div class="music" style="height: 400px;">
            <button class="btnnn" onclick="window.location.href='#'" type="button"
              style="font-weight: bold; font-size: large;">Music</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="pic px-4">
        <img class="" src="/assets/img/beautiful3.jpg" width="100%">
      </div>
    </div>


    <div class="container">
      <div class="row p-5">
        <div class="col-md-7">
          <h1 class="intro">
            方德霖 Derek Fang
          </h1>
          <p class="px-4" style="text-align: right">Full-time Student ( Masters In Finance )</p>
        </div>
        <div class="col-md-4">
          <img src="/assets/img/IMG_1355_2.jpg" height="200" width="200" data-holder-rendered="true"
            class="rounded-circle">
        </div>
      </div>

      <div class="row mx-5">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <h4 style="font-weight: 800;text-decoration:underline;">
            Intoduction
          </h4>
          <p style="font-weight: 700">
            大家好，我叫方德霖，我是一個雖然非常懶惰，但是遇到有興趣的事情時會拼命去做的人。有的時候有點天馬行空，整天做著白日夢，也對周遭的很多事情不太關心。
          </p>
          <p style="font-weight: 700">
            我平時的興趣是彈吉他，其實我小學的時候是學鋼琴的，但是在高中接觸到吉他之後就被我打入冷宮了，所以從高中開始就一直彈吉他到現在，雖然沒有很會彈，但是為我的生活帶來許多樂趣。
          </p>
          <p style="font-weight: 700">
            除此之外我也很喜歡玩電腦，我大概從小學二年級就開始玩線上遊戲，還記得是某次去電影院看電影時，在外面投籃機的上面撿到一片遊戲光碟，從那時就開啟我玩電腦的不歸路。
          </p>
          <h4 class="pt-4" style="font-weight: 800;text-decoration:underline;">
            Bio
          </h4>
          <div>
            <span style="font-weight: 800;font-size:18px;">1999</span>
            <span class="px-2" style="font-weight: 700">
              出生於台北
            </span>
          </div>
          <div>
            <span style="font-weight: 800;font-size:18px;">2015</span>
            <span class="px-2" style="font-weight: 700">
              就讀於台北市立松山高級中學
            </span>
          </div>
          <div>
            <span style="font-weight: 800;font-size:18px;">2018</span>
            <span class="px-2" style="font-weight: 700">
              國立陽明交通大學 資訊管理與財務金融學系
            </span>
          </div>
          <div>
            <span style="font-weight: 800;font-size:18px;">2022</span>
            <span class="px-2" style="font-weight: 700">
              國立台灣大學 財務金融研究所
            </span>
          </div>

          <h4 class="pt-4" style="font-weight: 800;text-decoration:underline;">
            Interest
          </h4>
          <span style="font-weight: 700">
            <li> 聽音樂</li>
            <li> 彈吉他 </li>
            <li> 玩電腦 </li>
            <li> 籃球 </li>
            <li>看韓劇 </li>
          </span>

          <h4 class="pt-4" style="font-weight: 800;text-decoration:underline;">
            Works
          </h4>
          <span>
            <div>
              <span style="font-weight: 800;font-size:18px;">2022</span>
              <span class="px-2" style="font-weight: 700">
                KGI 凱基證券-風險管理部實習
              </span>
            </div>
          </span>
          <h4 class="pt-4" style="font-weight: 800;text-decoration:underline;">
            On The Web
          </h4>
          <p class="pt-1"><a href="https://www.facebook.com/KereDs1213/"><img src="/assets/img/facebook.png" alt="f"
                width="32" height="32"></a><a class="text-black" href="https://www.facebook.com/KereDs1213/" style="text-decoration:none;">
                  <span class="px-3" style="font-weight: 700">DerekFang</span></a></p>

          <p><a href="https://www.instagram.com/fangderek/"><img src="/assets/img/instagram.png" alt="ig" width="32"
                height="32"></a><a class="text-black" href="https://www.instagram.com/fangderek/" style="text-decoration:none;">
                  <span class="px-3" style="font-weight: 700">fangderek</span></a></p>
                
          <p><a href="mailto:6500dr@gmail.com"><img src="/assets/img/email.png" alt="ig" width="32" height="32"></a>
            <a class="text-black" href="mailto:6500dr@gmail.com" style="text-decoration:none;"><span class="px-3"
              style="font-weight: 700">6500dr@gmail.com</span></a></p>
        </div>
        <div class="col-md-3">
          <button id="scrolltotop">
            <i class="material-icons">arrow_upward</i>
          </button>
        </div>
      </div>
    </div>
    
  </main>
  <footer class="p-3 mt-4 text-muted border-top" style="text-align:center;">
    © 2022 KereDs
  </footer>
  <script>
    const scrolltotop = document.querySelector("#scrolltotop");
    scrolltotop.addEventListener("click", function () {

      // $("html,").animate({scrollTop:0},"slow");

      window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
      });
    });
  </script>

  <script src="/assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
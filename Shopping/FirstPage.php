<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文宏運動用品店</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./FirstPageStyle.css">
    <link rel="icon" type="image/png" href="./Firstpage_img/WHlogo-719px.png">

</head>

<body>
    <header class="page-header">
        <h1>
            <a href="FirstPage.php"><img class="logo" src="./Firstpage_img//WHlogo-719px.png" alt="文宏"></a>
        </h1>
        <nav class="navbar">
            <!-- <ul class="navbar"> -->
            <a class="navbar-h" href="index.php">球鞋專區</a>
            <a class="navbar-h" href="">專業運動</a>
            <a class="navbar-h" href="">服裝客製化</a>
            <a class="navbar-h" href="">維修服務</a>
            <a class="navbar-h" href="">故事屋</a>
            <!-- </ul> -->
        </nav>
    </header>

    <div class="home-page-container">
        <h2 class="page-title">文宏運動用品</h2>
        <div class="home-page-intro">
            <p>在員林服務超過五十年的運動用品店<br>值得您~</p>
            <a class="home-page-button" href="">了解更多</a>
        </div>
    </div>
    <!--home-container -->

    <div class="news-container">
        <!-- <h1>最新消息</h1> -->
        <div class="news-slider" data-aos="flip-up" data-aos-duraiton="5000" data-aos-delay="100">
            <div class="sliders">
                <!-- radio button  -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!-- slide img -->
                <div class="slide first">
                    <img src="./Firstpage_img/slide1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./Firstpage_img/slide2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./Firstpage_img/slide3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./Firstpage_img/slide4.jpg" alt="">
                </div>
                <!-- automatic navigation -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
            </div>

            <!-- manual navigation -->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>

            <script class="news-slide" type="text/javascript">
                var counter = 1;
                setInterval(function () {
                    document.getElementById('radio' + counter).checked = true;
                    counter++;
                    if (counter > 4) {
                        counter = 1;
                    }
                }, 5000);
            </script>
        </div>
    </div>

    <div class="space"></div>

    <div class="com-container">
        <div class="com-img-slider" data-aos="fade-right" data-aos-duraiton="5000" data-aos-delay="200">
            <a href="">
                <div class="com-bg">
                  <!-- <h1>來<br>去<br>逛<br>逛</h1>     -->
                </div>
            </a>
        </div>
            <div data-aos="zoom-in" data-aos-duraiton="5000" data-aos-delay="200" class="com-info">
                <div class="com-info-h">
                    <h1>Shop The Look</h1>
                </div>
                <div id="carouselExampleDark"  class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="./Firstpage_img/shoe1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>PG 5 EP</h5>
                        <p>$3,800</p>
                        <a href="" class="more-button">了解更多</a>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./Firstpage_img/shoe2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Zoom Freak 2</h5>
                        <p>$4,180</p>
                        <a href="" class="more-button">了解更多</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./Firstpage_img/shoe3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Kyrie 7 EP</h5>
                        <p>$4,200</p>
                        <a href="" class="more-button">了解更多</a>
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        



        
        <!-- 商品slider start -->

        <!-- <div class="slide hi-slide">
            <div class="hi-prev"></div>
            <div class="hi-next"></div>
            <ul>
                <li><img src="/img/com-img2.jpg" alt=""></li>
                <li><img src="/img/com-img3.jpg" alt=""></li>
                <li><img src="/img/com-img4.jpg" alt=""></li>
                <li><img src="/img/com-img5.jpg" alt=""></li>
                <li><img src="/img/com-img6.jpg" alt=""></li>
            </ul>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="/hislide/jquery.hislide.js"></script>
        <script>
            $('.slide').hiSlide();
        </script> -->

        <!-- 商品slider end -->

    </div>

    <div class="space"></div>


    <footer class="page-footer">
        <div>
            <p><small>&copy; 2020 WinHornsports</small></p>
        </div>
    </footer>
    <!--footer-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
    
</body>

</html>
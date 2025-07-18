<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLOSPLASH</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="js/style.js"></script>
    
</head>  
<body>


<div id="scrollProgressBar" style="position:fixed;top:0;left:0;width:0;height:5px;background-color:blue;"></div>

    <div class="nav-bar">
        <div class="logo">
            <img class="first-logo" src="images/first-logo.png" alt="">
            <h1 style="font-family: playbill;">SOLOSPLASH</h1>
        </div>
        <div class="menu-containor">
            <div class="menu" id="menu">
                <a href="#">HOME</a>
                <a href="#games" >GAMES</a>
                <a href="signup.php">REGISTER</a>
                <a href="login.php">LOGIN</a>
               
            </div>
            <div class="navbar-icon">
     
                <i class="fa-solid fa-bars" style="color: #ffffff;" id="bars"></i>
            </div>
        </div>
    </div>
    <div id="sidebar" class="sidebar">
    <a href="#" >ABOUT</a>
    <a href="#" >CONTACT</a>
    <a href="users.html" id="us">USERS</a>
    <a href="logout.php">LOGOUT</a>
</div>
    <div class="hero">
    
            <div class="hero-contant">
            <h3>SINGLE PLAYER</h3>
            <h1>Simple <span>but</span> Fun</h1>
            <p>SoloSplash is a single layer gaming website with simple games which haunts you!
            </p>
            <button>READ MORE</button>
        </div>
        <div class="hero-image">
            <img src="four_slider_img02.png" alt="">
        </div>
  
    </div>

    <div class="swiper mySwiper" id="games">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="height: 150px;"><img src="images/tictactoe.jpg"  style="height:100px"></div>
            <div class="swiper-slide" style="height: 150px;"><img src="images/quiz.jpg" alt=""style="height:100px"></div>
            <div class="swiper-slide" style="height: 150px;"><img src="images/type.png" alt="" style="height:100px"></div>
            <div class="swiper-slide" style="height: 150px;"><img src="images/flappy.jpg" alt="" style="height:100px"></div>
            <div class="swiper-slide" style="height: 150px;"><img src="images/tictactoe.jpg" alt="" style="height:100px"></div>
            <div class="swiper-slide" style="height: 150px;"><img src="images/quiz.jpg" alt="" style="height:100px"></div>
        </div>
    </div>
    <section div class="product-content" data-aos="fade-in">
        <div class="product_wrapper" >
            <div class="product_main">
                <div class="swiper mySwiper1">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    <a href="indexquiz.html" style="color: #ffffff;"><div class="product fade-in" style="background-image: url(images/quiz.jpg);background-repeat:no-repeat;background-size:contain">
                            <div class="btn"><h4>Start</h4></div>
                            <div class="product1-contant">
                                <h3>QUIZ</p>
                            </div></a>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                    <a href="indextype.html" style="color: #ffffff;">   <div class="product fade-in" style="background-image: url(images/type.png);background-repeat:no-repeat;background-size:contain">
                            <div class="btn"><h4>Start</h4></div>
                            <div class="product1-contant">
                                <h3>KEYSTORM</p>
                            </div></a> 
                        </div>
                    </div>
                    <div class="swiper-slide">
                    <a href="indexflap.html" style="color: #ffffff;"><div class="product fade-in" style="background-image: url(images/flappy.jpg); background-repeat:no-repeat;background-size:contain">
                            <div class="btn"><h4>Start</h4></div>
                            <div class="product1-contant">
                                <h3>FLAPPYBIRD</p>
                            </div></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <a href="indextictactoe.html" style="color: #ffffff;"><div class="product fade-in" style="background-image:url(images/tictactoe.jpg);background-repeat:no-repeat;background-size:contain">
                            <div class="btn"><h4>Start</h4></div>
                            <div class="product1-contant">
                                <h3>TIC TAC TOE</p>
                            </div>
                        </a>
                        </div>
                    </div>
        
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
</section>

<footer>
    <p>&copy; 2024 SOLOSPLASH. All rights reserved.</p><br>
    <p>
        <a href="#">About</a> | <br><br>
        <a href="#">Contact</a><br><br>
    </p>
    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
       
        <script>
     
// Toggle sidebar on bars icon click
document.getElementById("bars").addEventListener("click", function() {
    var sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("open");
});


                const menuItems = document.querySelectorAll('.menu a');

menuItems.forEach(item => {
    item.addEventListener('click', function() {
        menuItems.forEach(link => link.classList.remove('active'));
        this.classList.add('active');
    });
});

            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,
                autoplay: true,
                breakpoints: {
                    500: {
                        slidesPerView: 4
                    },
                    900: {
                        slidesPerView: 5
                    }
                }
            });
    
            var swiper = new Swiper(".mySwiper1", {
            slidesPerView: 3,
            spaceBetween: 10,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });

    // Initialize AOS
    AOS.init({
        duration: 1000,  // Animation duration in ms
        once: false,     // Animation on both scroll up and down
    });
    window.addEventListener("scroll", function() {
    var navbar = document.querySelector(".nav-bar");
    var hero = document.querySelector(".hero");
    var scrollPosition = window.scrollY;

    // If scrolled more than 50px, shrink the navbar and hero content
    if (scrollPosition > 50) {
        navbar.classList.add("shrink");
        hero.classList.add("shrink");
    } else {
        navbar.classList.remove("shrink");
        hero.classList.remove("shrink");
    }
});


    // Scroll progress bar functionality
    window.onscroll = function() {
        var scrollProgressBar = document.getElementById('scrollProgressBar');
        var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        var scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (scrollTop / scrollHeight) * 100;
        scrollProgressBar.style.width = scrolled + '%';
    }; 
        </script>
</body>
</html>
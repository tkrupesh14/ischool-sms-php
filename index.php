<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSchool - The E-School System</title>
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- main css -->
    <link rel="stylesheet" href="./css/main.css?v=<?php echo time(); ?>">
</head>
<body>
    <!-- navbar -->
    <header class="header">
        <h1 class="logo">iSchool</h1>
        <nav class="menu">
            <ul class="nav-links">
                <li class="links"><a href="#">Home</a></li>
                <li class="links"><a href="#courses">Courses</a></li>
                <li class="links"><a href="#">About Us</a></li>
                <li class="links"><a href="#">Contact Us</a></li>
            </ul>
        </nav>
        <a href="./login.php" class="cta"><button>Dashboard</button></a>
    </header>

    <!-- hero section -->
    <div class="hero">

    <!-- hero content -->
    <div class="hero-content">
        <h1>Welcome</h1>
        <h3>To iSchool</h3>
        <hr>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis praesentium repellendus amet vero, ut debitis et similique explicabo ex quod.</p>

     <a href="#courses">   <button class="btn btn1">Explore</button></a>
        <button class="btn btn2">Dashboard</button>
    </div>
    
    <!-- hero image -->
    <div class="hero-image">
        <img src="./assets/Images/Hero Section/hero-img.svg" alt="">
    </div>
    </div>
    <hr class="section-over">

    <!-- courses section -->
    <div class="courses" id="courses">
        <div class="title">
            <h1>Courses</h1>
            <center> <hr class="under-title"> </center>
        </div>
        <div class="box">
            <div class="front">
                <img src="./assets/Images/courses/bca.jpg" alt="">
            </div>
            <div class="back">
                <h1>BCA</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia sit nostrum nemo ea commodi quae expedita mollitia at ipsum ratione.</p>
            </div>
        </div>
        <div class="box">
            <div class="front">
                <img src="./assets/Images/courses/bsc-it.jpg" alt="">
            </div>
            <div class="back">
                <h1>BSC IT</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia sit nostrum nemo ea commodi quae expedita mollitia at ipsum ratione.</p>
            </div>
        </div>
        <div class="box">
            <div class="front">
                <img src="./assets/Images/courses/bsc-sci.jpg" alt="">
            </div>
            <div class="back">
                <h1>BSC</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia sit nostrum nemo ea commodi quae expedita mollitia at ipsum ratione.</p>
            </div>
        </div>
    </div>
</body>
</html>
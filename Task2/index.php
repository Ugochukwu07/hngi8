<?php
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){  
    $url = "https://";   
}else{ 
    $url = "http://"; 
}  
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];
$LOCAL = strpos($url, 'localhost:8080') ? 1 : 0;

define('ROOT_PATH', realpath(dirname(__FILE__)));
if($LOCAL){
    define("DEMO", TRUE);
}else {
    define("DEMO", FALSE);
}
include('app.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ugochukwu</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>
    b{
        color: white !important;
    }
    </style>
</head>

<body>
    <div class="container navbar">
        <header>
            <div class="logo">
                <!-- <h1>HNGi8</h1> -->
                <img src="https://internship.zuri.team/static/media/logo.36d2d48a.svg" class="img-fluid" width="170" style="background: white; padding: 5px; border-radius: 5px;" alt="">
            </div>
            <nav>
                <ul>
                    <li><a href="#about">about me</a></li>
                    <li><a href="#skills">Career</a></li>
                    <li><a href="#work">my works</a></li>
                    <li><a href="#social">Social</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <div class="container main-info-section">
    <?php if(isset($_SESSION['message'])): ?>
            <p class="<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></p>
    <?php 
        endif; 
        unset($_SESSION['message'], $_SESSION['type']);
    ?>
        <div class="text">
            <h1>
                <span>H</span>
                <span class="m-left">i</span>
                <span class="m-left">,</span>
                <br>
                <span>I</span>
                <span class="m-left">'</span>
                <span class="m-left">m</span> &nbsp;
                <span class="name">U</span>
                <span class="m-left name">g</span>
                <span class="m-left name">o</span>
                <span class="m-left name">c</span>
                <span class="m-left name">h</span>
                <span class="m-left name">u</span>
                <span class="m-left name">k</span>
                <span class="m-left name">w</span>
                <span class="m-left name">u</span>
                <span class="m-left">,</span>
                <br>
                <span>W</span>
                <span class="m-left">e</span>
                <span class="m-left">b</span>
                <span>D</span>
                <span class="m-left">e</span>
                <span class="m-left">s</span>
                <span class="m-left">i</span>
                <span class="m-left">g</span>
                <span class="m-left">n</span>
                <span class="m-left">e</span>
                <span class="m-left">r</span>
                <span class="m-left">.</span>
            </h1>
            <br>
            <p>HTML5 & CSS3 | JAVASCRIPT | PHP</p>
            <a href="#contact">contact me</a>
        </div>
        <div class="profile-image">
            <img src="https://storelad.com/profile-2.png" alt="">
        </div>
    </div>

    <div class="container about" id="about">
        <h1>About</h1>
        <div class="about-me-info">
            <p><b>Full Name:</b> Ekwueme Ugochukwu Emmanuel</p>
            <p><b>Date of Birth(DD/MM/YYYY):</b> 07/03/2000</p>
            <p><b>Next of Kin:</b> Ekwueme Chigoize John</p>
            <p><b>Residental Address:</b> Ezioko, Oko, Anambra State</p>
            <p><b>State/Region:</b> Anambra State</p>
            <p><b>Country:</b> Nigeria</p>
            <h2 style="color: #ffffff; margin: 10px 0px;">Education</h2>
            <p><b>Name of Primary School:</b> Okoko Primary School Oko, Anambra State, Nigeria.</p>
            <p><b>Year of Primary School(YYYY):</b> 2003-2011</p>
            <p><b>Name of Secoundary School:</b> Federal Government College Nise, Anambra State, Nigeria.</p>
            <p><b>Year of Secoundary School(YYYY):</b> 2011-2017</p>
            <p><b>Year of O'Level(YYYY):</b> 2017</p>
            <p><b>Name of Higher Insitution:</b> Federal Polytechnic Oko, Anambra State, Nigeria.</p>
            <p><b>Year of Higher Insitution:</b> 2017-2019</p>
            <p><b>Degree:</b> Junior OND(Civil Engineering)</p>
            <p><b>Name of Higher Insitution:</b> Nnamdi Azikwe University, Anambra State, Nigeria.</p>
            <p><b>Year of Higher Insitution:</b> 2019-2024</p>
            <h2 style="color: #ffffff; margin: 10px 0px;">Family</h2>
            <p><b>Martail Status:</b> Single</p>
            <p><b>Father's Name:</b> Late Emmanuel Ifedirichukwu Ekwueme</p>
            <p><b>Mother's Name:</b> Ugonwa Martina Ekwueme</p>
            <p><b>Mother's Madien Name:</b> Okafor</p>
        </div>
        <img src="https://internship.zuri.team/static/media/heroImage.17d3e1dc.png" alt="" width="350px">
    </div>
    <div class="container skills" id="skills">
        <h1>Career</h1>
        <div class="skills-info about-me-info" style="display: flex; justify-content: space-between;">
            <div>
                <h2 style="color: #ffffff; margin: 10px 0px;">Hobbies</h2>
            <ul>
                <li>Wrestling</li>
                <li>Reading</li>
                <li>Running</li>
            </ul>
            </div>
            <div>
                <h2 style="color: #ffffff; margin: 10px 0px;">Skills</h2>
            <ul>
                <li>Coding</li>
                <li>Typing</li>
                <li>Drawing</li>
                <li>Planing</li>
            </ul>
            </div>
            <div>
            <h2 style="color: #ffffff; margin: 10px 0px;">Occupation</h2>
            <p>Student/Freelancer</p>
            <p><b>Address:</b> Joy Hostel Unizik Road, Awka</p>
            <p><b>Email Address:</b> ekwuemeugochukwu83@gmail.com</p>
            <p><b>Phone:</b> +2348143440606</p>
            <p><b>State/Region:</b> Anambra State</p>
            <p><b>Country:</b> Nigeria</p>
            </div>
        </div>
    </div>

    <div class="container work" id="work">
        <h1>Work</h1>
        <div class="cover">
            <div class="work-category">
                <button id="designing" class="active" onclick="showRequiredCategory(this)">Web Designing</button>
                <!-- <button id="animation" onclick="showRequiredCategory(this)">Web Animations</button>
                <button id="project" onclick="showRequiredCategory(this)">BackEnd PHP Projects</button> -->
            </div>
            <div class="category-designing showCategory">
                <a href="https://mazzydap.com"><img src="https://storelad.com/mazzydap.PNG" alt="" width="350px"></a>
                <a href="https://storelad.com/RedLion/"><img src="https://storelad.com/snyc.PNG" alt="" width="350px"></a>
                <a href="https://storelad.com/newshour/"><img src="https://storelad.com/newshour.PNG" alt="" width="350px"></a>
            </div>

            <!-- <div class="category-animation hideCategory">
                <a href="#"><img src="assets/images/plush-design-studio-q10VITrVYUM-unsplash.jpg" alt="" width="350px"></a>
                <a href="#"><img src="assets/images/philipp-katzenberger-iIJrUoeRoCQ-unsplash.jpg" alt="" width="350px"></a>
            </div>

            <div class="category-project hideCategory">
                <a href="#"><img src="assets/images/plush-design-studio-q10VITrVYUM-unsplash.jpg" alt="" width="350px"></a>
                <a href="#"><img src="assets/images/philipp-katzenberger-iIJrUoeRoCQ-unsplash.jpg" alt="" width="350px"></a>
                <a href="#"><img src="assets/images/giu-vicente-FMArg2k3qOU-unsplash.jpg" alt="" width="350px"></a>
            </div> -->
        </div>

    </div>

    <div class="container contact" id="contact">
        <h1>Contact</h1>
        <div class="cover">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <input type="text" name="fullName" placeholder="Full Name" value="<?php echo $fullName;?>">
                <?php errorMaker(['fullName-empty', 'fullName-invalid']); ?>
                <input type="email" placeholder="Email" value="<?php echo $email;?>" name="email">
                <?php errorMaker(['email-empty', 'email-invalid']); ?>
                <input type="tel" placeholder="Phone" value="<?php echo $phone;?>" name="phone">
                <?php errorMaker(['phone-empty', 'phone-invalid']); ?>
                <input type="text" placeholder="Subject" value="<?php echo $subject;?>" name="subject">
                <?php errorMaker(['subject-empty', 'subject-invalid']); ?>
                <textarea rows="10" cols="20" name="message" placeholder="Message"><?php echo $message;?></textarea>
                <?php errorMaker(['message-empty']); ?>
                <input type="submit" value="Contact" name="contact">
            </form>
        </div>

    </div>
    <footer>
        <hr>
        <p>Designed By Ugochukwu Ekwueme | Hydrogen Tech | HNGi8</p>
    </footer>

    <script src="assets/js/ScrollMagic.min.js"></script>
    <script src="assets/js/animation.gsap.min.js"></script>
    <script src="assets/js/TimelineLite.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/CSSPlugin.min.js"></script>
    <script src="assets/js/scrpit.js"></script>
</body>

</html>
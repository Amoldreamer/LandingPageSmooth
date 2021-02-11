<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link id="theme-style" rel="stylesheet" type="text/css" href="">
    <title>Document</title>
</head>
<body>
    <div class="container">
            <nav class="navbar">
                <a href="#" class="bar-wrapper">
                    <span class="bar bar_first"></span>
                    <span class="bar bar_second"></span>
                    <span class="bar bar_third"></span>
                </a>
                <ul >
                    <li><a class="page" href="#home">Home</a></li>
                    <li><a class="page" href="#about">About</a></li>
                    <li><a class="page" href="#more-info">More About Me</a></li>
                    <li><a class="page" href="#service">My Projects</a></li>
                    <li><a class="page" href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="side_menu sidebar">
            <li><a class="cross close" href="">&times;</a></li>
                <ul >
                    
                    <li><a class="tab" href="#home">Home</a></li>
                    <li><a class="tab" href="#about">About</a></li>
                    <li><a class="tab" href="#more-info">More About Me</a></li>
                    <li><a class="tab" href="#service">My Projects</a></li>
                    <li><a class="tab" href="#contact">Contact</a></li>
                </ul>
            </div>
        <section id="home">
          <h1 style="color: #fff">Welcome To My Site</h1>
          <div class='container'>
            <h1 class="text1">Amol Acharya</h1>
            <h2 class="text2">Web Developer</h2>
        </div>
        </section>
        <section id="about">
            <div class="about-container">
                <div class="left-column">
                    <img id="profile_pic" src="images/amol.jpg">
                    <h3 >Personalize Theme</h3>

                    <div id="theme-options-wrapper">
                        <div data-mode="default" id="default-mode" class="theme-dot"></div>
                        <div data-mode="blue" id="blue-mode" class="theme-dot"></div>
                        <div data-mode="green" id="green-mode" class="theme-dot"></div>
                        <div data-mode="purple" id="purple-mode" class="theme-dot"></div>
                    </div>

                    <p id="settings-note">*Theme settings will be saved for<br>your next vist</p>
                </div>

                <div class="right-column">

                    <div id="preview">
                            <h3>A Few Words About Me</h3>
                            <p>Ever since writing my first hello world program my fingers have not stopped. Born and 
                                raised in Nepal, I moved to Portugal at the age of 36. Having moved to a new place and suddenly finding myself
                                in a completely new cultural and language environment I had to take on jobs that I was not really interested in. But at the
                                same time I also discovered a passion for programming and began to learn software development whenever I had free time.
                                Hence, after almost one year of playing around with languages like PHP(including Laravel), MSQL, HTML/CSS and a little of Vanilla
                                Javascript, I feel eligible to apply as a junior developer -- and yes, I am a self-taught web-developer.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="more-info">
                    <div class="about-me" >
                        <h1>More about me</h1>
    
                        <p>I build new projects just to tickle my brain.</p>
    
                        <p>Though I haven't had the opportunity to work for any company I believe my hard work and keenness in learning will be able to oveercome any of my shortcomings.</p>
    
    
                        <hr>
    
                        <h4>TOP EXPERTISE</h4>
    
                        <p>Fullstack developer with primary focus on PHP & Laravel: <a target="_blank" href="downloadables/resume.html">Resume</a></p>
    
                        <div id="skills">
                            <ul>
                                <li>PHP</li>
                                <li>MySQL</li>
                                <li>Laravel</li>
                                <li>HTML</li>
                                <li>CSS</li>
                            </ul>
    
                            <ul>
                                <li>JavaScript</li>
                                <li>GitHub</li>
                                <li>JASON</li>
                                <li>AJAX</li>
                                <li>Vue JS</li>
                            </ul>
    
                        </div>
    
                    </div>
        </section>
        <section id="service" class="service-container" >
            <h1 >Some of my past projects</h1>
            <div class="service-wrapper">
                <div class="post">
                    <img class="thumbnail" style="height:250px;width:300px" src="images/ecommerce.jpg">
                    <div class="post-preview">
                        <h3 class="post-title"></h3>E-commerce System</h3>
                        <p class="post-intro">E-commerce website with integrated stripe payment gateway.</p>
                        <a href="post.html">Read More</a>
                    </div>
                    </div>
                
                <div class="post">
                    <img class="thumbnail" style="height:250px;width:300px" src="images/patient.jpg">
                    <div class="post-preview">
                        <h3 class="post-title">Patient History Keeping</h3>
                        <p class="post-intro">Designed and built in order to replace the traditional system of record keeping.</p>
                        <a href="post.html">Read More</a>
                    </div>
                </div>
                <div class="post">
                    <img class="thumbnail" style="height:250px;width:300px" src="images/quiz.jpg">
                    <div class="post-preview">
                        <h3 class="post-title">Quizzer</h3>
                        <p class="post-intro">Quizzing system built in order to test abilities in PHP.</p>
                        <a href="post.html">Read More</a>
                    </div>
                </div>
        </div>
        </section>
        <section id="contact" style="color: black;padding-top: 100px;">
            <div class="main-container">
                <a href=""></a>
                <h3 style="text-align: center;">Get In Touch</h3>

                <?php
                    if(isset($_SESSION['success'])){
                        echo "<div class=alert style=color:green;padding-left:260px>".$_SESSION['success']."</div>";
                    }
                    unset($_SESSION['success']);
                ?>
                <script>
                    setTimeout(() => {
                        document.querySelector('.alert').remove();
                    }, 10000);
                </script>
    
                <form id="contact-form" method="GET" action="process.php">
                    <a name="contact"></a>
    
                    <label>Name</label>
                    <input id="input-name" class="input-field" type="text" name="name">
    
                    <label>Subject</label>
                    <input id="input-subject" class="input-field" type="text" name="subject">
    
                    <label>Email</label>
                    <input id="input-email" class="input-field" type="text" name="email">
    
                    <label>Message</label>
                    <textarea id="input-message" class="input-field" name="message"></textarea>
    
                    <input class="submit-btn" type="submit" value="Send" name="submit">
                </form>
            </div>
        </section>
        </div>
      <script>
          const barWrapper = document.querySelector('.bar-wrapper');
          const sideBar = document.querySelector('.sidebar')
          const close = document.querySelector('.close');
          const tabs = document.querySelectorAll('.tab');
            barWrapper.addEventListener('click',()=>{
                sideBar.style.width='200px';
                sideBar.style.height='250px';
            })
            close.addEventListener('click',()=>{
                sideBar.style.width='0px';
            })
            tabs.forEach(tab=>tab.addEventListener('click',()=>{
                sideBar.style.width='0px';
            }))
      </script>
      <script src="script.js"></script>
</body>
</html>
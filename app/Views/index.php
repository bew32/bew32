<!DOCTYPE html>
<html lang="en">

<head>
    <title>Index Page</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('./css/index.css'); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!----hero Section start---->

    <div class="hero">
        <nav>
            <h2 class="logo">Portfo<span>lio</span></h2>
            <ul>
                <li><a href="index">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="team">Team</a></li>
                <li><a href="#">Skills</a></li>
                <li><a href="contact">Contact Us</a></li>
            </ul>
            <a href="register" class="btn">Register & Login</a>
        </nav>

        <div class="content">
            <h4>Hello, my name is</h4>
            <h1>Team <span>TC-Arena</span></h1>
            <h3>We are Software Engineering.</h3>
            <div class="newslatter">
                <form width="25%">
                    <input type="email" name="email" id="mail" placeholder="Enter Your Email">
                    <input type="submit" name="submit" value="Search">
                </form>
            </div>
        </div>
    </div>

    <!----About section start---->
    <section class="about">
        <div class="main">
            <img src="img/b2.jpg">
            <div class="about-text">
                <h2>About Me</h2>
                <h5>Developer <span>& Designer</span></h5>
                <p>I am a front-end web developer. I can provide clean code and pixel perfect design. I also make
                    the website more & more interactive with web animations.I can provide clean code and pixel
                    perfect design. I also make the website more & more interactive with web animations.A responsive
                    design makes your website accessible to all users, regardless of their device.</p>
                <button type="button"><a href="team" style="color:white">Let's Talk</a></button>
            </div>
        </div>
    </section>

    <!-----service section start----------->
    <div class="service">
        <div class="title">
            <h2>Our Services</h2>
        </div>

        <div class="box">
            <div class="card">
                <i class="fas fa-bars"></i>
                <h5>Web Development</h5>
                <div class="pra">
                    <p>Every website should be built with two primary goals: Firstly, it needs to work across all
                        devices. Secondly, it needs to be fast as possible.</p>

                    <p style="text-align: center;">
                        <a class="button" href="#">Read More</a>
                    </p>
                </div>
            </div>

            <div class="card">
                <i class="far fa-user"></i>
                <h5>Web Development</h5>
                <div class="pra">
                    <p>Every website should be built with two primary goals: Firstly, it needs to work across all
                        devices. Secondly, it needs to be fast as possible.</p>

                    <p style="text-align: center;">
                        <a class="button" href="#">Read More</a>
                    </p>
                </div>
            </div>

            <div class="card">
                <i class="far fa-bell"></i>
                <h5>Web Development</h5>
                <div class="pra">
                    <p>Every website should be built with two primary goals: Firstly, it needs to work across all
                        devices. Secondly, it needs to be fast as possible.</p>

                    <p style="text-align: center;">
                        <a class="button" href="#">Read More</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!------Contact Me------>
    <div class="contact-me">
        <p>Let Me Get You A Beautiful Website.</p>
        <a class="button-two" href="#">Hire Me</a>
    </div>

    <!------footer start--------->
    <footer>
        <p>Tahmid Ahmed</p>
        <p>For more HTML, CSS, and coding tutorial - please click on the link below to subscribe to my channel:</p>
        <div class="social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
        </div>
        <p class="end">CopyRight By TC-Arena</p>
    </footer>
</body>

</html>
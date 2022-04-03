<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team User Page</title>
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

    <div class="hero">
        <nav>
            <h2 class="logo">Portfo<span>lio</span></h2>
            <ul>
                <li><a href="dashboard">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="teamuser">Team</a></li>
                <li><a href="#">Skills</a></li>
                <li><a href="contact">Contact Us</a></li>
            </ul>
            <h4 style="color:white"><?php echo "Name :". $session->get('user_name'); ?></h4>
            <a href="/login" class="btn btn-danger">Logout</a>
        </nav>
        <br>
        <center>
            <h1>Member Team <span>TC-Arena</span></h1>
        </center>
        <br><br><br><br><br><br><br><br><br><br>

        <section class="about">
            <div class="main">
                <img src="img/bew.jpg">
                <div class="about-text">
                    <h2>Bew Tawat</h2>
                    <h5>Web Developer <span>& Back-End</span></h5>
                    <p>I am a front-end web developer. I can provide clean code and pixel perfect design. I also make
                        the website more & more interactive with web animations.I can provide clean code and pixel
                        perfect design. I also make the website more & more interactive with web animations.A responsive
                        design makes your website accessible to all users, regardless of their device.</p>
                    <button type="button">Let's Talk</button>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="main">
                <img src="img/jame.jpg">
                <div class="about-text">
                    <h2>Jame Phacharaphon</h2>
                    <h5>Web Developer <span>& Back-End</span></h5>
                    <p>I am a front-end web developer. I can provide clean code and pixel perfect design. I also make
                        the website more & more interactive with web animations.I can provide clean code and pixel
                        perfect design. I also make the website more & more interactive with web animations.A responsive
                        design makes your website accessible to all users, regardless of their device.</p>
                    <button type="button">Let's Talk</button>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="main">
                <img src="img/oak.jpg">
                <div class="about-text">
                    <h2>Oak Peerapat</h2>
                    <h5>Web Developer <span>& Front-End</span></h5>
                    <p>I am a front-end web developer. I can provide clean code and pixel perfect design. I also make
                        the website more & more interactive with web animations.I can provide clean code and pixel
                        perfect design. I also make the website more & more interactive with web animations.A responsive
                        design makes your website accessible to all users, regardless of their device.</p>
                    <button type="button">Let's Talk</button>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="main">
                <img <img src="img/earth.jpg">
                <div class="about-text">
                    <h2>Earth Abhisit</h2>
                    <h5>Web Developer <span>& Front-End</span></h5>
                    <p>I am a front-end web developer. I can provide clean code and pixel perfect design. I also make
                        the website more & more interactive with web animations.I can provide clean code and pixel
                        perfect design. I also make the website more & more interactive with web animations.A responsive
                        design makes your website accessible to all users, regardless of their device.</p>
                    <button type="button">Let's Talk</button>
                </div>
            </div>
        </section>

        <footer>
            <p>Tahmid Ahmed</p>
            <p>For more HTML, CSS, and coding tutorial - please click on the link below to subscribe to my channel:</p>
            <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
            </div>
            <p class="end">CopyRight By Tahmid Ahmed</p>
        </footer>

    </div>

</body>

</html>
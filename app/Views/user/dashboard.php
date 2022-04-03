<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('./css/index.css'); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>

    <div class="hero">
        <nav>
            <h2 class="logo">Portfo<span>lio</span></h2>
            <ul>
                <li><a href="indexuser">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Skills</a></li>
                <li><a href="contact">Contact Us</a></li>
            </ul>
            <h4 style="color:white"><?php echo "Name :". $session->get('user_name'); ?></h4>
            <a href="/login" class="btn btn-danger">Logout</a>
        </nav>
    </div>

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
            <a href="register" class="btn">Register & Login</a>
        </nav>

        <div class="content">
            <h4>Hello, my name is</h4>
            <h1>Team <span>TC-Arena</span></h1>
            <h3>We are Web Developer.</h3>
            <div class="newslatter">
                <form width="25%">
                    <input type="email" name="email" id="mail" placeholder="Enter Your Email">
                    <input type="submit" name="submit" value="Lets Start">
                </form>
            </div>
        </div>
    </div>

    <!----About section start---->
    <section class="about">
        <div class="main">
            <img src="img/bew.jpg">
            <div class="about-text">
                <h2>About Me</h2>
                <h5>Developer <span>& Designer</span></h5>
                <p>I am a front-end web developer. I can provide clean code and pixel perfect design. I also make
                    the website more & more interactive with web animations.I can provide clean code and pixel
                    perfect design. I also make the website more & more interactive with web animations.A responsive
                    design makes your website accessible to all users, regardless of their device.</p>
                <button type="button">Let's Talk</button>
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
        <p class="end">CopyRight By Tahmid Ahmed</p>
    </footer>

    <script type="text/javascript">
    $(".menu-toggle-btn").click(function() {
        $(this).toggleClass("fa-times");
        $(".navigation-menu").toggleClass("active");
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>
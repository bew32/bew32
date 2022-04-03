<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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
                <li><a href="index">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="team">Team</a></li>
                <li><a href="#">Skills</a></li>
                <li><a href="contact">Contact Us</a></li>
            </ul>
            <a href="#" class="btn">Subscribe</a>
        </nav>

        <div class="container mt-4">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <h1>Sign up</h1>
                    <hr>
                    <!-- <?php if(isset($validation)): ?>
                    <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                    <?php endif; ?> -->
                    <form action="/register/save" method="post">
                        <div class="mb-3">
                            <label for="inputname" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="inputforname"
                                value="<?= set_value('name'); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="inputemail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputforemail"
                                value="<?= set_value('email'); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="inputmobile" class="form-label">Mobile</label>
                            <input type="text" name="mobile" class="form-control" id="inputformobile"
                                value="<?= set_value('mobile'); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="inputpassword" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="inputforpassword">
                        </div>
                        <div class="mb-3">
                            <label for="inputconfpassword" class="form-label">Confirm Password</label>
                            <input type="password" name="confpassword" class="form-control" id="inputforconfpassword">
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                    <hr>
                    <a href="/login" class="btn btn-success">Login Page</a>
                </div>
            </div>
        </div>
    </div>

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
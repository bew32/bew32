<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us Page</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('./css/Contact.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">ที่อยู่</div>
                    <div class="text-one">นครปฐม 73000</div>
                    <div class="text-two">สมุทรสาคร 74000</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">เบอร์โทร</div>
                    <div class="text-one">098 8765 4321</div>
                    <div class="text-two">035 2156 1542</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">Soccer@gmail.com</div>
                    <div class="text-two">Football@gmail.com</div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">ส่งข้อความหาเรา</div>
                <p>หากคุณติดปัญหาหรือสงสัยใดๆสามารถส่งข้อความเเจ้งมาที่เรา</p>
                <hr>
                <?php if(isset($validation)): ?>
                <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                <?php endif; ?>
                <form action="/contact/save" method="" post>
                    <div class="input-box">
                        <label for="inputname">Name</label>
                        <input type="text" name="name" placeholder="ชื่อ" id="inputforname"
                            value="<?= set_value('name'); ?>">
                    </div>
                    <div class="input-box">
                        <br>
                        <label for="inputemail">Email</label>
                        <input type="text" name="email" placeholder="อีเมล์" id="inputforemail"
                            value="<?= set_value('email'); ?>">
                    </div>
                    <div class="input-box">
                        <br><br>
                        <label for="inputmessage">Message</label>
                        <input type="text" name="message" placeholder="ข้อความ" id="inputformessage"
                            value="<?= set_value('message'); ?>">
                    </div>
                    <div class="input-box message-box">
                    </div>
                    <div class="button">
                        <button type="submit" class="btn btn-success">ส่ง</button>
                        <a href="/index" type="submit" class="btn btn-primary">กลับ</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
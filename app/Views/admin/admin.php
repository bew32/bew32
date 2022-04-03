<!Doctype HTML>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('./css/Admin.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <p class="logo"><span>B</span>-SoftWare</p>
        <a href="admin" class="icon-a"><i class="fa fa-dashboard icons"></i> Dashboard</a>
        <a href="#" class="icon-a"><i class="fa fa-users icons"></i> Customers</a>
        <a href="#" class="icon-a"><i class="fa fa-list icons"></i> Projects</a>
        <a href="#" class="icon-a"><i class="fa fa-shopping-bag icons"></i> Orders</a>
        <a href="#" class="icon-a"><i class="fa fa-tasks icons"></i> Inventory</a>
        <a href="#" class="icon-a"><i class="fa fa-user icons"></i> Accounts</a>
        <a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> Tasks</a>
    </div>
    <div id="main">
        <div class="head">
            <div class="col-div-6">
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav">☰ Dashboard</span>
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">☰ Dashboard</span>
            </div>
            <div class="col-div-6">
                <div class="profile">

                    <img src="/img/b1.jpg" class="pro-img" />
                    <p>Admin<span>UI / UX DESIGNER</span></p>
                    <a href="/login"><button>Logout</button></a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
        <br />

        <div class="col-div-3">
            <div class="box">
                <p>67<br /><span>Customers</span></p>
                <i class="fa fa-users box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>88<br /><span>Orders</span></p>
                <i class="fa fa-shopping-bag box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>99<br /><span>Team</span></p>
                <i class="fa fa-list box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>78<br /><span>Position</span></p>
                <i class="fa fa-tasks box-icon"></i>
            </div>
        </div>
        <div class="clearfix"></div>
        <br /><br />
        <!--End Navbar----->
        <div class="col-div-8">
            <div class="box-8">
                <div class="content-box">
                    <p>Customers List<span>Sell All</span></p>
                    <br />
                    <table style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Created</th>
                            </tr>
                            <hr>
                        </thead>
                        <tbody>
                            <?php if($users): ?>
                            <?php foreach($users as $row): ?>
                            <tr>
                                <th><?php echo $row['user_id']; ?></th>
                                <th><?php echo $row['user_name']; ?></th>
                                <th><?php echo $row['user_email']; ?></th>
                                <th><?php echo $row['user_mobile']; ?></th>
                                <th><?php echo $row['user_created_at']; ?></th>
                                <td>
                                    <a href="<?= base_url('admin/update'.$row['user_id']) ?>" style="color:yellow">Edit</a>
                                    <a href="<?= base_url('admin/delete'.$row['user_id']) ?>" style="color:red">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-div-4">
            <div class="box-4">
                <div class="content-box">
                    <p>Total Sale <span>Sell All</span></p>

                    <div class="circle-wrap">
                        <div class="circle">
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            <div class="inside-circle"> 70% </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(".nav").click(function() {
        $("#mySidenav").css('width', '70px');
        $("#main").css('margin-left', '70px');
        $(".logo").css('visibility', 'hidden');
        $(".logo span").css('visibility', 'visible');
        $(".logo span").css('margin-left', '-10px');
        $(".icon-a").css('visibility', 'hidden');
        $(".icons").css('visibility', 'visible');
        $(".icons").css('margin-left', '-8px');
        $(".nav").css('display', 'none');
        $(".nav2").css('display', 'block');
    });

    $(".nav2").click(function() {
        $("#mySidenav").css('width', '300px');
        $("#main").css('margin-left', '300px');
        $(".logo").css('visibility', 'visible');
        $(".icon-a").css('visibility', 'visible');
        $(".icons").css('visibility', 'visible');
        $(".nav").css('display', 'block');
        $(".nav2").css('display', 'none');
    });
    </script>
</body>

</html>
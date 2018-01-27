<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Login | <?php echo getInfoRS('nama_rumah_sakit')?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/linearicons/style.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
    <style type="text/css">
        body{
            background: url(<?php echo base_url();?>assets/img/header.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
          }
    </style>
<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-center" style="margin-top: -20px; margin-bottom: 20px;"><img src="<?php echo base_url(); ?>assets/img/logo.png" width="100" alt="Gran Herna"></div>
                                <?php
                                $status_login = $this->session->userdata('status_login');
                                if (empty($status_login)) {
                                    $message = "Silahkan Masukan Akun Anda.";
                                } else {
                                    $message = $status_login;
                                }
                                ?>
                                <p class="login-box-msg"><?php echo $message; ?></p>
                                <?php echo form_open('auth/cheklogin'); ?>
                            </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" id="signin-username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" id="signin-password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button></br>
                                <div class="bottom">
                                    <span class="helper-text"> &copy; 2018 <a href="#"> - Akure Solusi.</a> All Rights Reserved.</span>
                                </div>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                    <div class="right">
                        <div class="overlay"></div>
                        <div class="content text">
                            <p>Sistem Informasi Rumah Sakit</p>
                            <h1 class="heading">RSU GRAND THERESIA HERNA MEDAN</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
    <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.css')?>">

</head>
<body>
<div class="wrapper">
        <div class="logo">
            <img src="<?php echo base_url('dist/img/logoeventtastic.png')?>" alt="">
        </div>
        <div class="text-center mt-2 name">
            EventTastic
        </div>

        <?php echo form_open('login/otentikasi')?>
        <div class="form-field d-flex align-items-center mt-3">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="userName" placeholder="Username" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password" required>
            </div>
            <button class="btn mt-3"style="background-color:#EB3656;">Login</button>
        <?php echo form_close()?>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="<?php echo base_url('/index.php/register')?>">Sign up</a>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $data['title'] ?></title>

    <!-- Styles -->
    <link href="<?php echo BASEURL ?>/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>/css/lib/themify-icons.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo BASEURL ?>/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?php echo BASEURL ?>/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="<?php echo BASEURL ?>/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>/css/lib/helper.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>/css/style.css" rel="stylesheet">    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.4/css/fixedHeader.bootstrap4.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
</head>

<body style="background-color: #436274">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login-content">
                        <div class="login-form">
                            <h4>LOGIN</h4><br>

                            <!-- KETIKA LOGIN ERROR ATAU SALAH KATASANDI DAN PASSWORD -->
                           <!--  <?php if(isset($error)): ?>
                                <div align="center" class="mb-2 alert alert-danger alert-dismissible fade-show" role="alert">
                                    <i><b>Username / Password SALAH</b></i>
                                </div>
                                <?php endif; ?> -->

                                <form method="post" action="<?php echo BASEURL ?>/login/getlogin">
                                    <div class="form-group">
                                        <label><b>Username</b></label>
                                        <input type="text" class="form-control" placeholder="Masukkan Username Anda" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label><b>Password</b></label>
                                        <input type="password" class="form-control" placeholder="Masukkan Password Anda" name="password">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="login">Sign in</button>

                                    <div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="https://api.whatsapp.com/send?phone=6285380452063&text=Hai%20Admin%20Saya%20Ingin%20Registrasi%20akun..."> Sign Up Here</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>
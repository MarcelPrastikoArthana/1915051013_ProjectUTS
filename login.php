<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
            <title>Login Data Peserta Kelas Belajar Pemrograman Web Dasar</title>
                <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
                <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
                <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
                <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
            </head>
        <body class="bg-black">
            <center><h1>Pemrograman Web Dasar</h1></center>
                <center><small>Marcel Prastiko Arthana</small></center>
            <div class="form-box" id="login-box">
                <div class="header">Login</div>
                <form action="proses.php?login=masuk" method="post">
                    <div class="body bg-gray">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="User ID"/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                        </div>          
                        <div class="form-group">
                            <input type="checkbox" name="remember_me"/> Remember me
                        </div>
                    </div>
                    <div class="footer">                                                               
                        <button type="submit" class="btn bg-olive btn-block">Sign In</button>  
                            <p><a href="#">Lupa password</a></p>
                        <a href="register.html" class="text-center">Mendaftar</a>
                    </div>
                </form>
            <div class="margin text-center">
                <span>Sign In dengan menggunakan akun sosial media</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>
            </div>
        </div>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>        
    </body>
</html>
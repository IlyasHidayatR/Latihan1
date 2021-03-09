<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="icon" type="image/png" href="media/food.png">
    <title>Registrasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="connical" herf="http://makanan.com">
    <meta property="og::locale" content="en_us">
    <meta property="og::type" content="website">
    <meta property="og::title" content="">
    <meta property="og::description" content="">
    <meta property="og::url" content="">
    <meta property="og::site_name" content="">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
        
    <body>
        <div class="container">
        <div class="navbar" style="background-image:url('assets/Bg.jpg'); margin: 0px">
                <div class="pull-left">
                    <img src="media/spoon.png" width="100">
                </div>
                <div class="pull-left">
                    <h2>Selamat Datang</h2>
                    <h4>Portal Makanan Dunia</h4>
                </div>
            </div>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">About</a>
                    </div>
                    <div class="collapse navbar-collapse" id=myNavbar>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Jenis Makanan<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Asia</a></li>
                                    <li><a href="#">Eropa</a></li>
                                    <li><a href="#">Amerika</a></li>
                                    <li><a href="#">Afrika</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Request</a></li>
                            <li><a href="#">Help</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" herf="#">Tugas 3 <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="form1.php">Fibonachi</a></li>
                                    <li><a href="#">Aritmatika</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="form.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                            <li><a href="#"><span class="glyphicon gliphicon-log-in"></span>Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="col-lg-8 " style="background-image:url('assets/Bg.jpg')">
                    <h1>Sign Up</h1>
                    <hr>
                    <form class="form-horizontal" action="  ">
                        <div class="form-group">
                            <label class="control-label col-sm-3">First Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" required placeholder="First Name" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Last Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" required placeholder="Last Name" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Email:</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" placeholder="example@domain.com" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Password:</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control psw" placeholder="Password" name="Enter password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Re Password:</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control repsw" placeholder="Re Password" name="Enter password">
                                <small class="errpsw"></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="Remember">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-default" style="background-color:brown; color:white;">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4" style="background-image:url('assets/Bg.jpg');"></div>
            </div>
        </div>
        <div id="myModal" class="modal Fade" role="dialog">
            <div class="modal-dialog">
                <!--modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Berhasil</h4>
                    </div>
                    <div class="modal-body">
                        <p></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        $(document).ready(function()
            $(.form-horizontal).submit(function()
                var ps1 = ('.psw').val();
                var ps2 = ('.repsw').val();
                var valid = 0;
                $('.err').html('');
                if (ps1 == ps2){
                    valid = 1;
                }
                else{
                    $('.errpsw').html('Password tidak sama');
                }
                if (valid == 0){
                    event.preventDefault();
                }
                else{
                    $('p').html("Selamat pendaftaran A.N" + $('input[name="nama"]').val() + "telah berhasil");
                    $('.modal')modal('show');
                    event.preventDefault();
                }
            );
        );
    </script>
</html>
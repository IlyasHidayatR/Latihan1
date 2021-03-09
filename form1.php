<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="icon" type="image/png" href="media/food.png">
    <title>Tugas 3</title>
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
                                <a class="dropdown-toggle" data-toggle="dropdown" herf="#">Tugas 3<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="form1.php">Fibonachi</a></li>
                                    <li><a href="form2.php">Aritmatika</a></li>
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
                <?php
                    $input1 = "";           
                    $input2 = "";           
                    $hasil = "";            
                    $deret = "";            
                    $jmlderet = "";         

                    if (isset($_POST['submit'])) {      

                        $input1 = $_POST["input1"];
                        $input2 = $_POST["input2"];
                        $jmlderet = $_POST["jmlderet"];

                        $a = $input1;
                        $b = $input2;

                        $deret = $a . ", " . $b;

                        for ($i = 0; $i < $jmlderet - 2; $i++) {
                            $hasil = $a + $b;
                            $a = $b;
                            $b = $hasil;
                            $deret = $deret . "," . $hasil;
                        }
                    }     
                ?>
                <div class="">
                    <div class="col-lg-8 " style="background-image:url('assets/Bg.jpg')">
                        <form method="POST" action="#" class="bg-white form-container" id="forminput">
                            <h2>Deret Fibonacci</h2>
                            <br/>
                            <div class="form-group">
                                <label for="input1">Angka ke-1:</label>
                                <input type="text" class="form-control" value="<?php echo $input1; ?>" id="input1" placeholder="Masukkan Angka Pertama" name="input1">
                            </div>
                            <div class="form-group">
                                <label for="input2">Angka ke-2:</label>
                                <input type="text" class="form-control" value="<?php echo $input2; ?>" id="input2" placeholder="Masukkan Angka Kedua" name="input2">
                            </div>
                            <div class="form-group">
                                <label for="input2">Jumlah Deret Fibonachi:</label>
                                <input type="text" class="form-control" value="<?php echo $jmlderet; ?>" id="jmlderet" placeholder="Masukkan Jumlah Deret Fibonachi" name="jmlderet">
                            </div>

                            <button type="submit" class="btn btn-default" style="background-color:brown; color:white;" name="submit">
                                Hitung
                            </button>
                            <br/>
                            <div class="form-group">
                                <h5> <b>Deret Fibonachi: </b> </h5>
                                <input type="text" class="form-control" value="<?php echo $deret; ?>" placeholder="Nilai Deret Fibonachi">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </body>
</html>
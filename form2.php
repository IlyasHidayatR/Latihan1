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
                                <a class="dropdown-toggle" data-toggle="dropdown" herf="#">Tugas 3 <span class="caret"></span></a>
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
                    $suku = "";           
                    $beda = "";            
                    $suku_n = "";          
                    $baris = "";           
                    $baristampil = "";       
                    $hasil = "";         

                    if (isset($_POST['submit'])) {      

                        $suku = $_POST["suku"];
                        $beda = $_POST["beda"];
                        $suku_n = $_POST["suku_n"];

                        $hasil = $suku + ($suku_n - 1) * $beda;

                        for ($i = 1; $i < $suku_n + 1; $i++) {
                            $baris = $suku + ($i - 1) * $beda;
                            $baristampil .= $baris . ",";
                        }
                    }
                ?>
                <div class="">
                    <div class="col-lg-8 " style="background-image:url('assets/Bg.jpg')">
                        <form method="POST" action="#" class="bg-white form-container" id="forminput1">
                            <h2>Baris Aritmatika</h2>
                            <br/>
                            <div class="form-group">
                                <label for="input1">Suku Pertama:</label>
                                <input type="text" class="form-control" value="<?php echo $suku; ?>" id="input3" placeholder="Masukkan Suku Pertama" name="suku">
                            </div>
                            <div class="form-group">
                                <label for="input2">Beda:</label>
                                <input type="text" class="form-control" value="<?php echo $beda; ?>" id="input4" placeholder="Masukkan Beda Dari Baris" name="beda">
                            </div>
                            <div class="form-group">
                                <label for="input2">Suku ke-n:</label>
                                <input type="text" class="form-control" value="<?php echo $suku_n; ?>" id="jmlderet1" placeholder="Masukkan Nilai Suku Yang Dicari" name="suku_n">
                            </div>
                            <button type="submit" class="btn btn-default" style="background-color:brown; color:white;" name="submit">
                                Hitung
                            </button>
                            <br/>
                            <div class="form-group">
                                <h5> <b> Nilai suku Ke-n: </b> </h5>
                                <input type="text" class="form-control" value="<?php echo $hasil; ?>" placeholder="Nilai Suku Yang Dicari">
                            </div>
                            <div class="form-group">
                                <h5> <b>Baris Aritmatika: </b> </h5>
                                <input type="text" class="form-control" value="<?php echo $baristampil; ?>" placeholder="Nilai Dalam Baris">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </body>
</html>
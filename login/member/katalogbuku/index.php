<?php
  include('../../cekmember.php');

  include('../../connection.php');  
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perpustakaan BI Jember</title>
    <link rel="shortcut icon" href="../../images/favbi.png"> 
    <!-- Bootstrap Core CSS -->
    <link href="../../asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../asset/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../asset/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../asset/css/dataTables.bootstrap.min.css" />
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./">Perpustakaan BI Jember</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">  
                <li class="dropdown">
                <?php
                    $sesi = $_SESSION['username'];
                    $query="SELECT nama_lengkap FROM tb_anggota WHERE username='$sesi'";
                    $result=mysqli_query($connection,$query);
                    $row=mysqli_fetch_assoc($result);
                    $namalengkap=$row['nama_lengkap'];               
                ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $namalengkap; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">                         
                        <li>
                            <a href="../../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav"> 
                    <li>
                        <a href="../"><i class="fa fa-fw fa-home"></i> Beranda</a>
                    </li>                   
                    <li class="active">
                        <a href="../katalogbuku"><i class="fa fa-fw fa-book"></i> Katalog Buku</a>
                    </li>                    
                    <li>
                        <a href="../peminjaman"><i class="fa fa-fw fa-briefcase"></i> Peminjaman</a>
                    </li>                                                         
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">  
                    </div>
                </div>
                <!-- /.row -->
               
                <!-- isi -->
                <section class="content">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="box">            
                          <h1>Katalog Buku</h1>
                          <p>Ini halaman katalog buku</p>
                        </div>
                      </div>
                    </div>
                  </section>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  <br><br><br><br><br><br><br><br><br>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../asset/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../asset/js/bootstrap.min.js"></script>

    
    
</body>

</html>

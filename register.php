
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary Masyarakat</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    
                    </div>
                </div>              
        <!-- /. NAV SIDE  -->
        <?php
require_once('koneksi.php');
if($_POST){
    try {
       $sql = "INSERT INTO masyarakat (nik,nama,username,password,telp) VALUES ('".$_POST['nik']."','".$_POST['nama']."','".$_POST['username']."','".$_POST['password']."','".$_POST['telp']."',)";
       if(!$koneksi->query($sql)){
          echo $koneksi->error;
          die();
        }
    } catch (Exception $e) {
      echo $e;
      die();
    }
    echo "<script>
         alert('Data berhasil di simpan');
         window.location.href='../admin/masyarakat.php';
         </script>";
}
?>

        
                      <h2>Tambah Data Petugas</h2>
                     <div class="row">
     <div class="col-lg-6">
         <form action="" method="POST">
             <div class="form-group">
                 <label>Id Petugas</label>
                 <input type="integer" value="" class="form-control" name="id_petugas">
             </div>
             <div class="form-group">
                 <label>Nama Petugas</label>
                 <input type="varchar" value="" class="form-control" name="nama_petugas">
             </div>
             <div class="form-group">
                 <label>Username</label>
                 <input type="varchar" value="" class="form-control" name="username">
             </div>
             <div class="form-group">
                 <label>Password</label>
                 <input type="varchar" value="" class="form-control" name="password">
             </div>
             <div class="form-group">
                 <label>Telepon</label>
                 <input type="varchar" value="" class="form-control" name="telp">
             </div>
             <div class="form-group">
                 <label>Level</label>
                 <input type="enum" value="" class="form-control" name="level">
             </div>
             <input type="submit" class="btn btn-primary btn-sm" name="create" value="Submit">
         </form>
        <a href="index.php"></a>
      </div>
</div>
                     </form>
          
        </table>
    </div>
</div>


 
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
<?php
  include('../../cekadmin.php');

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
                    <li>
                        <a href="../katalogbuku"><i class="fa fa-fw fa-book"></i> Katalog Buku</a>
                    </li>
                    <li>
                        <a href="../kategori"><i class="fa fa-fw fa-tags"></i> Kategori</a>
                    </li>
                    <li>
                        <a href="../penerbit"><i class="fa fa-fw fa-certificate"></i> Penerbit</a>
                    </li>
                    <li>
                        <a href="../peminjaman"><i class="fa fa-fw fa-briefcase"></i> Peminjaman</a>
                    </li>
                    <li>
                        <a href="../anggota"><i class="fa fa-fw fa-group"></i> Anggota</a>
                    </li> 
                    <li class="active">
                        <a href="../headline"><i class="fa fa-fw fa-gear"></i> Headline</a>
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
                        <ol class="breadcrumb">                            
                          <marquee>
                                <span class="label label-danger">Informasi</span> 
                                    <?php 
                                        $result = $connection->query("SELECT * FROM tb_headline"); 
                                        while ($row=$result->fetch_object()) {
                                        echo $row->headline;
                                    }?> 
                                <span class="label label-danger">Informasi</span> 
                                    <?php 
                                        $result = $connection->query("SELECT * FROM tb_headline"); 
                                        while ($row=$result->fetch_object()) {
                                        echo $row->headline;
                                    }?> 
                                <span class="label label-danger">Informasi</span> 
                                    <?php 
                                        $result = $connection->query("SELECT * FROM tb_headline"); 
                                        while ($row=$result->fetch_object()) {
                                        echo $row->headline;
                                    }?> 
                            </marquee>                          
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
               
                <!-- isi -->

                <section class="content">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="box">            
                          <!-- /.box-header -->
                          <div class="box-body">
                              <div class="col-md-12">
                              <br>
                                <div align="right">
                                  <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-flat btn-success"><i class="fa fa-plus"></i> Tambah</button>
                                  <br/>
                                  <br/>
                                </div>
                              <div class="table-responsive">
                                <br />        
                                <table id="user_data" class="table table-striped table-bordered table-hover">
                                  <thead>
                                    <tr class="info">
                                      <th width="80%">Headline</th>
                                      <th width="10%"><center>Tindakan</center></th>
                                    </tr>
                                  </thead>
                                </table>                
                              </div>
                            </div>
                            <div id="userModal" class="modal fade">
                              <div class="modal-dialog">
                                <form method="post" id="user_form" enctype="multipart/form-data">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Tambah Headline</h4>
                                    </div>
                                    <div class="modal-body">                                      
                                      <label>Headline</label>
                                      <textarea type="text" name="headline" id="headline" class="form-control" />
                                      </textarea>
                                      <br />                                      
                                    </div>
                                    <div class="modal-footer">
                                      <input type="hidden" name="user_id" id="user_id" />
                                      <input type="hidden" name="operation" id="operation" />
                                      <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

    <script src="../../asset/js/jquery.dataTables.min.js"></script>
    <script src="../../asset/js/dataTables.bootstrap.min.js"></script>

    
    <script type="text/javascript" language="javascript" >
    $(document).ready(function(){
      $('#add_button').click(function(){
        $('#user_form')[0].reset();
        $('.modal-title').text("Tambah");
        $('#action').val("Add");
        $('#operation').val("Add");
      });
      
      var dataTable = $('#user_data').DataTable({
        "processing":true,
        "autoWidth": false,
        "serverSide":true,
        "order":[],
        "ajax":{
          url:"fetch.php",
          type:"POST"
        },
        "columnDefs":[
          {
            "targets":[0, 1],
            "orderable":false,
          },
        ],

      });

      $(document).on('submit', '#user_form', function(event){
        event.preventDefault();        
        var headline = $('#headline').val();
        if(headline != '')
        {
          $.ajax({
            url:"insert.php",
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(data)
            {
              alert(data);
              $('#user_form')[0].reset();
              $('#userModal').modal('hide');
              dataTable.ajax.reload();
            }
          });
        }
        else
        {
          alert("Both Fields are Required");
        }
      });
      
      $(document).on('click', '.update', function(){
        var user_id = $(this).attr("id_headline");
        $.ajax({
          url:"fetch_single.php",
          method:"POST",
          data:{user_id:user_id},
          dataType:"json",
          success:function(data)
          {
            $('#userModal').modal('show');            
            $('#headline').val(data.headline);
            $('.modal-title').text("Edit Headline");
            $('#user_id').val(user_id);
            $('#action').val("Edit");
            $('#operation').val("Edit");
          }
        })
      });
      
      $(document).on('click', '.delete', function(){
        var user_id = $(this).attr("id_headline");
        if(confirm("Are you sure you want to delete this?"))
        {
          $.ajax({
            url:"delete.php",
            method:"POST",
            data:{user_id:user_id},
            success:function(data)
            {
              alert(data);
              dataTable.ajax.reload();
            }
          });
        }
        else
        {
          return false; 
        }
      }); 
    });
    </script>
</body>

</html>

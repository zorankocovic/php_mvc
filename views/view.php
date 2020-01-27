   <?php require("views/header.php");?>
   <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Database
                    <small> query</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php $base_url; ?>">Home</a>
                    </li>
                    <li class="active">Database</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-lg-12">
                <div class="jumbotron">
                   
                    <p>
					<table border=1><tr style="background-color:#339999"><td>Employer name</td>
	<td>Employer role</td>  </tr>
  

<?php
  

  foreach ($users as $u) {?>
  <tr>
	<td> <?php echo $u['name'];?></td>
	<td> <?php echo $u['role'];?></td>
  </tr>
  <?php }
?>  </table></p>
                   
                </div>
            </div>

        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

   
</body>

</html>

</body>
</html>
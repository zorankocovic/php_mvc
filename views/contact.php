<?php require("views/header.php");?>
 <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact 
                    <small> us</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php $base_url; ?>">Home</a>
                    </li>
                    <li class="active">Contact us</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-lg-12">
                <div class="jumbotron">
                   
                    <p><form method="post" id="form-email">
	Your email<br />
	<input type="email" name="email" required="required" value="<?php if (isset($_POST['email'])) echo(htmlspecialchars($_POST['email'])); ?>" /><br />
	Your message<br />
	<textarea name="message"><?php if (isset($_POST['message'])) echo(htmlspecialchars($_POST['message'])); ?></textarea><br />
	<input type="submit" value="Send" />
</form>
					</p>
                   
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
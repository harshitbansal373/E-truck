<?php  include "includes/header.php"; ?>
<?php include "includes/sidebar.php" ?>

<!-- Page Content -->
<div class="container top">
    <div class="row  justify-content-center align-items-center">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="form-wrap">
				<h3 class="text-center mt-4" style="color:black"><i class="far fa-user fa-2x"></i></h3>
				<h2 class="text-center" style="color:black">Login</h2>
            	    <form role="form" action="includes/login.php" method="post" id="login-form" autocomplete="off">
            			<div class="input-group mb-3 mt-5">
							<div class="input-group-prepend">
 								<span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
							</div>
            	            <label for="mobile" class="sr-only">Mobile No.</label>
							<input type="text" name="mobile" id="mobile" class="form-control" pattern="[1-9]{1}[0-9]{9}" title="Invalid Mobile No." placeholder="Enter Mobile No." required>
						</div>
            	        <div class="input-group mb-3">
							<div class="input-group-prepend">
 								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
            	            <label for="password" class="sr-only">password</label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
            	        </div>
            	        <input type="submit" name="login" id="btn-login" class="btn btn-info btn-lg btn-block" value="Login">
						<div class="form-group"><br>
  						<a style="color:#222f3e" href="forgot.php?forgot=<?php echo uniqid(true); ?>"> Forgot Password?</a>
  						</div>
            	    </form>
            </div>
	    </div> <!-- /.col-sm-4 -->
	</div> <!-- /.row -->
</div> 
<!-- /.container -->

<?php include "includes/footer.php";?>

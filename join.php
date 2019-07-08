<?php  include "includes/header.php"; ?>
<?php include "includes/sidebar.php" ?>

<!-- Page Content -->
<div class="container top">
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-5 col-sm-offset-5">
            <div class="form-wrap">
                <h3 class="text-center mt-3 mb-3" style="color:black"><i class="fas fa-user-plus fa-2x"></i></h3>
				<h2 class="text-center" style="color:black">Join Us</h2>                    
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="mobile" class="sr-only">Mobile No.</label>
                            <input type="text" name="mobile" id="mobile" class="form-control" pattern="[1-9]{1}[0-9]{9}" title="Invalid Mobile No." required placeholder="Enter Your Mobile No.">
                        </div>
                        <div class="form-group">
                            <label for="firstname" class="sr-only">Firstname</label>
                            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter Your Firstname">
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="sr-only">Lastname</label>
                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Your Lastname">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                        <input type="submit" name="submit" id="btn-login" class="btn btn-secondary btn-lg btn-block mb-3" value="Register">
                    </form>
                    <p class="text-center">Already Have an Account <a class="ml-2" style="color:#222f3e;font-weight:bold;" href="login.php">Login Now</a></p>
            </div>
        </div> <!-- /.col-sm-5 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->
<br>

<?php include "includes/footer.php";?>


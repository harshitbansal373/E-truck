<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php" ?>
<div class="home">
    <div class="row setbg">
        <img class="img-fluid web" src="images/bluebg4.jpg" alt="home">
        <img class="img-fluid mobile" src="images/bluebg2.jpg" alt="home">
    </div>
    <div class="row top">
        <div class="col-sm-4 book px-5 pt-5 top">
            <h2 class="text-center homehead">GET A TRUCK NOW</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3 mt-5">
                    <input type="text" class="form-control" name="drop_in" placeholder="Drop in">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="drop_out" placeholder="Drop out">
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="time">Time</label>
                        <input type="text" class="form-control" name="time" placeholder="NOW">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="time_schedule">As Per Schedule</label>
                        <input type="time" class="form-control" placeholder="hrs:mins" name="time_schedule">
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-secondary btn-block mt-2" name="order" value="GO RIDE" >
                </div>
            </form>
        </div>

        <div class="col-sm-6 offset-sm-2 mt-1">
            <img class="img-fluid" src="images/taxi.png" alt="truck">
        </div>

    </div>
    <!-- row -->

    <div class="container">
        <div class="text-center mt-5 mb-5 head" style="color:white;"><h3>OUR SERVICES</h3></div>
        <div class="row">
            <div class="card card-beauty col-sm-3" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title head"><i class="fas fa-truck fa-3x mb-4"></i> <br> FAST BOOKING</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <div class="card card-beauty col-sm-3 offset-sm-1" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title head"><i class="far fa-credit-card fa-3x mb-4"></i> <br> BEST PRICE</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <div class="card card-beauty col-sm-3 offset-sm-1" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title head"><i class="fas fa-truck-loading fa-3x mb-4"></i> <br> FAST & SAFE</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div>
        <img class="img-fluid web mt-5" src="images/bg3.png" alt="bg3">
        <img class="img-fluid mobile" src="images/bg4.png" alt="bg4">
    </div>
    
</div>
<?php include "includes/footer.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body style="background: linear-gradient(45deg, #cfedf5 20%, #d595b9 60%, #e5eff2 20%);">
<div class="header">
<?php
$active="home";
include('header.php'); ?>

</div>
<br>
<h1 style="text-align:center;font-size:45px;font-family: Verdana, Geneva, Tahoma, sans-serif;"><b>Welcome to Blood Bank Management System</b></h1>

  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
    <div class="container">
    <div id="content-wrap"style="padding-bottom:75px;">
  <div id="demo" class="carousel slide" data-ride="carousel" >

    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <div class="carousel-inner" style="border-radius: 20px;"> 
      <div class="carousel-item active">
        <img src="image\hero_img1.png" alt="Hero Image 1" height="500" width="100%">
      </div>

      <div class="carousel-item">
        <img src="image\hero_img2.png" alt="Hero Image 2" height="500" width="100%">
      </div>

      <div class="carousel-item">
        <img src="image\hero_img3.png" alt="Hero Image 3"  height="500" width="100%">
      </div>

    </div>

    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
<br>
<br>
        

<br>

        <div class="row">
            <div class="col-lg-6">
                <h2>Why Blood Groups Matter</h2>
                <p>
                  Blood type compatibility is crucial when it comes to blood transfusions, organ transplants, and pregnancy. Mismatched blood can cause the body to reject the foreign blood cells, leading to serious complications. For example:
                  <br><br>i. <b> O Negative </b> is the universal donor for red blood cells.
                  <br>ii. <b> AB Positive </b>is the universal plasma donor.
                </p>
                <br><br>


            </div>
            <div class="col-lg-6">
                <img class="img-fluid" src="image\photo1.png" alt="photo1" style="border-radius:15px;">
            </div>
        </div>
        <div class="row">
            <div class="mb-4 col-lg-4">
                <div class="card" >
                    <h4 class="card-header card bg-info text-dark rounded" ">Types of Blood Donations</h4>

                        <p class="card-body overflow-auto rounded" style="padding-left:2%;height:230px;text-align:left;">
                        1) Whole Blood Donation: The most common type of donation. Blood is drawn in its entirety, and it is separated into components after donation.<br><br>
                        2) Plasma Donation: Plasma is the liquid part of the blood. It is often used in the treatment of burns, liver diseases, or clotting disorders.<br><br>
                        3) Platelet Donation: Platelets are used to treat cancer patients or those with clotting disorders. Platelet donations are often collected through apheresis, a process that selectively extracts platelets.<br><br>
                        4) Double Red Cell Donation: Donors give two units of red blood cells while other components (plasma and platelets) are returned to the body.<br><br>
                        </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-dark rounded">Frequency of Donation</h4>

                    <p class="card-body overflow-auto rounded" style="padding-left:2%;height:230px;text-align:left;">
                      1) Whole Blood: A person can donate whole blood once every 56 days (or every 8 weeks).<br><br>
                      2) Plasma: Plasma can be donated more frequently, usually once every 28 days.<br><br>
                      3) Platelets: Platelets can be donated once every 7 days, but typically up to 24 times per year.<br><br>
                      4) Double Red Cells: This can be done once every 16 weeks.<br><br>
                     </p>

                        </div>
            </div>
              <img src="image/photo2.png" alt="Description Image" style="height:300px;width:350px;border-radius: 10px;" >
          </div>
          

        <hr>

        <div class="row mb-4">
            <div class="col-md-8">
            <h4>FUTURE OF BLOOD DONATION</h4>
            <p><br>
1) Artificial Blood: Research into synthetic blood and blood substitutes is ongoing, but as of now, there is no complete substitute for human blood.<br><br>
2) Donation Technologies: Advances in apheresis technology allow for the collection of specific blood components like plasma or platelets more efficiently.
          </p>
              </div>
            </div>
        

    </div>
  </div>
  <?php include('footer.php');?>
</div>

</body>

</html>

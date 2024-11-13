<?php include 'session.php'; ?>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>


</style>
</head>

<body style="color:black">
  <?php
  include 'conn.php';
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    ?>
<div id="header">
<?php $active="add"; include 'header.php';
?>
<div style="height:70vh;width:90vw;position:relative;background:#c7714f;left:5%;border-radius:20px;opacity:0.94;">
  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
    <div class="container">
    <div id="content-wrap" style="padding-bottom:50px;">
  <div class="row">
      <div class="col-lg-6">
          <h1 class="mt-4 mb-3">Register Your Blood</h1>
        </div>
  </div>
  
  <form name="donor" action="finalize.php" method="post">
  <b><div class="row">
  <div class="col-lg-6 mb-4">
  <div>Full Name</div>
  <div><input type="text" name="fullname" class="form-control" required></div>
  </div>
  <div class="col-lg-6 mb-4">
  <div>Age</div>
  <div><input type="text" name="age" class="form-control" required></div>
  </div>
  </div>

  <div class="row">
  <div class="col-lg-6 mb-4">
  <div>Mobile Number</div>
  <div><input type="text" name="mobileno" class="form-control" required></div>
  </div>
  <div class="col-lg-6 mb-4">
  <div>Gender</div>
  <div><select name="gender" class="form-control" required>
  <option value="">Select</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  </select>
  </div>
  </div>

  <div class="col-lg-6 mb-4">
  <div>Blood Group</div>
  <div><select name="blood" class="form-control" required>
    <option value=""selected disabled>Select</option>
    <?php
      include 'conn.php';
      $sql= "select * from blood";
      $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
      while($row=mysqli_fetch_assoc($result)){
     ?>
     <option value=" <?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group'] ?> </option>
    <?php } ?>
  </select>
  </div>
  </div>
  </div>
  <div class="row">
  <div class="col-lg-4 mb-4">
  <div>Address</div>
  <div><textarea class="form-control" name="address" required></textarea></div></div>
  </div></b>
  <div class="row">
    <div class="col-lg-4 mb-4">
    <div><input type="submit" name="submit" class="btn btn-primary" value="Submit" style="cursor:pointer;background:#004a41;border:0;font-weight: bold;"></div>
    </div>
  </div>
  </div>
  </div>

</div>
</div>
      <div id="footer">
<?php include 'footer.php'; ?>

</div>
      </div>
      <?php
    } else {
        echo '<div class="alert alert-danger"><b> Please Login First To Access Admin Portal.</b></div>';
        ?>
        <form method="post" name="" action="login.php" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-8 col-sm-offset-4" style="float:left">

              <button class="btn btn-primary" name="submit" type="submit">Go to Login Page</button>
            </div>
          </div>
        </form>
    <?php }
     ?>
     <script>
     function popup() {
       alert("Data added Successfully.");
     }
     </script>
</body>
</html>

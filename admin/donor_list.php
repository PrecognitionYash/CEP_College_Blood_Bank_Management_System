<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    #he{
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        padding: 3px 7px;
        color: #fff;
        text-decoration: none;
        border-radius: 3px;
        text-align:center;
    }
  </style>
</head>

<?php
include 'conn.php';
include 'session.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

  // Handle Excel Export functionality
  if (isset($_POST['export_excel'])) {
    $filename = "donor_list_" . date('Y-m-d') . ".csv"; // File name with current date

    // Output headers for Excel download
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    $output = fopen('php://output', 'w');

    // Column headers (excluding Email Id)
    fputcsv($output, array('S.no', 'Name', 'Mobile Number', 'Age', 'Gender', 'Blood Group', 'Address'));

    // Fetch donor data and write to CSV
    $sql = "SELECT * FROM donor_details JOIN blood ON donor_details.donor_blood = blood.blood_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $count = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            fputcsv($output, array($count++, $row['donor_name'], $row['donor_number'], $row['donor_age'], $row['donor_gender'], $row['blood_group'], $row['donor_address']));
        }
    }
    fclose($output);
    exit();
}
?>

<body style="color:black">
  <div id="header">
    <?php include 'header.php'; ?>
  </div>
  <div id="footer">
    <?php $active = "list"; include 'footer.php'; ?>
  </div>

  <div id="content">
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 lg-12 sm-12">
            <h1 class="page-title">Donor List</h1>
          </div>
        </div>
        <hr>
        
        <!-- Excel Export Button -->
        <form method="post">
          <button type="submit" name="export_excel" class="btn btn-success">Export to Excel</button>
        </form>

        <?php
        $limit = 10;
        if (isset($_GET['page'])) {
          $page = $_GET['page'];
        } else {
          $page = 1;
        }
        $offset = ($page - 1) * $limit;
        $count = $offset + 1;
        $sql = "SELECT * FROM donor_details JOIN blood ON donor_details.donor_blood = blood.blood_id LIMIT {$offset}, {$limit}";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
        ?>
        <div class="table-responsive">
          <table class="table table-bordered" style="text-align:center">
            <thead>
              <th>S.no</th>
              <th>Name</th>
              <th>Mobile Number</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Blood Group</th>
              <th>Address</th>
              <th>Action</th>
            </thead>
            <tbody>
              <?php while ($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <td><?php echo $count++; ?></td>
                <td><?php echo $row['donor_name']; ?></td>
                <td><?php echo $row['donor_number']; ?></td>
                <td><?php echo $row['donor_age']; ?></td>
                <td><?php echo $row['donor_gender']; ?></td>
                <td><?php echo $row['blood_group']; ?></td>
                <td><?php echo $row['donor_address']; ?></td>
                <td id="he"><a style="background-color:aqua" href='delete.php?id=<?php echo $row['donor_id']; ?>'>Delete</a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <?php } ?>

        <div class="table-responsive" style="text-align:center;text-align:center">
          <?php
          $sql1 = "SELECT * FROM donor_details";
          $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

          if (mysqli_num_rows($result1) > 0) {
            $total_records = mysqli_num_rows($result1);
            $total_page = ceil($total_records / $limit);

            echo '<ul class="pagination admin-pagination">';
            if ($page > 1) {
              echo '<li><a href="donor_list.php?page=' . ($page - 1) . '">Prev</a></li>';
            }
            for ($i = 1; $i <= $total_page; $i++) {
              $active = ($i == $page) ? "active" : "";
              echo '<li class="' . $active . '"><a href="donor_list.php?page=' . $i . '">' . $i . '</a></li>';
            }
            if ($total_page > $page) {
              echo '<li><a href="donor_list.php?page=' . ($page + 1) . '">Next</a></li>';
            }
            echo '</ul>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>

<?php } else { ?>
  <div class="alert alert-danger"><b>Please Login First To Access Admin Portal.</b></div>
  <form method="post" action="login.php" class="form-horizontal">
    <div class="form-group">
      <div class="col-sm-8 col-sm-offset-4" style="float:left">
        <button class="btn btn-primary" name="submit" type="submit">Go to Login Page</button>
      </div>
    </div>
  </form>
<?php } ?>

</body>
</html>

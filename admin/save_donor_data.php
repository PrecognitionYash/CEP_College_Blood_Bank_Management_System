
<?php
$name=$_POST['fullname'];
$age=$_POST['age'];
$number=$_POST['mobileno'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood'];
$email=$_POST['emailid'];
$address=$_POST['address'];
$conn=mysqli_connect("localhost","root","","blood_donation") or die("Faild to connect.....");
$sql= "INSERT INTO donor_details(donor_name,donor_number,donor_mail,donor_age,donor_gender,donor_blood,donor_address) values('{$name}','{$number}','{$email}','{$age}','{$gender}','{$blood_group}','{$address}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");
header("Location: http://localhost/Temp/CEP_College_Blood_Bank_Management_System/admin/donor_list.php");

mysqli_close($conn);
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body {
  margin: 0;
  font-family: 'Averia Gruesa Libre';
  font-size: 15px;
  color:#e3bbfa;
}

.footer {
  margin: 0;
  width: 100%;
  height: 100px;
  background-color: #08002c;
  position: fixed;
  border-radius: 10px;
  top:88vh;
  align-items: center;
  justify-content: center;
  display:flex;
  bottom: 120px;
  flex-direction: row;
  gap:20px;
}

.footer a {
  color: white;
  padding:16px;

  text-decoration: none;
}



.footer a:hover:not(.active) {
  background-color: #555;
  color: white;
  border-radius: 10px;
}



@media screen and (max-width: 700px) {
  .footer {
    width: 100%;
    height: auto;
    position: relative;
  }
  .footer a {float: left;}
  div.content {margin-left: 0;}
}

a.pressed{
background: linear-gradient(to left, #e1edf1  0%, #70aeec 100%);
color: black;
border-radius:10px;
}


@media screen and (max-width: 400px) {
  .footer a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<div class="footer" ><b>
  <a href="dashboard.php"   <?php if($active=='dashboard') echo "class='pressed'"; ?>><span class="glyphicon glyphicon-dashboard"></span>&nbsp&nbspDashboard</a>
  <a href="register.php"   <?php if($active=='add') echo "class='pressed'"; ?>><span class="glyphicon glyphicon-pencil"></span>&nbsp&nbspAdd Donor</a>
  <a href="donor_list.php"   <?php if($active=='list') echo "class='pressed'"; ?>><span class="glyphicon glyphicon-list-alt"></span>&nbsp&nbsp Donor List</a></b>
</div>
</body>
</html>


<html>

<head>


<style>

.header {
  height: 100px;
  overflow:hidden;
  background-color:#1b012b;
  top: 0;
  width:100%;
  padding: 10px 5px;
  color:#FF0404;
  display:flex;
  align-items: center;
  justify-content: center;
  position:sticky;
  z-index:20;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
  font-weight:bold;
  font-family: Arial, Helvetica, sans-serif;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
  color:#FF0404;
}

.header a:hover {
  background-color: #b6aaf9;
}

.header-right {
  float: right;
  width:90%;
  display:flex ;
  flex-direction: row;
  flex-flow: row-reverse;
  gap:10px;
}


@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

a.pressed{
background: linear-gradient(to left, #87b042 0%, #78a53d 100%);
color: white;
border-radius:10px;
}

a.logo2{
  background-color: #333;
}

.common_logo{
  height: 70px;
  border-radius: 10px;
}

</style>
</head>

<body>
  <div class="header">
    <a href="home.php" class="logo"<?php if($active=='home') echo "class='logo2'"; ?>><img class="common_logo" src="image/Logo.jpg" alt="Logo" /></a>
    <div class="header-right">
      <a href="about_us.php"  <?php if($active=='about') echo "class='pressed'"; ?> >About Us</a>
      <a href="importance.php"  <?php if($active=='why') echo "class='pressed'"; ?>>Importance</a>
      <a href="find_blood.php" <?php if($active=='find') echo "class='pressed'"; ?>>Find Blood</a>
      <a href="register.php"  <?php if($active=='register') echo "class='pressed'"; ?>>Register</a>
    </div>
  </div>

</body>
</html>

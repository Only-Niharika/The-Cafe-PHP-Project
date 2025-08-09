<?php
include("session.php");
include("connection.php");
echo $_SESSION["user_id"];
?>
<html>
<head>
    <title>The Cafe</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="w3-top">
    <div class="w3-row w3-padding  w3-black">
        <div class="w3-col s2"><a href="../index.php?user=<?php echo $_SESSION['user_id']; ?>" class="w3-button w3-block w3-black">HOME</a></div>  
        <div class="w3-col s2"><a href="home.php#menu" class="w3-button w3-block w3-black">MENU</a></div>
        <div class="w3-col s2"><a href="home.php#order" class="w3-button w3-block w3-black">ORDER HERE</a></div>
        <div class="w3-col s2"><a href="home.php#where" class="w3-button w3-block w3-black">CONTACT US</a></div>
		<div class="w3-col s2"><a href="profile.php" class="w3-button w3-block w3-black">YOUR PROFILE</a></div>
  		<div class="w3-col s2"><a href="logout.php" class="w3-button w3-block w3-black"> LOGOUT </a> </div>
     
    </div>
</div>

<!--Your Profile Page-->
<div class="w3-container w3-padding-64 w3-light-grey" id="order">
  <div class="w3-center">
    <span class="w3-xlarge" style="padding-bottom:50px"></span>
    <h2 class="w3-xxlarge w3-wide">YOUR PROFILE</h2>
  </div>
<div class="w3-content" id="register" style="max-width:700px;">
       <?php
       $str = "SELECT * FROM users WHERE user_id = " . $_SESSION['user_id'];
       $res=mysqli_query($conn,$str);
       while(list($uid,$name,$uname,$pass,$phone,$email)=mysqli_fetch_row($res))
       {
       ?>
   <form action="admin/code.php" method="POST">
    <h5>Name</h5>
    <p><input class="w3-input w3-padding-16 w3-border w3-center" style="background-color:white" type="text" placeholder="Name" required name="dname" value="<?=$name?>" disabled ></p>
    <h5>Username</h5>
    <p><input class="w3-input w3-padding-16 w3-border w3-center" style="background-color:white" type="text" placeholder="Username" required name="uname" value="<?=$uname?>" disabled></p>
    <h5>Phone</h5>
    <p><input class="w3-input w3-padding-16 w3-border w3-center" style="background-color:white" type="tel" placeholder="Phone" required name="phone" value="<?=$phone?>" disabled></p>
    <h5>Email</h5>
    <p><input class="w3-input w3-padding-16 w3-border w3-center" style="background-color:white" type="email" placeholder="Email" required name="email" value="<?=$email?>" disabled></p>
    <!--<p><button class="w3-button w3-black" type="button" name=register value=register></button></p>
    <p align="center">Already Have an Account? <strong><a href="admin/index.php">Login</a></strong></p>-->
    </form>
        <?php
        }
        ?>
    </div>
    </div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large" style="margin-top:70px;">
    <p>Powered by <a href="https://github.com/Only-Niharika" target="_blank" class="w3-hover-text-green">Only-Niharika</a></p>
</footer>

</body>
</html>
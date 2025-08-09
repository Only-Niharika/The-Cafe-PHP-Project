<?php
include("session.php");
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

<!-- Links (sit on top) -->
<div class="w3-top">
    <div class="w3-row w3-padding  w3-black">
        <div class="w3-col s2"><a href="../index.php?user=<?php echo $_SESSION['user_id']; ?>" class="w3-button w3-block w3-black">HOME</a></div>  
        <div class="w3-col s2"><a href="#menu" class="w3-button w3-block w3-black">MENU</a></div>
        <div class="w3-col s2"><a href="#order" class="w3-button w3-block w3-black">ORDER HERE</a></div>
        <div class="w3-col s2"><a href="#where" class="w3-button w3-block w3-black">CONTACT US</a></div>
		<div class="w3-col s2"><a href="profile.php" class="w3-button w3-block w3-black">YOUR PROFILE</a></div>
  		<div class="w3-col s2"><a href="logout.php" class="w3-button w3-block w3-black"> LOGOUT </a> </div>
     
    </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
        <span class="w3-tag">Open from 6am to 5pm</span>
    </div>
    <div class="w3-display-middle w3-center">
        <span class="w3-text-white" style="font-size:90px">the<br>Cafe</span>
    </div>
    <div class="w3-display-bottomright w3-center w3-padding-large">
        <span class="w3-text-white">15 Adr street, 5015</span>
    </div>
</header>

<!-- Menu Section -->
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48">
      <span class="w3-tag w3-wide">THE MENU</span>
    </h5>

    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">Eat</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drink');">
        <div class="w3-col s6 tablink">Drink</div>
      </a>
    </div>

    <!-- Eat Section -->
    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
    <h5>Bread Basket</h5>
    <p class="w3-text-grey">Fresh baked fruit breads and muffins - $5.50</p><br>

    <h5>Blueberry Pancakes</h5>
    <p class="w3-text-grey">With syrup, butter, and berries - $8.50</p><br>

    <h5>Chocolate Croissant</h5>
    <p class="w3-text-grey">Flaky pastry filled with rich chocolate - $3.00</p><br>

    <h5>Avocado Toast</h5>
    <p class="w3-text-grey">Sourdough bread topped with smashed avocado and seasoning - $4.75</p><br>

    <h5>Cheese Sandwich</h5>
    <p class="w3-text-grey">Classic grilled cheese sandwich with cheddar - $4.50</p>
    </div>

    <!-- Drink Section -->
    <div id="Drink" class="w3-container menu w3-padding-48 w3-card" style="display:none">
    <h5>Coffee</h5>
    <p class="w3-text-grey">Regular coffee - $2.50</p><br>

    <h5>Iced Tea</h5>
    <p class="w3-text-grey">Refreshing cold tea - $3.00</p><br>

    <h5>Classic Cappuccino</h5>
    <p class="w3-text-grey">Rich espresso topped with steamed milk and foam - $3.50</p><br>            

    <h5>Iced Latte</h5>
    <p class="w3-text-grey">Chilled espresso with milk and ice - $3.25</p><br>

    <h5>Green Tea</h5>
    <p class="w3-text-grey">Refreshing hot or iced green tea - $2.00</p><br>

    <h5>Fresh Orange Juice</h5>
    <p class="w3-text-grey">Freshly squeezed oranges - $3.00</p>
    </div>
  </div>
</div>

   <!-- Place order section -->
<div class="w3-container w3-padding-64 w3-light-grey" id="order" style="margin-top:70px">
  <div class="w3-center">
    <span class="w3-xlarge" style="padding-bottom:50px">Place Your Order Here</span>
    <h2 class="w3-xxlarge w3-wide"></h2>
  </div>

  <div class="w3-row-padding w3-margin-top">
    <div class="w3-quarter w3-center">
      <img src="../image/Cheese-Sandwitch.jpg" alt="Cheese Sandwitch" class="w3-square" style="width:150px;height:150px;">
      <h5>Cheese Sandwich</h5>
      <p class="w3-text-grey">Classic grilled cheese sandwich with cheddar <br> $4.50</p>
    </div>

    <div class="w3-quarter w3-center">
      <img src="../image/iced-latte.jpg" alt="iced latte" class="w3-square" style="width:150px;height:150px;">
      <h5>Iced Latte</h5>
      <p class="w3-text-grey">Chilled espresso with milk and ice <br> $3.25</p><br>
    </div>

    <div class="w3-quarter w3-center">
      <img src="../image/chocolate-croissant.jpg" alt="chocolate croissant" class="w3-square" style="width:150px;height:150px;">
      <h5>Chocolate Croissant</h5>
      <p class="w3-text-grey">Flaky pastry filled with rich chocolate  <br>$3.00</p><br>
    </div>

    <div class="w3-quarter w3-center">
      <img src="../image/Orange-Juice.jpg" alt="Orange Juice" class="w3-square" style="width:150px;height:150px;">
      <h5>Fresh Orange Juice</h5>
      <p class="w3-text-grey">Freshly squeezed oranges <br> $3.00</p>
    </div>
  </div>

  <div class=w3-center>
    <button type="button" class="w3-button w3-black w3-padding-large w3-hover-grey" style="align-self:center">
      Place Order
    </button>
  </div>

</div>

<!-- Contact Section -->

 <div class="w3-container" id="where" style="padding-bottom:32px;">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHERE TO FIND US</span></h5>
            <p>Find us at some address at some place.</p>
        <div style="display:inline">
            <div style="width:50%; float:left;">
                <img src="../image/map.png" class="w3-image"/>
            </div>
        </div>
            <div style="width:50%; float:right; padding-left:20px">
                <p><strong>Contact No. : </strong>9875324576</p>
                <p><strong>Email : </strong>thecafe@gmail.com</p>
                <p><strong>Address : </strong>#232 abc town</p>
            </div>
        </div>
    </div>
        <br>    
	<div class="w3-content" id="register" style="max-width:700px;">
        <div>
             <p style="font-size:26px"><strong>Contact Us</strong></p>
	        </div>
   <form action="admin/code.php" method="POST">
    <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="dname"></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="tel" placeholder="Phone" required name="phone"></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="email" placeholder="Email" required name="email"></p>
    <p><textarea class="w3-input w3-padding-16 w3-border" placeholder="Type Your Message Here" required name="msg"></textarea></p>
    <p><button class="w3-button w3-black" type="button" name=register value=register>SEND MESSAGE</button></p>
</form>

        </div>
    </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
    <p>Powered by <a href="https://github.com/Only-Niharika" target="_blank" class="w3-hover-text-green">Only-Niharika</a></p>
</footer>

<script>
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-dark-grey");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.classList.add("w3-dark-grey");
}
document.getElementById("myLink").click();
</script>
 
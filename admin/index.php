<html>
<head>
    <title>Login - The Cafe</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="w3-top">
    <div class="w3-row w3-padding  w3-black">
        <div class="w3-col s2"><a href="../index.php#" class="w3-button w3-block w3-black">HOME</a></div>
        <div class="w3-col s2"><a href="../index.php#about" class="w3-button w3-block w3-black">ABOUT</a></div>
        <div class="w3-col s2"><a href="../index.php#menu" class="w3-button w3-block w3-black">MENU</a></div>
        <div class="w3-col s2"><a href="../index.php#where" class="w3-button w3-block w3-black">WHERE</a></div>
           <?php
        if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
        {
        ?>
        <div class="w3-col s2"><a href="admin/home.php" class="w3-button w3-block w3-black">MY ORDERS</a></div>
        <div class="w3-col s2"><a href="admin/logout.php" class="w3-button w3-block w3-black"> LOGOUT </a> </div>
        <?php
        }
        else
        {
        ?>
         <div class="w3-col s2"><a href="../index.php#register" class="w3-button w3-block w3-black">REGISTER</a></div>
         <div class="w3-col s2"><a href="admin/index.php#login" class="w3-button w3-block w3-black"> LOGIN </a> </div>
        <?php
        }
        ?>
    </div>
    </div>
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-middle w3-center">
        <span class="w3-text-white" style="font-size:90px">the<br>Cafe</span>
    </div>
</header>
<div class="w3-container w3-padding-64 w3-center" >
    <div class="login-container" id="login">
        <h2 class="w3-center">Login</h2>
        <form action="code.php" method="POST">
            <p><input class="w3-input w3-padding-16 w3-border" id="uname" name="uname" type="text" placeholder="Username" required></p>
            <p><input class="w3-input w3-padding-16 w3-border" id="pass" name="pass" type="password" placeholder="Password" required></p>
            <p><button class="w3-button w3-black w3-padding-large" type="submit" name="login" value="Login">Login</button></p>
        </form>
    </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
    <p>Powered by <a href="https://github.com/Only-Niharika" target="_blank" class="w3-hover-text-green">Only-Niharika</a></p>
</footer>

</body>
</html>
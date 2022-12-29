<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style/style.css">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<header>
    <nav>
        <h3>TEST WEB</h3>
        <div class="topnav">
            <ul>
               <li><a href="index.php">HOME</a></li>
               <li><a href="#">PRODUCTS</a></li>
               <li><a href="#">CURRENT SALES</a></li>
               <li><a href="#">MEMBER+</a></li>
            </ul>
        <ul>
            <?php
            if (isset($_SESSION["userid"]))
            {
            ?>
                <li><a href="#"><?php echo $_SESSION["useruid"];?></a></li>
                <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
            <?php
                }
                else
                {
            ?>
                <li><a href="#">SIGN UP</a></li>
                <li><a href="#" class="header-login-a">LOGIN</a></li>
            <?php
                }
            ?>
        </ul>
        </div>
    </nav>
</header>
<br>
<br>
<br>
    <div class="index-login-signup">
      <form action="includes/signup.inc.php" method="post"> <!-- post means we will not see the inputed info in the URL -->
        <input type="text" name="uid" placeholder="Username"><br>
        <input type="password" name="pwd" placeholder="Password"><br>
        <input type="password" name="pwdrepeat" placeholder="Repeat Password"><br>
        <input type="text" name="email" placeholder="E-mail"><br>
        <button type="submit" name="submit">SIGN UP</button>
      </form>
    </div>
    <div class="index-login-login">
        <form action="includes/login.inc.php" method="post">
            <br>
            <input type="text" name="uid" placeholder="Username/Email"><br>
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <button type="submit" name="submit">LOGIN</button>
        </form>
    </div>

</body>
</html>


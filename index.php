<?php     
    session_start(); 
    if (isset($_GET['logout'])) 
    {
        session_destroy();
        unset($_SESSION['name']);
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en" class="js csstransitions">
<head>
<title>Students Database</title><meta charset="utf-8">
<body background="https://wallpaperaccess.com/full/1126810.jpg">
      <text align ="center">
        <font size="3px">
    <h1><bold> VIHAA CONSTRUCTIONS </bold></h1>
    <h3>From Vision to Reality</h3>
  </font>
</text>

</body>
    
</head>
<body>
<div id="pagewrapper">
<div id="topbg"></div>
<div id="systemName">

</div>
<div id="header">
<div id="mainmenu">
<header>
<ul>

<?php if (!isset($_SESSION['name'])){?>
    <li><a href="login.php">Login</a></li>
    <li><a href="register.php">Register</a></li>
<?php }?>
<?php if (isset($_SESSION['name']))
{?>
<li><a href="homee.html">Home</a></li>
<li><a href="HOME.html">Our Services</a></li>
<li><a href="mark_entry.php">Contact Details</a></li>
<li><a href="view_mark.php">View Details</a></li>
<li> <a href="index.php?logout='1'">Logout</a> </li>
<?php }?>
</ul>
</header>
</div>
</div>
<div class="content">
<!-- notification message -->
<?php if (isset($_SESSION['success'])) {?>
<div class="error success" >
<h3 style="color: green;">
<?php
echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3></div>
<?php } ?>
</div>
<div id="content">
    <text align ="center">
<h1>Welcome <?php
if (isset($_SESSION['name']))
{ echo
$_SESSION['name'];
}
?>

</h1>
</text>

</div>
</body>
</html>

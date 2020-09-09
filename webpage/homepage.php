<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<style>
    * {
        box-sizing: border-box;
    }

    .column {
        float: right;
        width: 15%;
        padding: 25px;
    }

    /* Clearfix (clear floats) */
    .row::after {
        content: "";
        clear: both;
        display: table;
    }
</style>
<!DOCTYPE html>
<html>
<head>
    <title>Logistics</title>
    <link href="mainstyles.css" rel="stylesheet" />
</head>
<body>
    <header>
        <h1 id="title" align="center">Welcome to the Home Page Tracking High Valued Assets</h1>
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong> <a href="logout.php?logout='1'" style="color: white;">logout</a> </p>
        <?php endif ?>

    </header>
    <div class="row">
        <div class="column">
            <img src="airforce.png" alt="BES" style="width:55%">
        </div>
        <div class="column">
            <img src="afitc.png" alt="afitc" style="width:75%">
        </div>
        <div class="column">
            <img src="hyundai.png" alt="hyundai" style="width:90%">
        </div>
    </div>

    <div align="center"><h3> Tracking High Valued Assets </h3> </div>
    <h3>
        If you would like to check the location of an item,<br />Please click
        <a href="trackingPage.php"> Get Updated Tracking Information</a>
    </h3>

</body>
</html>
<footer>
    <br>
    <dl>
        <dt><strong>Mission Statement</strong></dt>
        <dd>
            We are trying to build a support system to track high valued asset items and be able to find the exact location!<br />
            <br />
            <strong>We would like to add:</strong>
            <ul>
                <li type="circle">Admin menu to add new users</li>
                <li type="circle">A link to each E.G.G that is active</li>
                <li type="circle">An interactive map to find a specific E.G.G</li>
            </ul>
        </dd>
    </dl>
    <br>
    <h1 id="title" align="middle">This project was innovated by The AUMelettes: Kayla Luther, Adam Rodriquez, Riley Taylor, Rebecca Hogue, and David Whyte at innovateAFITC 2019 </h1>
    <br>
    <br>
</footer>

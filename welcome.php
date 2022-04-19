<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true ){
        header("location:login.php");
        exit;
    }
?>
    <?php require 'components/_nav.php'  ?>
 
<head>
    <title>Beautiful Responsive Menu Design By Arjun Ghimire</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- this is v4 fontawesome cdn-->
    <script src="https://use.fontawesome.com/efcb6191f0.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/container.css">
    <script src="js/script.js"></script>
</head>
<body style="text-align:center;">
<div>
    <br>
<h1>Welcome - <?php echo $_SESSION['email'] ?></h1>

<h3>Your account was registered on = <?php echo $_SESSION['date'] ?></h3>
<a href="logout.php">Click here to logout</a>
</div>
    
</body>

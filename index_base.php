<?php 
include "sd%20link$base/cone.php";
 ?>
 <?php 
         $confi="SELECT * FROM general";
$res_confi= $mysqli->query($confi) or die (mysqli_error($mysqli));
$fila_confi=$res_confi->fetch_assoc();
 ?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="vendor/bootstrap/css/stilo01.css" rel="stylesheet">

    <title><?php echo $fila_confi['nom_inst']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Main -->
        <div id="main">
          <div class="inner">

            <!-- Header -->
            <header id="header">
              <div class="logo">
                <a href="#"><?php echo $fila_confi['nom_inst']; ?></a>
              </div>
            </header>

            <!-- Banner -->
           
            <!-- Services --><!-- Top Image -->
            
                      
						
    
                 

            <!-- Left Image --><!-- Right Image -->


  </body>

</html>

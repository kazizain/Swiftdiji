<?php
include "../conn.php";
include "../config.php";
session_start();
$name = $_SESSION['account'];







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>user Account</title>

        <!-- Favicons  use for icon-->
  <link href="../assets/bank.png" rel="icon">
  <link href="../assets/bank.png" rel="apple-touch-icon">


<!--------------------------------------CDNs---------------------------------------->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>













    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    

</head>











    <!-----------------------css------------------------->
<style>
    nav {
  position: fixed;
  top: 0;
  width: 100%;
  background-color: lightgray;
  z-index: 1;
}




nav a {
  text-decoration: none;
  color: #333;
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
  transition: color 0.2s;
}

nav a:hover {
  color: blue;
}


nav.sticky {
  position: fixed;
  top: 0;
  background-color: #fff;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

body {
  background-image: url('../assets/divh.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}



body::before {
  content: "";
  background-image: url('../assets/divh.jpg');
  background-repeat: no-repeat;
  opacity: 0.2;
  position: absolute;
  background-size: cover;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}


</style>
</head>
<body>


<!-----------navbar-------------->



<div class="container-fluid">





<div class="row">

<nav class="navbar navbar-expand-sm">
    <a class="navbar-brand" href="#"><img src="../assets/bank.png" alt="bank logo" style="height:30%"></a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php" aria-current="page">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="deposit.php" aria-current="page">Deposit</a>
            </li>
    

            <li class="nav-item">
                <a class="nav-link" href="#div3" aria-current="page">Tranfer Money</a>
            </li>

            
            <li class="nav-item">
                <a class="nav-link" href="withdraw.php" aria-current="page">Withdraw Money</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="transhis.php" aria-current="page">Transaction History</a>
            </li>

        </ul>
        <form class="d-flex my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0 mx-4"  id="log" data-toggle="modal" data-target="#login" >Account - <?php echo "$name"; ?></button>
        </form>
        
         <a href="../logout.php">   <button class="btn btn-outline-dark my-2 my-sm-0 mx-4" type="submit" id="logi">Log out</button> </a>
        
    </div>
</nav>

<div class="row w-100 mt-5 mb-3" >
  <div class="col" style="padding: 22px;padding-top: 0">
    <div class="jumbotron shadowBlack" style="padding: 25px;min-height: 241px;max-height: 241px">
  <h4 class="display-5">Wellcome to <?php echo BANKNAME ?></h4>
  <p  class="lead alert alert-warning"><b>Latest Notification:</b>

  <?php 
    
        echo "<div class='alert alert-info'>Notice box empty</div>";
     ?></p>
  
</div>
        <div id="carouselExampleIndicators" class="carousel slide my-2 rounded-1 shadowBlack" data-ride="carousel" >
          <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="1.jpg" alt="First slide" style="max-height: 250px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="2.jpg" alt="Second slide" style="max-height: 250px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="3.jpg" alt="Third slide" style="max-height: 250px">
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </div>
<div class="col">
    <div class="row" style="padding: 22px;padding-top: 0">
      <div class="col">
        <div class="card shadowBlack ">
          <img class="card-img-top" src="acount.jpg" style="max-height: 155px;min-height: 155px" alt="Card image cap">
          <div class="card-body">
            <a href="deposit.php" class="btn btn-outline-success btn-block">Deposite Money</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadowBlack ">
          <img class="card-img-top" src="transfer.jpg" alt="Card image cap" style="max-height: 155px;min-height: 155px">
        <div class="card-body">
          <a href="transfer.php" class="btn btn-outline-success btn-block">Transfer Money</a>
         </div>
        </div>
      </div>
    </div>
    <div class="row" style="padding: 22px">
      <div class="col">
        <div class="card shadowBlack ">
          <img class="card-img-top" src="withdraw.jpg" style="max-height: 155px;min-height: 155px" alt="Card image cap">
          <div class="card-body">
            <a href="withdraw.php" class="btn btn-outline-primary btn-block">Withdraw Money</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadowBlack ">
          <img class="card-img-top" src="transaction.jpg" alt="Card image cap" style="max-height: 155px;min-height: 155px">
        <div class="card-body">
          <a href="transhis.php" class="btn btn-outline-primary btn-block">Transaction History</a>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>

</body>
</html>
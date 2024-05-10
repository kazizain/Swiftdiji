<?php
include "../conn.php";
include "../config.php";
session_start();
$name = $_SESSION['account'];







if ($_SERVER['REQUEST_METHOD'] == 'POST') {

@$acc_id= $_POST['acc'];
$amu= $_POST['amu'];
    // Prepare insert query
    $sql = "INSERT INTO transaction (account_id,amount,type)
     VALUES ('$acc_id','$amu', 'deposit')";

    // Execute query
    mysqli_query($conn, $sql);

    $sql2 = "UPDATE account
    SET balance = balance + '$amu'
    WHERE account_id = '$acc_id';";
// Execute query
    mysqli_query($conn, $sql2);

}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Deposit</title>

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
        
            <button class="btn btn-outline-success my-2 my-sm-0 mx-4"  id="log" data-toggle="modal" data-target="#login" >Account - <?php echo "$name"; ?></button>
        
         <a href="../logout.php">   <button class="btn btn-outline-dark my-2 my-sm-0 mx-4" type="submit" id="logi">Log out</button> </a>
        
    </div>
</nav>



<div class="container mt-4" >
<div class="card w-100 text-center shadowBlue">
  <div class="card-header">
    Deposit Here
  </div>
  <div class="card-body" style="background:black;color:white;">

  <form method="POST">
            
			<div class="form-group">
				<label for="acc">Account id:</label>
				<input type="number" class="form-control" id="acc" name = "acc" placeholder="Enter account id">
			</div>			

			<div class="form-group">
				<label for="amount">Amount:</label>
				<input type="number" class="form-control" id="amount" name = "amu" placeholder="Enter amount">
			</div>
			<button type="submit" class="btn btn-primary">Deposit</button>
		</form>

     <div class="card-footer text-muted ">
    <?php echo BANKNAME; ?>
  </div>
</div>















  </div>







</body>
</html>
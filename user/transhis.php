<?php
include "../conn.php";
include "../config.php";
session_start();
$name = $_SESSION['account'];


?>

<!DOCTYPE html>
<html>
<head>
  <title>transaction history</title>

 
  <link href="../assets/bank.png" rel="apple-touch-icon">
  <link href="../assets/bank.png" rel="icon">

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
  opacity: 0.5;
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




<div class="container mt-4">
<div class="card w-100 text-center shadowBlue">
  <div class="card-header">
    Transaction History of <?php echo "$name"; ?>
  </div>
  <div class="card-body">
   <table class="table table-bordered table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">transaction_id </th>
      <th scope="col">amount</th>
      <th scope="col">type</th>
      <th scope="col">date_time</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $i = 0;
    $result = $conn->query("SELECT * FROM account
    JOIN transaction ON account.account_id = transaction.account_id
    WHERE account.account_no = '$name'
    ");

    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $i++;
?>
                <tr>
                    <th scope="row"><?php echo $i ?></th>
                    <td><?php echo $row['transaction_id'] ?></td>
                    <td><?php echo $row['amount'] ?></td>
                    <td><?php echo $row['type'] ?></td>
                    <td><?php echo $row['date_time'] ?></td>
                   
                </tr>
<?php
            }
        } else {
            echo "No records found";
        }
    } else {
        echo "Error executing query: " . $conn->error;
    }
?>

</tbody>

</table>
  <div class="card-footer text-muted">
    <?php echo BANKNAME; ?>
  </div>
</div>















  </div>

</body>
</html>
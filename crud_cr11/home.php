<?php
ob_start();
session_start();
require_once 'actions/db_connect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) && !isset($_SESSION["admin"])) {
 header("Location: indexLogin.php");
}
 elseif(isset($_SESSION["admin"])){
  header("Location: admin.php");
}

?>

<!DOCTYPE html>
<html>
<head>
   <title>Welcome to Animal Care Vienna</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">   
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">

body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Quicksand', sans-serif;

}

.parallax_section {
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    position: relative;
}

.parallax_image_first {
    background-image: url("img/pets2.jpg");
    background-position: center;
}

.imgCont {
    display: flex;
    justify-content: center;
    align-items: center;
    max-width: 100%;
    height: 160px;
    background-color: lightgrey;
    padding: 0 8px 0 5px;
    margin-bottom: 5px;
    -webkit-box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 3px 2px 20px 10px rgba(183,183,183,0.66); 
    box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 3px 2px 20px 10px rgba(183,183,183,0.66);}
    
}

#add {
    width: 100%;
    background-color: #508446;
    color: white;
    margin-bottom: 20px;
}  

.card {
    background-color: lightgrey;
    width: 18rem;
    opacity: 0.95;
    margin: 0 30px 30px 0;
    -webkit-box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 11px 6px rgba(165,165,165,0); 
    box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 11px 6px rgba(165,165,165,0);}

.row {
    display: flex;
    justify-content: center;
    padding-top: 30px;
    margin: 0 30px 0 30px;
}

.nav-link {
    font-size: 1.5em;
}

.card-img-top {
    height: 320px;
    padding-top: 15px;
    border-radius: 50%;
}

.btn-danger {
    margin-left: 5px;
}

  </style>
</head>

<body><hr>
  <nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="general.php">Smallies & Biggies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="seniors.php">Seniors</a>
      </li>
    </ul>
    <form class="example" action="action_page.php">
        <input type="text" placeholder="Search doesn't work :)" name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
  </div>
           
<a class="btn btn-danger border border-dark" href="logout.php?logout"> Log Out</a>

</nav><hr>
      <div class="imgCont">
        <h1>Welcome to Animal Care Vienna</h1>
      </div>

    <div class="parallax_section parallax_image_first"> 
      <div class="row">  
  
           <?php
           require_once "actions/db_connect.php";
            $sql = "SELECT * FROM pets";
                       $result = $connect->query($sql);

                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                               echo  "<div class='card col-sm-4 col-md-5 col-lg-3'>
                                              <img class='card-img-top' src='".$row['image']."' alt='Card image cap'>
                                            <div class='card-body'>
                                              <h5 class='card-title'>Name: ".$row['name']."</h5>
                                              <h5 class='card-title'>Age: ".$row['age']."</h5>
                                            </div>
                                            <div class='card-body'>
                                              <a href='details.php?id=".$row['id']. "'class='card-link'>See details</a>
                                            </div>
                                      </div>";
                           }
                       } else  {
                           echo  `<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>`;
                       }
                       ?><br>
                  
         
      </div>
  </div> <!-- Parallax end -->

  <!-- jump to top -->
     <a class="jump" href="#">Jump to top of page</a>
     <a class="jump" href="#">Jump to top of page</a>
     <a class="jump" href="#">Jump to top of page</a>
     <a class="jump" href="#">Jump to top of page</a>
     <a class="jump" href="#">Jump to top of page</a>
     <a class="jump" href="#">Jump to top of page</a>
     <a class="jump" href="#">Jump to top of page</a>
     <a class="jump" href="#">Jump to top of page</a>
     <a class="jump" href="#">Jump to top of page</a>

</body>
</html>
<?php ob_end_flush(); ?>
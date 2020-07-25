<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM pets WHERE id = '$id'";
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();
}
   $connect->close();
?> 

<!DOCTYPE html>
<html>
<head>
   <title>Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">
      body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Quicksand', sans-serif;
        background-image: url("img/tiger.jpg");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }

      .card-img-top {
        width: 20vw;
        position: relative;
        left: 8vw; 
      }

      #container {
        position: relative;
        left: 30vw;
      }

      .card {
        margin: 50px 50px;
        width:40vw;
        opacity: 0.85;
        -webkit-box-shadow: 0px 0px 11px 10px rgba(210,255,204,0.98); 
        box-shadow: 0px 0px 11px 10px rgba(210,255,204,0.98);

      }

      button {
        border-radius: 10px;
        margin: 3px;
        width: 130px;
        height: 50px;
      }

      .btn1 {
        background-color: #A2633E;
        color: white;
      }

      .btn2 {
        background-color: #508446;
        color: white;
      }

      .btn3 {
        background-color: #b7330e;
        color: white;
      }

  </style>  
</head>

<body>
      

  <div class="row" id="container">
 <!--INFO-->
    <div class="card border-dark">
        <div class='card-body'>
              <h3>Info</h3>
                        <hr>
                        <img class='card-img-top border border-dark' src ="<?php echo $data['image'] ?>" alt='Card image cap'>
                        <h5 class='card-text'>Name:</h5><p><?php echo $data['name'] ?></p>
                        <h5 class='card-text'>Age:</h5><p><?php echo $data['age'] ?></p>
                        <h5 class='card-text'>Description:</h5><p><?php echo $data['description'] ?></p>
                        <h5 class='card-text'>Hobbies:</h5><p><?php echo $data['hobbies'] ?></p>
                        <h5 class='card-text'>Size:</h5><p><?php echo $data['size'] ?></p>
                        <h5 class='card-text'>Address:</h5><p><?php echo $data['address'] ?></p>
                        <h5 class='card-text'>Zip Code:</h5><p><?php echo $data['zip'] ?></p>
                        <h5 class='card-text'>City:</h5><p><?php echo $data['city'] ?></p>
                      
                        <hr>
                        <a href= "admin.php"><button class='btn1' type="button">Back to home</button></a>
                        <?php 
                        session_start();

                        if(isset($_SESSION["admin"])){
                        echo "<a href='update.php?id=" .$data['id']."'><button class='btn2' type='button'>Update pet</button></a>
                        <a href='delete.php?id=" .$data['id']."'>
                        <button class='btn3' type='button'>Delete pet</button></a>";
                        
                        };
                        ?>                        
          </div><!--END BODY-->
      </div><!--END INFO-->
  </div><!--END ROW-->
</body>
</html>

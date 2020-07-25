

<!DOCTYPE html>
<html>
<head>
    <title>Big Library | A_Update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
<style type="text/css">
  body {
          
          font-family: 'Quicksand', sans-serif;
          background-image: url("../img/turtle.jpg");
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }

        button {
          margin: 5px;
          font-weight: bold;
          background-color: lightgreen;
          height: 40px;
          cursor: pointer;
          border-radius: 10px;
        }

</style>
</head>
<body>
    <?php

require_once 'db_connect.php';

if ($_POST) { 

   $id = $_POST['id'];
   $p_image = $_POST['image'];
   $p_name = $_POST['name'];
   $p_age = $_POST['age'];
   $p_description = $_POST['description'];
   $p_hobbies = $_POST['hobbies'];
   $p_size = $_POST['size'];
   $p_address = $_POST['address'];
   $p_zip = $_POST['zip'];
   $p_city = $_POST['city'];
   


  $sql = "UPDATE pets SET image = '$p_image', name = '$p_name', age = '$p_age', description = '$p_description', hobbies = '$p_hobbies', size = '$p_size', address = '$p_address', zip = '$p_zip', city = '$p_city' WHERE id = {$id}";

   if($connect->query($sql) === TRUE) {
       echo  "<h3>SUCCESSFULLY UPDATED<h3>";
       echo  "<a href='../admin.php'><button type='button'>Go to home</button></a>";
       echo  "<a href='../update.php?id=" .$id."'><button type='button'>Go back to update</button></a>";
   } else 
   {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}
?>

</body>
</html>
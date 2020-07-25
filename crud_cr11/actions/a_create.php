<!DOCTYPE html>
<html>
<head>
  <title>Action Create</title>
   <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">
    body { 
          font-family: 'Quicksand', sans-serif;
          background-image: url("../img/puppy.jpg"); 
          background-attachment: fixed;
          background-position: top;
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
   $p_image = $_POST['image'];
   $p_name = $_POST['name'];
   $p_age = $_POST['age'];
   $p_description = $_POST['description'];
   $p_hobbies = $_POST['hobbies'];
   $p_size = $_POST['size'];
   $p_address = $_POST['address'];
   $p_zip = $_POST['zip'];
   $p_city = $_POST['city'];

   $sql = "INSERT INTO pets (image, name, age, description, hobbies, size, address, zip, city) VALUES ('$p_image', '$p_name', '$p_age', '$p_description', '$p_hobbies', '$p_size', '$p_address', '$p_zip', '$p_city' )";
    if($connect->query($sql) === TRUE) {
       echo "<h2>NEW PET SUCCESSFULLY ADDED</h2>" ;
       echo "<a href='../create.php'><button type='button'>Add another pet</button></a>";
        echo "<a href='../admin.php'><button type='button'>Back to home</button></a>";
   } else  
   {
       echo "Error " .$connect->error;
   }

   $connect->close();
}

?>
</body>
</html>
<?php 



require_once 'actions/db_connect.php';

 ob_start();
session_start();
if(!isset($_SESSION["user"]) && !isset($_SESSION["admin"])){
  header("Location: indexLogin.php");
}elseif(isset($_SESSION["user"])){
  header("Location: home.php");
  
}


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
   <title>Animal Care Vienna | Delete Pet</title>
   <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <style type="text/css">
   	    body {
            font-family: 'Quicksand', sans-serif;
            background-image: url("img/horoz.jpg");
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover;
        }

        h2 {
            color: red;
        }

        button {
            height: 40px;
            cursor: pointer;
            border-radius: 10px;
        }

   </style>
</head>
<body>

<h2>Do you really want to delete this pet?</h2>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $data['id'] ?>" />
   <button type="submit">Yes, delete this pet!</button>
   <a href="admin.php"><button type="button">No, go to home!</button></a>
</form>

</body>
</html>


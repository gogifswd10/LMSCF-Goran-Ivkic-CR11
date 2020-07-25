

<!DOCTYPE html>
<html>
<head>
	 <title>Animal Care Vienna | A_Delete</title>
	 <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
		body {
          
          font-family: 'Quicksand', sans-serif;
          background-image: url("../img/dalmatinac.jpg");
          background-position: center;
          background-attachment: fixed;
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

        h2 {
          color: red;
        }

	</style>
</head>

<body>
<?php 

require_once 'db_connect.php';

if ($_POST) {
   $id = $_POST['id'];

   $sql = "DELETE FROM pets WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
       echo "<h2>SUCCESSFULLY DELETED!<h2>" ;
       echo "<a href='../admin.php'><button type='button'>Back to home</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>
</body>
</html>

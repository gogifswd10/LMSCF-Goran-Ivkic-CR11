 <?php 
 ob_start();
session_start();
if(!isset($_SESSION["user"]) && !isset($_SESSION["admin"])){
  header("Location: indexLogin.php");
}elseif(isset($_SESSION["user"])){
  header("Location: home.php");
  
}
?>

<!DOCTYPE html>
<html>
<head>
    <title >Animal Care Vienna | Update pet</title>
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
        background-image: url("./img/puppy.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
}

      fieldset {
        font-size: 1.8em;
        margin: auto;
        margin-top: 100px;
        margin-bottom: 50px;
        width: 50%;
        color: white;
        box-shadow: 4px 4px 18px 4px rgba(163,244,74,0.58);
}

     table tr th  {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #3F8716;
        border-radius: 5px;
        color: white;
        border: 1px solid white;
        font-size: 0.8em;
        padding: 10px 0 12px 0;
        margin: 5px;
}

    input {
        width: 600px;
        height: 42px;
        border-radius: 8px;
        opacity: 0.7;
        margin: 10px;
        text-align: center;
        font-size: 1em;
}

    button {
        font-size: 0.6em;
        width: 140px;
        height: 50px;
        border-radius: 5px;
        cursor: pointer;
}
    #btnSave {
        background-color: #a2633e;
        color: white;
    }
    #btnHome {
        background-color: #508446;
        color: white;
}

    legend {
        font-size: 1.2em;
    }

   </style>
</head>

<body>

  <?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM pets WHERE id = {$id}";
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();
}
   $connect->close();
?>
 
<fieldset>
   <legend>Update pet</legend>
   <form action="actions/a_update.php" method="post">
       <table cellspacing="0" cellpadding= "0">
             
           <tr>
               <th>IMAGE URL</th>
               <td><input type="text" name="image" placeholder ="add image url" value="<?php echo $data['image'] ?>"/></td>
           </tr>
           <tr>
               <th>NAME</th>
               <td><input type="text" name="name" placeholder="add name" value= "<?php echo $data['name'] ?>"/></td>
           </tr>    
           <tr>
               <th>AGE</th>
               <td><input type="number" name= "age" placeholder="add the age of the animal" value= "<?php echo $data['age'] ?>"/></td>
           </tr>
           <tr>
               <th>DESCRIPTION</th>
               <td><input type="text" name="description" placeholder ="add description" value= "<?php echo $data['description'] ?>"/></td>
           </tr>
           <tr>
               <th>HOBBIES</th>
               <td><input type="text" name="hobbies" placeholder ="add the hobbies" value= "<?php echo $data['hobbies'] ?>"/></td>
           </tr>
           <tr>
               <th>SIZE</th>
               <td><input type="text" name="size" placeholder ="type small, medium or large" value= "<?php echo $data['size'] ?>"/></td>
           </tr>
           <tr>
               <th>ADDRESS</th>
               <td><input type="text" name="address" placeholder ="update the address" value= "<?php echo $data['address'] ?>"/></td>
           </tr>
           <tr>
               <th>ZIP CODE</th>
               <td><input type="number" name="zip" placeholder ="add zip code" value= "<?php echo $data['zip'] ?>"/></td>
           </tr>
           <tr>
               <th>CITY</th>
               <td><input type="text" name="city" placeholder ="add city" value= "<?php echo $data['city'] ?>"/></td>
           </tr>
       </table><br>
              <td>
                <input type= "hidden" name= "id" value="<?php echo $data['id'] ?>">
                <button type="submit" id="btnSave" />Save Changes</button></td>
              <td><a href= "admin.php"><button id="btnHome" type="button">Go to Home</button></a></td>
      </form>
</fieldset>
    
</body>
</html>

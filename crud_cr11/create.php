<?php 

 ob_start();
session_start();
if(!isset($_SESSION["user"]) && !isset($_SESSION["admin"])){
  header("Location: indexLogin.php");
}elseif(isset($_SESSION["user"])){
  header("Location: home.php");
}

 ?>

<html>
<head>
   <title>Add an animal</title>
   <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <style type= "text/css">
       fieldset {
          font-size: 1.8em;
          margin: auto;
          margin-top: 50px;
          margin-bottom: 50px;
          width: 50%;
          color: white;
          box-shadow: 4px 4px 18px 4px rgba(163,244,74,0.58);
       }

       table tr th  {
          display: flex;
          justify-content: center;
          align-items: center;
          padding: 15px 0 20px 0;
          background-color: #3F8716;
          border-radius: 5px;
          color: white;
          border: 1px solid white;
       }

       input {
          width: 600px;
          height: 42px;
          border-radius: 8px;
          opacity: 0.7;
          margin: 10px;
          text-align: center;
          font-size: 1.2em;
       }

       button {
          width: 140px;
          height: 50px;
          border-radius: 5px;
       }

       #btnBack {
          background-color: #5E2F22;
          color: white;
          font-size: 0.6em;
       }

       #btnAdd {
          background-color: #a2633e;
          color: white;
          font-size: 0.6em;
       }

       select {
          width: 150px;
          height: 30px;
       }

       body {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          background-color: #b59265;
          font-family: 'Quicksand', sans-serif;
          background-image: url("img/sivonja.jpg");
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
    
   </style>

</head>
<body>

<fieldset>
   <legend>Add a pet</legend>

   <form action="actions/a_create.php" method= "post"><br>
       <table cellspacing= "0" cellpadding="0">
           
           <tr>
               <th>IMAGE</th>
               <td><input type="text" name="image" placeholder="Add image url" /></td>
           </tr>
           <tr>
               <th>NAME</th>
               <td><input type="text" name="name" placeholder="Insert name of the animal" /></td>
           </tr>    
           <tr>
               <th>AGE</th>
               <td><input type="number" name= "age" placeholder="Insert the age of the animal" /></td>
           </tr>
           <tr>
               <th>DESCRIPTION</th>
               <td><input type="text" name="description" placeholder ="Add a short description" /></td>
           </tr>
           <tr>
               <th>HOBBIES</th>
               <td><input type="text" name="hobbies" placeholder ="add some hobbies of the animal" /></td>
           </tr>
           <tr>
               <th>SIZE</th>
               <td><input type="text" name="size" placeholder ="type 'small', 'large' or 'medium'" /></td>
           </tr>
           <tr>
               <th>ADDRESS</th>
               <td><input type="text" name="address" placeholder ="Insert the location of the animal" /></td>
           </tr>
           <tr>
               <th>ZIP CODE</th>
               <td><input type="number" name="zip" placeholder ="Insert zip code" /></td>
           </tr>
           <tr>
               <th>CITY</th>
               <td><input type="text" name="city" placeholder ="Insert city" /></td>
           </tr>
       </table><br> 
          <a href="admin.php"><button id="btnBack" type="button">Back to home</button></a>
          <button id="btnAdd" type ="submit">Add this pet</button>
   </form>

</fieldset>

</body>
</html>
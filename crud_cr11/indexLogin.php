<?php
ob_start();
session_start();
include_once 'actions/db_connect.php';

// it will never let you open index(login) page if session is set
if (isset($_SESSION['user' ])!="" ) {
 header("Location: home.php");
 exit;
}

$error = false;

if( isset($_POST['btn-login']) ) {

  // prevent sql injections/ clear user invalid inputs
 $email = trim($_POST['email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST[ 'pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);
 // prevent sql injections / clear user invalid inputs

 if(empty($email)){
  $error = true;
  $emailError = "Please enter your email address.";
 } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address.";
 }

 if (empty($pass)){
  $error = true;
  $passError = "Please enter your password." ;
 }

 // if there's no error, continue to login
 if (!$error) {
 
  $password = hash( 'sha256', $pass); // password hashing

  $res=mysqli_query($connect, "SELECT * FROM users WHERE userEmail='$email'" );
  $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
  $count = mysqli_num_rows($res); // if uname/pass is correct it returns must be 1 row
 
  if( $count == 1 && $row['userPass' ]==$password ) {
    if($row["status"] == "admin"){
      $_SESSION['admin'] = $row['userId'];
      header( "Location: admin.php");
    }else{
   $_SESSION['user'] = $row['userId'];
   header( "Location: home.php");
   }
  } else {
   $errMSG = "Incorrect Credentials, Try again..." ;
  }
 
 }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">   
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
      body {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Quicksand', sans-serif;
          background-image: url("img/pets2.jpg");
          background-repeat: no-repeat;
          background-position: top;
          background-size: cover;
      }

      form {
          text-align: center;
      }

      input {
          width: 200px;
          height: 30px;
          text-align: center;
          background-color: #f2ceb3;
          border-radius: 5px;
          border: 2px solid #35c646;
      }

      button {
          color: white;
          height: 36px;
          font-weight: bold;
          background-color: #bf6c31;
          border-radius: 5px;
          border: 2px solid #bf6c31;
      }

      h3 {
        color: #442108;
      }
    </style>

</head>
<body>

   <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete= "off">
 
   
            <h1>Log In as an admin or an user...</h1>
            
           
            <?php
              if ( isset($errMSG) ) {
            echo  $errMSG; ?>
             
  <?php
  }
  ?>
           
            <input type="email" name="email"  class="form-control" placeholder= "Please Enter Your Email" value="<?php echo $email; ?>"  maxlength="40" />
       
              <span class="text-danger"><?php echo $emailError; ?></span>
         
            <input type="password" name="pass" class="form-control" placeholder ="Enter Your Password" maxlength="15"/>
       
              <span class="text-danger"><?php echo $passError;?></span>
          
            <button type="submit" name= "btn-login">Log In!</button><br><br>
 
            <a href="register.php"><h3>No account? Please register here.</h3></a>
     
   </form>
</body>
</html>
<?php ob_end_flush(); ?>
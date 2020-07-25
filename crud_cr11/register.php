<?php
include_once 'actions/db_connect.php';

ob_start();
session_start(); // start a new session or continues the previous
if(isset($_SESSION['user'])!="" ){
 header("Location: home.php" ); // redirects to home.php
}
$error = false;
if ( isset($_POST['btn-signup']) ) {
 
 // sanitize user input to prevent sql injection
 $name = trim($_POST['name']);

  //trim - strips whitespace (or other characters) from the beginning and end of a string
  $name = strip_tags($name);

  // strip_tags — strips HTML and PHP tags from a string

  $name = htmlspecialchars($name);
 // htmlspecialchars converts special characters to HTML entities
 $email = trim($_POST[ 'email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST['pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);

  // basic name validation
 if (empty($name)) {
  $error = true ;
  $nameError = "Please enter your full name.";
 } else if (strlen($name) < 3) {
  $error = true;
  $nameError = "Name must have at least 3 characters.";
 } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
  $error = true ;
  $nameError = "Name must contain alphabets and space.";
 }

 //basic email validation
  if (!filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address." ;
 } else {
  // checks whether the email exists or not
  $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
  $result = mysqli_query($connect, $query);
  $count = mysqli_num_rows($result);
  if($count!=0){
   $error = true;
   $emailError = "Provided Email is already in use.";
  }
 }
 // password validation
  if (empty($pass)){
  $error = true;
  $passError = "Please enter password.";
 } else if(strlen($pass) < 6) {
  $error = true;
  $passError = "Password must have atleast 6 characters." ;
 }

 // password hashing for security
$password = hash('sha256' , $pass);


 // if there's no error, continue to signup
 if(!$error ) {
 
  $query = "INSERT INTO users(userName,userEmail,userPass) VALUES('$name','$email','$password')";
  $res = mysqli_query($connect, $query);
 
  if ($res) {
   $errTyp = "success";
   $errMSG = "Successfully registered, you may login now";
   unset($name);
    unset($email);
   unset($pass);
  } else  {
   $errTyp = "danger";
   $errMSG = "Something went wrong, try again later..." ;
  }
 }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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

   <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" >
 
     
            <h1>Sign Up...</h1>
          
         
            <?php
                if ( isset($errMSG) ) {
              ?>
           
           <div  class="alert alert-<?php echo $errTyp ?>" >
              <?php echo $errMSG; ?>
            </div>

<?php
  }
  ?>
         
            <input type ="text"  name="name" class ="form-control" placeholder ="Please Enter Your Name"  maxlength ="50" value = "<?php echo $name ?>"  />
     
               <span class = "text-danger"><?php echo $nameError; ?></span>
         
            <input type = "email" name = "email" class = "form-control" placeholder = "Please Enter Your Email" maxlength = "40" value = "<?php echo $email ?>" />
   
               <span class = "text-danger" ><?php echo $emailError; ?></span>
     
            <input type = "password" name = "pass" class = "form-control" placeholder = "Enter Password" maxlength = "15" />
           
               <span class = "text-danger"><?php echo $passError; ?></span>
     
            <button type = "submit" class = "btn btn-block btn-primary" name = "btn-signup">Sign Up!</button><br><br>
         
            <a href = "indexLogin.php"><h3>Already registered? Please log in here...</h3></a>
   
   </form>
</body>
</html>
<?php  ob_end_flush(); ?>
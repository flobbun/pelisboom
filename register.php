<?php
include 'app/conection.inc.php';
include_once 'app/registerValidator.inc.php';

if(isset($_POST['register'])){
  $validator = new registerValidator(
    $_POST['username'],
    $_POST['email'],
    $_POST['password']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
  
       <!--CSS-->
       <link rel="stylesheet" href="css/login.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
       <!--FONTS-->
       <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@500&family=Lemonada:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="login-div">
        <a href="index.php" id="gobackIcon">
        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-box-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M4.354 11.354a.5.5 0 0 0 0-.708L1.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
          <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0 0 1h9a.5.5 0 0 0 .5-.5z"/>
          <path fill-rule="evenodd" d="M14 13.5a1.5 1.5 0 0 0 1.5-1.5V4A1.5 1.5 0 0 0 14 2.5H7A1.5 1.5 0 0 0 5.5 4v1.5a.5.5 0 0 0 1 0V4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5H7a.5.5 0 0 1-.5-.5v-1.5a.5.5 0 0 0-1 0V12A1.5 1.5 0 0 0 7 13.5h7z"/>
        </svg>
        </a>
          <div class="logo">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRNrKXDgD3AD6Y3s1ffQgLL-AiAZOa1e8c7cQ&usqp=CAU" alt="">
          </div>
          <div class="title">Register</div>
          <div class="sub-title">PelisBoom 💥</div>

          <div class="fields">
            
              <div class="username"><svg fill="#999" viewBox="0 0 20 20"><path class="path1" d="M17.388,4.751H2.613c-0.213,0-0.389,0.175-0.389,0.389v9.72c0,0.216,0.175,0.389,0.389,0.389h14.775c0.214,0,0.389-0.173,0.389-0.389v-9.72C17.776,4.926,17.602,4.751,17.388,4.751 M16.448,5.53L10,11.984L3.552,5.53H16.448zM3.002,6.081l3.921,3.925l-3.921,3.925V6.081z M3.56,14.471l3.914-3.916l2.253,2.253c0.153,0.153,0.395,0.153,0.548,0l2.253-2.253l3.913,3.916H3.56z M16.999,13.931l-3.921-3.925l3.921-3.925V13.931z"></path></svg>

            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
                 <?php
                 if(isset($_POST['register']))
                 {
                  include_once 'elements/validatedregister.inc.php';
                 } else{
                  include_once 'elements/emptyregister.inc.php';
                 }
                 ?>
            </form>

        </div>
      </div>
</body>
</html>
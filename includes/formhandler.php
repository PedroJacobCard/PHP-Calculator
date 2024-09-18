<?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = htmlspecialchars($_POST["firstname"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $favouritePet = htmlspecialchars($_POST["favouritepet"]);
    
    if (empty($firstName)) {
      header("Location: ../index.php");
      exit();
    }

    echo "<h1>This are the data submited:</h1>";
    echo $firstName;
    echo "</br>";
    echo $lastName;
    echo "</br>";
    echo $favouritePet;
  } else {
    header("Location: ../index.php");
  }
?>
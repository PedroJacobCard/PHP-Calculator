<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

  <!--
  <main class="w-100">
    <form action="includes/formhandler.php" method="post" class="w-100 p-5 d-flex flex-column gap-1">
      <label for="firstname">First Name:</label>
      <input required type="text" name="firstname" placeholder="Your first name" class="form-control"/>

      <label for="lastname">Last Name:</label>
      <input required type="text" name="lastname" placeholder="Your last name" class="form-control"/>

      <label for="favouritepet">Favourite Pet:</label>
      <select class="form-select mb-2" aria-label="Default select example" id="favouritepet" name="favouritepet">
        <option value="none">None</option>
        <option value="cat">Cat</option>
        <option value="dog">Dog</option>
        <option value="bird">Bird</option>
      </select>

      <button class="w-50 m-auto rounded-2 border-0 " type="submit">Submit</button>
    </form>
  </main>
  -->
  <h1 class="bolder-100 text-center mt-3">🐘 PHP Calculator 🧮</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="w-100 p-5 d-flex flex-column gap-1">
      <input type="number" name="num01" placeholder="Number 1" class="form-control mb-2"/>
    
      <select class="form-select mb-2" aria-label="Default select example" id="oparator" name="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">x</option>
        <option value="divide">%</option>
      </select>
    
      <input type="number" name="num02" placeholder="Number 2" class="form-control mb-2"/>

      <button class="w-50 m-auto rounded-2 border-0 " type="submit">Calculate</button>
    </form>

  <?php

    if ($_SERVER["REQUEST_METHOD"] != "POST") {
      echo "<p class='w-100 px-5 text-danger'>The method wasn't POST</p>";
      exit();
    }

    $firstNum = htmlspecialchars($_POST["num01"]);
    $secondNum = htmlspecialchars($_POST["num02"]);
    $op = htmlspecialchars($_POST["operator"]);

    if (empty($firstNum) || empty($secondNum) || empty($op)) {
      echo "<p class='w-100 px-5 text-danger'>Some data wasn't passed in the submition. Please make sure the fields are filled.</p>";
      exit();
    }

    switch($op) {
      case "add": echo "<h2 class='w-100 px-5 py-1'>Operation: $firstNum + $secondNum</h2></br>" . "<h3 class='w-100 px-5'>" . $firstNum + $secondNum . "</h3>";
      break;
      case "subtract": echo "<h2 class='w-100 px-5 py-1'>Operation: $firstNum - $secondNum</h2></br>" . "<h3 class='w-100 px-5'>" . $firstNum - $secondNum . "</h3>";
      break;
      case "multiply": echo "<h2 class='w-100 px-5 py-1'>Operation: $firstNum x $secondNum</h2></br>" . "<h3 class='w-100 px-5'>" . $firstNum * $secondNum . "</h3>";
      break;
      case "divide": echo "<h2 class='w-100 px-5 py-1'>Operation: $firstNum % $secondNum</h2></br>" . "<h3 class='w-100 px-5'>" . $firstNum / $secondNum . "</h3>";
      break;
      default: echo "No operation provided.";
      break;
    }
  ?>

</body>
</html>
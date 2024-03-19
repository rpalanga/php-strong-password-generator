<?php

include './functions.php';

session_start();

$lowerPass = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$upperPass = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
$numberPass = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
$specialPass = ['!', '"', '#', '$', '%', '&', '/', '(', ')', '=', '?', '^'];

$passwordLength=8;
$selectedChars = [];

if (isset($_GET['lowerPass']) || isset($_GET['upperPass']) || isset($_GET['numberPass']) || isset($_GET['specialPass'])) {
    $selectedChars = [];
    if (isset($_GET['lowerPass'])) {
      $selectedChars = array_merge($selectedChars, $lowerPass);
    }
    if (isset($_GET['upperPass'])) {
      $selectedChars = array_merge($selectedChars, $upperPass);
    }
    if (isset($_GET['numberPass'])) {
      $selectedChars = array_merge($selectedChars, $numberPass);
    }
    if (isset($_GET['specialPass'])) {
      $selectedChars = array_merge($selectedChars, $specialPass);
    }
};



if(isset($_GET['password'])){
    $findPass =  MixPassword($selectedChars, $passwordLength);

    $_SESSION['showPass'] = $findPass;
    header('Location : ./results.php');
    
}

$password = MixPassword($selectedChars, $passwordLength);




?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Password-Generator</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container d-flex flex-column justify-content-center align-items-start ">

        <h1 class="text-center">Genera la tua password</h1>

        <form  method="GET"> 
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="upperPass" name="upperPass" value="true">
            <label class="form-check-label" for="upperPass"> Lettere Maiuscole </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="lowerPass" name="lowerPass" value="true">
            <label class="form-check-label" for="lowerPass"> Lettere Minuscole </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="numberPass" name="numberPass" value="true">
            <label class="form-check-label" for="numberPass"> Numeri </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="specialPass" name="specialPass" value="true">
            <label class="form-check-label" for="specialPass"> Caratteri Speciali </label>
        </div>
        <br>
        <button type="submit" class="btn btn-danger mb-3">Genera Password</button>
        
         


        </form>

        <?php
            echo "<p class='alert alert-success'>La password che hai generato è: <strong>$password</strong></p>";
        ?>
       


    </div>









    <!-- bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>



<?php

$lowerPass = ['a b c d e f g h i j k l m n o p q r s t u v w x y z'];
$upperPass = ['ABCDEFGHIJKLMNOPQRSTUVWXYZ'];
$numberPass = ['012345678910'];
$specialPass = ['!"£$%&/()=?^']



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

        <form action="GET">
        
            <input type="checkbox"  name="upperPass" >
            <label name="parking"> Password di Lettere Maiuscole </label><br>
            
            
        </form>

        <form action="GET">
        
            <input type="checkbox"  name="lowerPass" >
            <label name="parking"> Password di Lettere Minuscole</label><br>
            
            
        </form>

        <form action="GET">
        
            <input type="checkbox"  name="numberPass" >
            <label name="parking"> Password di Numeri</label><br>
            
            
        </form>

        <form action="GET">
        
            <input type="checkbox"  name="specialPass" >
            <label name="parking"> Password di Caretteri speciali</label><br>
            
        </form>
        
        <button type="submit" class="btn btn-danger mb-3">Genera Password</button>
        <input type="text" name="" id=""  minlength="4" maxlength="8" >
       


    </div>









    <!-- bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>


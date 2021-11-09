<?php
session_start();
session_unset();
?>
<!DOCTYPE html>
<html>
<head>
    <title>gekozen</title>
</head>
<body>
    <h1>Galgje</h1>
    <h3>Je hebt gekozen om zelf een woord in te voeren</h3>
    <form method="POST">
        <input type="text" name="woord" id= "woord"> 
        <input type="submit" value="speel met dit woord">
    </form>
    <?php
    if (isset($_POST['woord'])) {
        $_SESSION["word"] = str_split($_POST['woord']);
        header('location: /game.php');
    }
    ?>
</body>
</html>

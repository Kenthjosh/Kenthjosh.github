<?php 
    session_start();

    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header('Location: ../index.html');
        exit;
    }

    if(isset($_POST['logout'])){

        $_SESSION = array();

        session_destroy();

        header('Location: ../index.html');
        exit;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="../main_styles.css">
</head>
<?php include '../main.html';?>
</html>


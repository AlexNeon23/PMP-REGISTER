<?php session_start();


if (!$_SESSION['initial']) {
	header('location : login.php');
}else {
    require 'session-validation.php';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/cube2.png">
    <link rel="stylesheet" href="../assets/format-styles.css">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>ACCESS</title>
</head>
<body>
    <div class="top_page_div">
        <a href="../index.html"><img src="../assets/software logo white.png" alt="Software Maintenance" height="80px"></a>
    </div>

   


    <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="max_format_container" name="formatform">
        <h1 class="text_container"> FORMATO DE PM </h1>
        <div>

        </div>
        <div class="input_format_container">
            <P class="formatext">Revision de temperatura del procesador: </P>
            <input type="number" name="tempformat" required minlength="2" maxlength="2" size="10" class="temp_format" placeholder="C°/F°">
        </div>
    </form>


</body>
<footer class="bottom_page_div">
    <hr size="2" color="#4b4b4b" style="box-shadow: 0px -1px 0px .1px rgba(0,0,0,0.75);">
    <p>Copyright © KEMET a YAGEO company 2022 by Eduardo Benavides</p>
</footer>
</html>

<?php session_start();
    //if (isset($_SESSION['initial'])) {
    //    Header('location : index.php');
    //    echo $_SESSION['initial'];
    //}


require 'validation.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/cube2.png">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>ACCESS</title>
</head>
<body>
    <div class="top_page_div">
        <a href="../index.html"><img src="../assets/software logo white.png" alt="Software Maintenance" height="80px"></a>
    </div>

   


    <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="max_center_container" name="reqform">
        <h1 class="text_container"> 🔒 -LOGIN- 📃 </h1>
        <div class="input_login_container">
      
        <input type="number" name="employeenum" required minlength="8" maxlength="8" size="20" class="input_login" placeholder="👨‍🔧Employee number:">
        <input class="btn_login" type="submit" onclick="reqform.submit()" name="Continue_btn" value="Continue ▶">
        </div>
        <?php if (!empty($errors)): ?>
        <div style="background-color: darkred; border-radius: 10px; margin: 2em; box-shadow: 0px 4px 8px 1px rgba(0,0,0,0.75);">
            <ul style="color: aliceblue; font-size: 20px; font-family: 'share tech mono',
                        monospace; margin: 1em; align-items: center; padding:10px;
                        justify-content: center; display: flex; text-align:center; list-style: none;">
            <?php echo $errors; ?>
            </ul>
        </div>
        <?php endif; ?>
    </form>
        
    <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mid_center_container" name="reqform">
        <h1 class="text_container"> 🔒 -LOGIN- 📃 </h1>
        <div class="input_login_container">
        <input type="number" name="employeenum" required minlength="8" maxlength="8" size="20" class="input_login" placeholder="Employee number:">
        <input class="btn_login" type="submit" onclick="reqform.submit()" name="Continue_btn" value="Continue ▶">
        </div>
        <?php if (!empty($errors)): ?>
        <div style="background-color: darkred; border-radius: 10px; margin: 2em; box-shadow: 0px 4px 8px 1px rgba(0,0,0,0.75);">
            <ul style="color: aliceblue; font-size: 20px; font-family: 'share tech mono',
                        monospace; margin: 1em; align-items: center; padding:10px;
                        justify-content: center; display: flex; text-align:center; list-style: none;">
            <?php echo $errors; ?>
            </ul>
        </div>
        <?php endif; ?>
    </form>

    <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="min_center_container" name="reqform">
        <h1 class="text_container"> 🔒 -LOGIN- 📃 </h1>
        <div class="input_login_container">
        <input type="number" name="employeenum" required minlength="8" maxlength="8" size="10" class="input_login" placeholder="Employee number:">
        <input class="btn_login" type="submit" onclick="reqform.submit()" name="Continue_btn" value="Continue ▶">
        </div>

        <?php if (!empty($errors)): ?>
        <div style="background-color: darkred; border-radius: 10px; margin: -4em 3em 1em; box-shadow: 0px 4px 8px 1px rgba(0,0,0,0.75);">
            <ul style="color: aliceblue; font-size: 15px; font-family: 'share tech mono',
                        monospace; margin: 1em; align-items: center;
                        justify-content: center; display: flex; text-align:center; padding:10px; list-style: none;">
            <?php echo $errors; ?>
            </ul>
        </div>
        <br>
        <?php endif; ?>
    </form>

</body>
<footer class="bottom_page_div">
    <hr size="2" color="#4b4b4b" style="box-shadow: 0px -1px 0px .1px rgba(0,0,0,0.75);">
    <p>Copyright © KEMET a YAGEO company 2022 by Eduardo Benavides</p>
</footer>
</html>


<!-- <?php
// require_once  'vendor/autoload.php';
?> -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <title>Wetransfer</title>
</head>

<body>

    <script src="wetransfer.php"></script>

    <div class="container">
        <div id="logo">
            <img src="images/logo.png" alt="logo">
        </div>
    </div>

    <div class="container2">
        <div id="add">
            <label class="newbtn">
                <img src="images/add.png">
                <input type="file" id="inpFile" multiple style="display: none;">
            </label>
        </div>

        <div id="mail">
            <input type="email" name="email-to" placeholder="Email to" id="email-to">
        </div>

        <div id="sub">
            <form method="post" action="wetransfer.php">
                <label class="newbtn">
                    <img src="images/sub.png">
                    <input type="submit" name='send_mail' id="submit_btn" style="display: none;" />
                </label>
            </form>
        </div>
    </div>

    <div class="container">
        <canvas id="myCanvas" width="500" height="300"></canvas>
    </div>
    <script src="main.js"></script>

</body>
<!-- faire un fetch pour que js récupére les infos -->

</html>
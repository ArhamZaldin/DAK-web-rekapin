<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/style.css">
    <!-- <link rel="stylesheet" href="../../Assets/css/style.css"> -->
    <title> <?= $title; ?> </title>
</head>
<body <?= C_Main::$today_date; ?>>
    <?php    
        // NAV START
        include_once "Views/layouts/header.php";
        // include_once "header.php";
        // NAV END

        // CONTENT START
        include_once "Views/".$master.".php";
        // include_once "../maintenance.php";
        // CONTENT END

        // FOOTER START
        include_once "Views/layouts/footer.php";
        // include_once "footer.php";
        // FOOTER END
    ?>
    <script src="Assets/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e7b4fcd040.js" crossorigin="anonymous"></script>
    <script src="Assets/js/script.js"></script>
    <!-- <script src="../../Assets/js/script.js"></script> -->
</body>
</html>
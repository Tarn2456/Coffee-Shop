<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/events.css">
    <link rel="stylesheet" href="style/reserve.css">
    <link rel="stylesheet" href="style/reserved-nav.css">
    <link rel="stylesheet" href="style/reserved-nav-li.css">




    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/style.css">
    <!-- date picker -->

    <link rel="stylesheet" href="jquery-ui-1.13.0/jquery-ui.min.css">
    <script src="jquery-ui-1.13.0/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.13.0/jquery-ui.min.js"></script>
    <!-- jquery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- fontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <script src="script/filterPlugin.js"></script>
</head>

<body>
    <script src="script/global.js">

    </script>
    <script src="script/menuItems.js"></script>
    <?php include 'pages/header.php'; ?>
    <div class="wrapper">
        <main class="full">
            <?php include 'pages/video.html'; ?>
        </main>
        <?php include 'pages/footer.php'; ?>
    </div>
    <script src="script/navigation.js"></script>
    <script src="script/mobile-nav.js"></script>
    <script src="script/reserved-nav.js"></script>
    <script src="script/reserved-li-script.js"></script>
    <script src="script/loadReserved.js"></script>
    <script src=" script/events.js">
    </script>
    <script src="script/searchForm.js"></script>

    <script src="script/touch-screen.js"></script>

</body>

</html>
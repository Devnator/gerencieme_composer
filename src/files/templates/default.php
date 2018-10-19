<?php require_once __DIR__ . '/../config/loader.php'; ?>

<?php
if (file_exists('control.php')) {
    include 'control.php';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php include 'seo.php'; ?>

    <link rel="icon" type="image/png" href="favicon.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

    <?php
    if (file_exists('styles.php')) {
        include 'styles.php';
    }
    ?>
</head>
<body>

<?php include 'content.php'; ?>

<script src="main.js"></script>

<?php
if (file_exists('scripts.php')) {
    include 'scripts.php';
}
?>

</body>
</html>
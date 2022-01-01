<!doctype html>
<html lang="en">
<head>
    <?php include_once('shared/meta.php') ?>
    <title>PHP info</title>
</head>
<body>
<?php include_once('shared/nav.php') ?>
<main>
    <?php
    $server = 'php_project.test';
    if ($_SERVER['SERVER_NAME'] == $server) {
        echo phpinfo();
    } else {
        echo "<h1>Server info</h1>";
        echo "<p>Info only visible on <b>$server</b></p>";
    }
    ?>
</main>
<?php include_once('shared/footer.php') ?>
</body>
</html>

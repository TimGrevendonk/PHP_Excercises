<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Static methods/properties: class Drawer</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Static methods/properties: class Drawer</h1>
    <?php
    include_once '../classes/Drawer.php'; // include the class
    use classes\Drawer;  // use the namespace

    // Draw some objects
    Drawer::draw();
    echo "<hr>\n";
    Drawer::circle(150, 'lime')::draw()::printInfo();
    echo "<hr>\n";
    Drawer::square(null, 'gold')::printInfo()::draw();
    echo "<hr>\n";
    Drawer::square()::draw()::printInfo();
    echo "<hr>\n";
    Drawer::circle()::draw();
    ?>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

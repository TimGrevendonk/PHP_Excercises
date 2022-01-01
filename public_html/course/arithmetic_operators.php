<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Arithmetic operators</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Arithmetic operators</h1>
    <div class="margin-3">
        <?php
        $x = 10;
        $y = 3;
        echo "<p> \$x = $x </p>\n";
        echo "<p> \$y = $y </p>\n";
        ?>
    </div>

    <div class="margin-3">
        <?php
        echo "<p> \$x + \$y = $x + $y = " . ($x + $y) . "</p>\n";
        echo "<p> \$x - \$y = $x - $y = " . ($x - $y) . "</p>\n";
        echo "<p> \$x * \$y = $x * $y = " . ($x * $y) . "</p>\n";
        echo "<p> \$x / \$y = $x / $y = " . ($x / $y) . "</p>\n";
        echo "<p> \$x % \$y = $x % $y = " . ($x % $y) . "</p>\n";
        echo "<p> \$x ** \$y = $x ** $y = " . ($x ** $y) . "</p>\n";
        ?>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

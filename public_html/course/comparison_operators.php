<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Comparison operators</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Comparison operators</h1>
    <div class="margin-3">
        <?php
        $x1 = 10;
        $x2 = '10';
        $y = 5;
        echo "<p> \$x1 = $x1 </p>\n";
        echo "<p> \$x2 = '$x2' </p>\n";
        echo "<p> \$y = $y </p>\n";
        ?>
    </div>

    <div class="margin-3">
        <?php
        echo "<p> (\$x1 == \$x2) = ($x1 == '$x2') = " . ($x1 == $x2) . "</p>\n";
        echo "<p> (\$x1 === \$x2) = ($x1 === '$x2') = " . ($x1 === $x2) . "</p>\n";
        echo "<p> (\$x1 != \$y) = ($x1 != $y) = " . ($x1 != $y) . "</p>\n";
        echo "<p> (\$x2 <> \$y) = ('$x2' <> $y) = " . ($x2 <> $y) . "</p>\n";
        echo "<p> (\$x1 < \$y) = ($x1 < $y) = " . ($x1 < $y) . "</p>\n";
        echo "<p> (\$x1 > \$y) = ($x1 > $y) = " . ($x1 > $y) . "</p>\n";
        echo "<p> (\$x2 > \$y) = ('$x2' > $y) = " . ($x2 > $y) . "</p>\n";
        ?>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

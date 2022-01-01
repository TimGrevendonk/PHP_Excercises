<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Logical operators</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Logical operators</h1>
    <div class="margin-3">
        <?php
        $x = 6;
        $y = 4;
        echo "<p> \$x = $x </p>\n";
        echo "<p> \$y = $y </p>\n";
        ?>
    </div>

    <div class="margin-3">
        <?php
        echo "<p> (\$x < 8 and \$y > 3) = ($x < 8 and $y > 3) = " . ($x < 8 and $y > 3) . "</p>\n";
        echo "<p> (\$x < 8 && \$y > 6) = ($x < 8 && $y > 6) = " . ($x < 8 && $y > 6) . "</p>\n";
        echo "<p> (\$x < 8 or \$y > 3) = ($x < 8 or $y > 3) = " . ($x < 8 or $y > 3) . "</p>\n";
        echo "<p> (\$x < 8 || \$y > 6) = ($x < 8 || $y > 6) = " . ($x < 8 || $y > 6) . "</p>\n";
        echo "<p> (\$x < 8 xor \$y > 3) = ($x < 8 xor $y > 3) = " . ($x < 8 xor $y > 3) . "</p>\n";
        echo "<p> (\$x < 8 xor \$y > 6) = ($x < 8 xor $y > 6) = " . ($x < 8 xor $y > 6) . "</p>\n";
        echo "<p> !(\$x == \$y) = !($x == $y) = " . !($x == $y) . "</p>\n";
        ?>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

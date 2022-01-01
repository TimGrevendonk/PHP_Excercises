<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Assignment operators</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Assignment operators</h1>
    <div class="margin-3">
        <?php
        $x = 10;
        $y = 2;
        $z = 3;
        echo "<p> \$x = $x </p>\n";
        echo "<p> \$y = $y </p>\n";
        echo "<p> \$z = $z </p>\n";
        ?>
    </div>
    <div class="margin-3">
        <?php
        echo "<blockquote>Execute the statement <code>\$x += \$y; <span class='text-lightgray'>// \$x = \$x + \$y = $x + $y</span></code></blockquote>\n";
        $x += $y;
        echo "<p> \$x = $x </p>\n";

        echo "<blockquote>Execute the statement <code>\$x -= \$z; <span class='text-lightgray'>// \$x = \$x - \$z = $x - $z</span></code></blockquote>\n";
        $x -= $z;
        echo "<p> \$x = $x  </p>\n";

        echo "<blockquote>Execute the statement <code>\$x *= \$z; <span class='text-lightgray'>// \$x = \$x * \$z = $x * $z</span></code></blockquote>\n";
        $x *= $z;
        echo "<p> \$x = $x </p>\n";

        echo "<blockquote>Execute the statement <code>\$x /= \$z; <span class='text-lightgray'>// \$x = \$x / \$z = $x / $z</span></code></blockquote>\n";
        $x /= $z;
        echo "<p> \$x = $x </p>\n";

        echo "<blockquote>Execute the statement <code>\$x %= \$y; <span class='text-lightgray'>// \$x = \$x % \$y = $x % $y</span></code></blockquote>\n";
        $x %= $y;
        echo "<p> \$x = $x </p>\n";

        echo "<blockquote>Execute the statement <code>\$y++; <span class='text-lightgray'>// \$y = \$y + 1 = $y + 1</span></code></blockquote>\n";
        $y++;
        echo "<p> \$y = $y </p>\n";

        echo "<blockquote>Execute the statement <code>\$z--; <span class='text-lightgray'>// \$z = \$z - 1 = $z - 1</span></code></blockquote>\n";
        $z--;
        echo "<p> \$z = $z </p>\n";
        ?>
    </div>
    <hr>
    <div class="margin-3">
        <?php
        $name = 'John';
        $surname = 'Doe';
        echo "<p> \$name = '$name' </p>\n";
        echo "<p> \$surname = '$surname' </p>\n";
        ?>
    </div>
    <div class="margin-3">
        <?php
        echo "<blockquote>Execute the statement <code>\$name .= \$surname; <span class='text-lightgray'>// \$name = \$name . \$surname = '$name' . '$surname'</span></code></blockquote>\n";
        $name .= $surname;
        echo "<p> \$name = '$name' </p>\n";
        ?>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

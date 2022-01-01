<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Iteration</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Iteration</h1>
    <div class="margin-3">
        <?php
        $base = 7;
        $depthMultiplicationTable = 10;
        echo "<p>\$base = $base </p>\n";
        echo "<p>\$depthMultiplicationTable = $depthMultiplicationTable </p>\n"
        ?>
    </div>

    <div class="row">
        <div class="col-4">
            <h2>for</h2>
            <div class="margin-3">
                <?php
//                for ($i = 1; $i <= 10; $i++) {
//                                    echo "<p>does this work ". $i . "</p>";
//                                }
                for ($i = 1; $i <= $depthMultiplicationTable; $i++) {
                    echo "<p><code>$i x $base = " . ($i * $base) . "</code></p>\n";
                }
                ?>
            </div>
        </div>
        <div class="col-4">
            <h2>while</h2>
            <div class="margin-3">
                <?php
                $j = 1;
                while ($j <= $depthMultiplicationTable) {
                    echo "<p><code>$j x $base = " . ($j * $base) . "</code></p>\n";
                    $j++;
                }
                ?>
            </div>
        </div>
        <div class="col-4">
            <h2>do while</h2>
            <div class="margin-3">
                <?php
                $k = 1;
                do {
                    echo "<p><code>$k x $base = " . ($k * $base) . "</code></p>\n";
                    $k++;
                } while ($k <= $depthMultiplicationTable);
                ?>
            </div>
        </div>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

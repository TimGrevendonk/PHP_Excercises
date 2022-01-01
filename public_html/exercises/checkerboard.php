<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Checkerboard</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Checkerboard</h1>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Draw a checkerboard in <b>SVG format</b></li>
            <li>Work with variables such that you can vary the size of a checkerboard field, the number of fields
                per row/column and the (two) colors used
            </li>
        </ul>
    </blockquote>

    <?php
    $checkerSize = 30;
    $rows = 9;
    $columns = 7;
    $totalWidth = $checkerSize * $columns;
    $totalHeight = $checkerSize * $rows;
    $horizontal = 0;
    $vertical = 0;
    echo "<svg width='$totalWidth' height='$totalHeight' fill='white' stroke='black'>";
    for ($i = 0; $i <= $rows; $i++) {
        for ($j = 0; $j <= $columns; $j++) {
            if (($i + $j) % 2 == 0) {
                echo "<rect width='$checkerSize' height='$checkerSize' x='$horizontal' y='$vertical' fill='white'/>";
            } else {
                echo "<rect width='$checkerSize' height='$checkerSize' x='$horizontal' y='$vertical' fill='black'/>";
            }
            $horizontal = $j * $checkerSize;
        }
        $vertical = $i * $checkerSize;
    }
    echo "</svg>";
    ?>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

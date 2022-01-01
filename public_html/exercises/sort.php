<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Sort check</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Sort check</h1>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Write a function <code>isSorted($numbers)</code> that <b>checks whether</b> the <b>array</b> <code>$numbers</code>
                <b>is sorted</b> (<code>return true;</code>) or not (<code>return false;</code>)
            </li>
            <li>Make a <b>(two-dimensional) array</b> <code>$rows</code>, each element of which is an array of
                numbers
                <ul>
                    <li><code>$rows[0] = [3, 7, 10, 19, 25];</code></li>
                    <li><code>$rows[1] = [3, 7, 30, 19, 25];</code></li>
                    <li><code>$rows[2] = [3, 7, 10, 19, 17];</code></li>
                </ul>
            </li>
            <li>Call the function <code>isSorted()</code> on these number arrays, and give some feedback to the user
                in the following form
                <ul>
                    <li>3, 7, 10, 19, 25 => <b>sorted</b></li>
                    <li>3, 7, 30, 19, 25 => <b>NOT sorted</b></li>
                    <li>3, 7, 10, 19, 17 => <b>NOT sorted</b></li>
                </ul>
            </li>
        </ul>
    </blockquote>
    <blockquote class="bq-info-info-circle">
        <h3>Tip</h3>
        Use the PHP function <code>implode()</code> to convert an array (of numbers) into a string (with the numbers
        separated by commas)
    </blockquote>
    <?php
        $rows1 = [3, 7, 10, 19, 25];
        $rows2 = [3, 7, 30, 19, 25];
        $rows3 = [3, 7, 10, 19, 17];

        function isSorted($numbers) {
            $sorted = $numbers;
            sort($sorted);
            if (implode($numbers) == implode($sorted)) {
                return "sorted";
            } else {
                return "NOT sorted";
            }
        }

        function imploded($array)
        {
            return implode(",", $array);
        }

        echo "<p>" . imploded($rows1) . " => <b>" . isSorted($rows1) . "</b></p>";
        echo "<p>" . imploded($rows2) . " => <b>" . isSorted($rows2) . "</b></p>";
        echo "<p>" . imploded($rows3) . " => <b>" . isSorted($rows3) . "</b></p>";
    ?>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Smallest number</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Smallest number</h1>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Create three variables with values 542, 487 and 145</li>
            <li>Determine (and show) the <b>smallest of</b> these <b>three variables</b></li>
            <li>Change the value of the variables to check your solution</li>
        </ul>
    </blockquote>
    <?php
        $value1 = 542;
        $value2 = 487;
        $value3 = 145;
        $smallest = $value1;
        if ($value2 < $value1 && $value2 < $value3) {
            $smallest = $value2;
        }elseif ($value3 < $value1) {
            $smallest = $value3;
        }
        echo "out of the numbers $value1 $value2 and $value3, $smallest is the lowest"
    ?>


</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/shared/meta.php'); ?>
    <title>User-defined functions</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<!--    --><?php //include_once 'my_functions.php' ?>
<main>
    <h1>User-defined functions</h1>

    <?php
    function writeMessage()
    {
        echo "<p> We hope you like this PHP course! </p>\n";
    }

    function writePersonalMessage($name)
    {
        echo "<p> Dear $name, we hope you like this PHP course! </p>\n";
    }

    function writePersonalMessageWithDefault($name = 'Mr./Mrs.')
    {
        echo "<p> Dear $name, we hope you like this PHP course! </p>\n";
    }

    function subtractReduction20($price)
    {
        $price *= 0.8;
    }

    function subtractReduction30(&$price)
    {
        $price *= 0.7;
    }

    function average($number1, $number2)
    {
        return ($number1 + $number2) / 2;
    }

    ?>

    <div class="margin-3">
        <?php
        writeMessage();
        writePersonalMessage('John');
        writePersonalMessageWithDefault('Jane');
        writePersonalMessageWithDefault();


        $price = 1000;
        subtractReduction20($price);
        echo "<p> Price with 20% reduction = " . $price . "</p>\n";

        $price = 1000;
        subtractReduction30($price);
        echo "<p> Price with 30% reduction = " . $price . "</p>\n";

        echo "<p> Average of 10 and 100 = " . average(10, 100) . "</p>\n";
        ?>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

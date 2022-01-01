<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Method chaining: class Number</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Method chaining: class Number</h1>
    <div class="margin-3">
        <?php
        include_once '../classes/Number.php'; // include the class
        use classes\Number;  // use the namespace

        echo "<blockquote>Execute the statements <code>\$number = new Number(10);</code> and <code>\$number->printInfo();</code></blockquote>\n";
        $number = new Number(10);
        $number->printInfo();

        echo "<blockquote>Execute the statement <code>\$number->add(90)->multiply(3)->printInfo();</code></blockquote>\n";
        $number->add(90)->multiply(3)->printInfo();

        echo "<blockquote>Execute the statement <code>\$number->printInfo()->multiply(0.1)->printInfo()->add(5)->printInfo();</code></blockquote>\n";
        $number->printInfo()->multiply(0.1)->printInfo()->add(5)->printInfo();
        ?>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

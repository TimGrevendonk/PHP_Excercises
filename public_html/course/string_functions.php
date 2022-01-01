<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>String functions</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>String functions</h1>

    <div class="margin-3">
        <?php
        $testString = 'this is a random string to illustrate PHP string functions';

        echo "<p> \$testString = '$testString' </p>\n";
        echo "<p> Length of \$testString = " . strlen($testString) . "</p>\n";
        echo "<p> Position (first occurrence!) of 'is' in \$testString = " . strpos($testString, 'is') . "</p>\n";

        echo "<blockquote>Execute the statement <code>\$testString = ucfirst(\$testString);</code></blockquote>\n";
        $testString = ucfirst($testString);
        echo "<p> \$testString = '$testString' </p>\n";

        echo "<blockquote>Execute the statement <code>\$subString = substr(\$testString, strpos(\$testString, 'P'), 3);</code></blockquote>\n";
        $subString = substr($testString, strpos($testString, 'P'), 3);
        echo "<p> \$subString = '$subString' </p>\n";

        echo "<blockquote>Execute the statement <code>\$testString = str_replace('PHP', 'some', \$testString); </code></blockquote>\n";
        $testString = str_replace('PHP', 'some', $testString);
        echo "<p> \$testString = '$testString' </p>\n";

        echo "<blockquote>Execute the statement <code>\$words = explode(' ', \$testString); </code></blockquote>\n";
        $words = explode(' ', $testString);
        echo "<p> \$words = </p>\n";
        print_r($words);
        ?>
    </div>
    <hr>
    <div class="margin-3">
        <?php
        $percentages = [64, 67.4598, 72.25, 76.9];
        ?>
        <p>Numbers with 2 decimal digits and , as decimal point:</p>
        <ul>
            <?php
            foreach ($percentages as $percentage)
                echo "<li>" . number_format($percentage, 2, ',', '.') . "</li>\n";
            ?>
        </ul>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

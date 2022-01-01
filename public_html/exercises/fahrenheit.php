<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Celsius to Fahrenheit</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Celsius to Fahrenheit</h1>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Create a variable <code>$celsius</code> with value 25</li>
            <li>Use the formula <b>Fahrenheit = ((9/5) * Celsius) + 32</b> to calculate the corresponding
                temperature in Fahrenheit
            <li>Show the result</li>
            <li>Change the value of the variable <code>$celsius</code> to see some other temperature conversions
            </li>
        </ul>
    </blockquote>
    <?php
        $celsius = 31;
        $Fahrenheit = ((9/5) * $celsius) + 32;
        echo <<<degrees
            <p>$celsius degrees celcius is $Fahrenheit degrees Fahrenheith (with heredoc) </p>
        degrees;
        echo "<p>$celsius celcius is $Fahrenheit fahrenheith (with double quotes) \n</p>";
        echo '<p>' . $celsius . ' is ' . $Fahrenheit . ' in fahrenheith. (with concatenation)' . '</p>';
        echo '<p>' . $celsius . ' is $celsius ,' . $Fahrenheit . ' is $Fahrenheit (concatenation can show the variable name)' . '</p>';
    ?>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

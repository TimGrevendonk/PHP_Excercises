<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Calculation</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Calculation</h1>
    <?php
    $operators = ["add" => "+", "subtract" => "-", "multiply" => "*", "divide" => "/"];
    $number1 = '';
    $number2 = '';

    ?>

    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
        <p>
            <label for="number1">Number 1: </label>
            <input type="number" id="number1" required name="number1" step="any"
                   value="<?= $_POST['number1'] ?? ""; ?>">
        </p>

        <p>
            <label for="number2">Number 2: </label>
            <input type="number" id="number2" required name="number2" step="any"
                   value="<?= $_POST['number2'] ?? ""; ?>">
        </p>

        <p>
            <?php
            foreach ($operators as $key => $value) {
                echo "<button type='submit' class ='btn-primary' name='button' value='$key'>$key</button> ";
            }
            ?>
        </p>
    </form>
    <?php
    if ($_POST) {
        echo "<div class='box-info'><b>{$_POST['number1']} {$operators[$_POST['button']]} {$_POST['number2']} = ";
        // this works weired, how should i do it?
        if ($operators[$_POST['button']] == "+") echo ((int)$_POST['number1'] + (int)$_POST['number2']);
        if ($operators[$_POST['button']] == "-") echo ((int)$_POST['number1'] - (int)$_POST['number2']);
        if ($operators[$_POST['button']] == "*") echo ((int)$_POST['number1'] * (int)$_POST['number2']);
        if ($operators[$_POST['button']] == "/") echo ((int)$_POST['number1'] / (int)$_POST['number2']);
        echo "</b></div>";
    }
    ?>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Enter <b>two numbers</b></li>
            <li>Select an <b>operation</b> via the buttons</li>
            <li>Show the result in a <code>div</code> tag with class <code>box-info</code></li>
        </ul>
    </blockquote>
    <blockquote class="bq-info-info-circle">
        <h3>Tips</h3>
        <ul>
            <li>By adding the attribute <code>step="any"</code> to the input fields, also floats are allowed</li>
            <li>By giving the buttons the same name (<code>'button'</code>) and different values, we can detect
                which button is clicked on by using <code>$_GET['button']</code> or <code>$_POST['button']</code>
            </li>
        </ul>
    </blockquote>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

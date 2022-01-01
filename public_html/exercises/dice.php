<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Roll the dice</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Roll the dice</h1>
    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
        <button class="btn-primary-dice" type="submit">Roll 3 dices</button>
    </form>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Click on the button to generate <b>three random numbers</b> (1, 2, 3, 4, 5 or 6)</li>
            <li>Calculate and show the <b>sum</b> of all dices</li>
            <li>Show the <b>images</b> (<i>assets/dice/dice-n.png</i>) of the generated dices</li>
        </ul>
    </blockquote>
    <blockquote class="bq-info-info-circle">
        <h3>Tip</h3>
        <p>When the page is loaded, the 3 dices are rolled automatically. The button (on the form) just serves as a
            way to "reload" the page via a GET or POST request to the same page. </p>
    </blockquote>
    <?php
    $number1 = mt_rand(1, 6);
    $number2 = mt_rand(1, 6);
    $number3 = mt_rand(1, 6);
    $total = $number1+$number2+$number3;
    echo "<p>you rolled: $number1 + $number2 + $number3 = $total</p>";
    echo "<p>";
    echo "<img src='../assets/dice/dice-$number1.png' alt='dice-1' width='100' height='100' title='dice-1' style='cursor: zoom-in;'>";
    echo "<img src='../assets/dice/dice-$number2.png' alt='dice-2' width='100' height='100' title='dice-2' style='cursor: zoom-in;'>";
    echo "<img src='../assets/dice/dice-$number3.png' alt='dice-3' width='100' height='100' title='dice-3' style='cursor: zoom-in;'>";
    echo "</p>"
    ?>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>The bill, please!</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>The bill, please!</h1>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Create three variables:
                <ul>
                    <li><code>$price</code> of a drink (= € 2.65)</li>
                    <li><code>$number</code> of drinks (= 13)</li>
                    <li>Member <code>$reduction</code> (= 10%)</li>
                </ul>
            </li>
            <li>Calculate the <b>total amount</b> the customer has to pay, based on the value of these variables
            </li>
            <li>Show the value of the variables and the total amount of the bill</li>
            <li>Change the value of the variables <code>$price</code>, <code>$number</code> and
                <code>$reduction</code> to generate some other bills
            </li>
        </ul>
    </blockquote>
    <?php
        $price = 2.65;
        $number = 13;
        $reduction = 10;
        echo '<ul>';
        echo <<<amount
            <li>price of a drink= $price</li>
amount;
        echo "<li>number of drinks = € $number</li>";
        echo '<li>' . 'reduction = ' . $reduction . '%</li>';
        echo "<li><b> the total is € " . (($price * $number) - (($price * $number)/ 100) * 10) . " (with double quotes for \\n) </b></li>\n";
        echo '</ul>';
    ?>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

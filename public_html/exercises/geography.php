<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Geography: countries and their capitals</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Geography: countries and their capitals</h1>
    <?php
    $capitals = ["Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
        "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava",
        "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
        "The Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm",
        "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague",
        "Estonia" => "Tallinn", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valletta",
        "Austria" => "Vienna", "Poland" => "Warsaw"];
    ?>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Given is an associative array <code>$capitals</code> with countries (keys) and their capitals
                (values)
            </li>
            <li>Generate a <b>random country</b></li>
            <li>Add a <b>select list</b> with all possible answers (<b>capitals sorted alphabetically</b>)</li>
            <li>Submit your answer (to the same page) when clicking the button, and show some feedback:
                <ul>
                    <li>When <b>no capital</b> is selected: <b>Please choose a city!</b> in a <code>div</code> with
                        class <code>box-warning</code></li>
                    <li>When a <b>wrong capital</b> is selected: <b>"Wrong: the correct answer is ...</b> in a
                        <code>div</code> with class <code>box-warning</code></li>
                    <li>When the <b>correct capital</b> is selected: <b>Correct!</b> in a <code>div</code> with
                        class <code>box-info</code></li>
                </ul>
            </li>
        </ul>
    </blockquote>
    <blockquote class="bq-info-info-circle">
        <h3>Tips</h3>
        <ul>
            <li>The random country can be generated with the function <code>array_rand()</code>, which generates a
                random key of
                an array, on the given array <code>$capitals</code></li>
            <li>Use a <b>hidden field</b> (<code>type="hidden"</code>) to pass the value of this random country
                along with your GET or POST request
            </li>
        </ul>
    </blockquote>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

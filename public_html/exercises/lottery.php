<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Lottery numbers</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Lottery numbers</h1>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Generate an array with <b>6 different, random lottery numbers between 1 and 45</b>, sorted from
                small to large
            </li>
            <li>Show the generated numbers in an unordered list</li>
        </ul>
    </blockquote>
    <blockquote class="bq-info-info-circle">
        <h3>Tips</h3>
        <ul>
            <li>Use the PHP function <code>mt_rand()</code> for random number generation</li>
            <li>For sorting indexed arrays, you can use the <code>sort()</code> method, which - in contrast to
                <code>asort()</code> - does not maintain index association
            </li>
        </ul>
    </blockquote>
    <?php
        $min = 0;
        $max = 45;
        $lottery = [];
//        class solution
//        $i = 0;
//        while ($i < 6) {
//            $randomNumber = mt_rand($min, $max);
//            if (!in_array($randomNumber, $lottery)) {
//                array_push($lottery, $randomNumber);
//                $i++;
//            }
//        }

//        my solution
        while(count($lottery) < 6) {
            $randomNumber = mt_rand($min, $max);
            if (!in_array($randomNumber, $lottery)) {
                array_push($lottery, $randomNumber);
            }
        }


        asort($lottery);

//        will not work because double numbers.
//        for ($i = 1; $i <= 6; $i++) {
//            array_push($lottery, mt_rand($min, $max));};
        echo "<ul>";
        foreach ( $lottery as $number) {
            echo "<li>$number</li>";
        }
        echo "</ul>";
    ?>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

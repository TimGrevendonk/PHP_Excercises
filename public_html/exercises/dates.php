<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Funny dates</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Funny dates</h1>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Use the <b><code>date()</code> and <code>mktime()</code> functions</b> intensively to reconstruct
                the following output:
                <ul>
                    <li>I was born on Thursday 3 December 1970.</li>
                    <li>Next year (2020), the Belgian national holiday (21 July) falls on a Tuesday.</li>
                    <li>Still 83 more nights until Saint Nicholas will be in the country!</li>
                </ul>
            </li>
            <li>Use your own birth date!</li>
            <li>Make sure your code will also work on another day (of another year)!</li>
        </ul>
    </blockquote>
    <?php
        echo "<p>";
        $Date1 = mktime(0, 0 ,0, 10, 19, 1997);
        $holidayDate = (date("Y") + 1).date("-7-21");
        $now = new DateTime();
        if(date("m") == 12 && date("d") > 5) {
        //Use next year's saint nicolas date.
        $saintNicolas = (date("Y") + 1) . "-12-5";
        }else{
            $saintNicolas = date("y") . "12-5";
        }
        $saintNicolas = new DateTime($saintNicolas);
        $interval = $now->diff($saintNicolas);

        echo "i was born on " . date( "l d F Y", $Date1) . ".</br>";
        echo "next year (" . date("Y", strtotime($holidayDate)) . "), the belgian holiday ("
            . date("d M", strtotime($holidayDate)) . ") falls on a " . date("l", strtotime($holidayDate)) . ".</br>";
        echo $interval->days . ' days until next saint nicolas!';
        echo "</p>"
    ?>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

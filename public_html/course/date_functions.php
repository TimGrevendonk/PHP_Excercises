<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Date functions</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Date functions</h1>

    <div class="margin-3">
        <?php
        $timestamp = mktime(0, 0, 0, 12, 25, 2019); //25-12-2019, 0u00
        echo "<p> Christmas 2019 (" . date("d/m/Y", $timestamp) . ") falls on a " . date("l", $timestamp) . "</p>\n";
        ?>
    </div>
    <div class="margin-3">
        <?php
        echo "<p> Now, we are " . date("D d-m-Y, H:i:s") . "</p>\n";
        echo "<p>" . mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y")) . " seconds have passed since January 1, 1970, 00:00:00 </p>\n";

        $within4weeks = mktime(0, 0, 0, date("m"), date("d") + 28, date("Y")); //25-12-2019, 0u00)
        echo "<p> Within 4 weeks, we are " . date("l d F 'y", $within4weeks) . "</p>\n";
        ?>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

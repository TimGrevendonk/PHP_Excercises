<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Table with even numbers</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Table with even numbers</h1>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Create two variables <code>$start</code> (= 787) and <code>$end</code> (= 1092)</li>
            <li>Show a <b><code>table</code> with all even numbers between <code>$start</code> and <code>$end</code></b>
                (boundaries included)
                <ul>
                    <li>A full table row contains 10 numbers</li>
                </ul>
            </li>
            <li>Test your implementation with other boundary values</li>
        </ul>
    </blockquote>
    <blockquote class="bq-info-info-circle">
        <h3>Tip</h3>
        <p>Write some <b>embedded CSS</b> to change the alignment (right-aligned) and border (additional border at the
            right side) of the table cells</p>
    </blockquote>
<!--    add a right border per box-->
    <style type="text/css">
        td {
            border-right: 1px solid black;
        }
    </style>
    <?php
         $start = 117;
         $end = 343;
         $counter = 0;
         echo "<table><tr>";
         for ($i = $start; $i <= $end; $i++) {
             echo "<td>$i</td>";
             $counter++;
//             per 10 lines, end and start a table row.
             if ($counter % 10 == 0) {
                 echo "</tr><tr>";
             }
             }
         echo "</tr></table>";
    ?>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

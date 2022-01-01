<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Array functions</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Array functions</h1>

    <div class="margin-3">
        <?php
        $students = ['Doe, John' => 'r0662335', 'Doe, Jane' => 'r0715283', 'Smith, Jeff' => 'r0622915'];

        $search = 'r0622915';
        echo in_array($search, $students) ? "<p> Student with r-number $search was found!</p>\n" :
            "<p> Student with r-number $search was not found!</p>\n";
        ?>
    </div>

    <div class="margin-3">
        <?php
        asort($students);
        echo "<p> Students sorted by r-number: </p>\n";
        echo "<ul>\n";
        foreach ($students as $name => $student) {
            echo "<li> $student: $name </li>\n";
        }
        echo "</ul>\n";
        ?>
    </div>

    <div class="margin-3">
        <?php
        ksort($students);
        echo "<p> Students sorted by name: </p>\n";
        echo "<ul>\n";
        foreach ($students as $name => $student) {
            echo "<li> $student: $name </li>\n";
        }
        echo "</ul>\n";
        ?>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

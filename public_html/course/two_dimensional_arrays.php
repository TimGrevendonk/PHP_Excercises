<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Two-dimensional arrays</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Two-dimensional arrays</h1>

    <h2>Indexed two-dimensional arrays</h2>
    <div class="margin-3">
        <?php
        //first index: students
        //second index: courses
        $scores[0][0] = 13;
        $scores[0][1] = 8;
        $scores[0][2] = 18;
        $scores[1][0] = 17;
        $scores[1][1] = 14;
        $scores[1][2] = 10;
        $scores[2][0] = 9;
        $scores[2][1] = 11;
        $scores[2][2] = 16;

        echo "<p> Score of student 0 for course 2 = {$scores[0][2]} </p>\n";
        echo "<p> Score of student 1 for course 1 = {$scores[1][1]} </p>\n";
        echo "<p> Score of student 2 for course 0 = {$scores[2][0]} </p>\n";
        ?>
    </div>

    <div class="margin-3">
        <?php
        //rows: students
        //columns: courses
        $scores = [
            [13, 8, 18],
            [17, 14, 10],
            [9, 11, 16]
        ];

        for ($i = 0; $i < count($scores); $i++) {
            echo "<p> Scores of student $i: </p>\n";
            echo "<ul>\n";
            for ($j = 0; $j < count($scores[$i]); $j++) {
                echo "<li> Course $j: {$scores[$i][$j]} </li>\n";
            }
            echo "</ul>\n";
        }
        ?>
    </div>

    <h2>Associative two-dimensional arrays</h2>
    <div class="margin-3">
        <?php
        $scores = [
            'John' => ['PHP' => 13, 'Business essentials' => 8, 'English 2' => 18],
            'Jane' => ['PHP' => 17, 'Business essentials' => 14, 'English 2' => 10],
            'Jeff' => ['PHP' => 9, 'Business essentials' => 11, 'English 2' => 16]
        ];

        echo "<p> John's score for English 2 = {$scores['John']['English 2']} </p>\n";
        echo "<p> Jane's score for Business essentials = {$scores['Jane']['Business essentials']} </p>\n";
        echo "<p> Jeff's score for PHP = {$scores['Jeff']['PHP']} </p>\n";
        ?>
    </div>

    <div class="margin-3">
        <?php
        foreach ($scores as $person => $scoresPerson) {
            foreach ($scoresPerson as $course => $score) {
                echo "<p> $person's score for $course = $score</p>\n";
            }
        }
        ?>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

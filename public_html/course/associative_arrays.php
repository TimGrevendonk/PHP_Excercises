<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Associative arrays</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Associative arrays</h1>

    <div class="margin-3">
        <?php
        $scoresJohn['PHP'] = 13;
        $scoresJohn['Business essentials'] = 8;
        $scoresJohn['English 2'] = 18;

        echo "<p> John's score for PHP = {$scoresJohn['PHP']} </p>\n";
        echo "<p> John's score for Business essentials = {$scoresJohn['Business essentials']} </p>\n";
        echo "<p> John's score for English 2 = {$scoresJohn['English 2']} </p>\n";
        ?>
    </div>
    <h2>foreach</h2>
    <div class="margin-3">
        <?php
        $scoresJane = ['PHP' => 17,
            'Business essentials' => 14,
            'English 2' => 10,
            'vak' => 'number'
        ];
        ?>

        <p> Jane's scores: </p>
        <ul>
            <?php
            foreach ($scoresJane as $score) {
                echo "<li> $score </li>\n";
            }
            ?>
        </ul>
    </div>

    <div class="margin-3">
        <?php
        // print key($course) and value($score)
        foreach ($scoresJane as $course => $score) {
            echo "<p> Jane's score for $course = $score </p>\n";
        }
        ?>
    </div>

    <h2>compact</h2>
    <div class="margin-3">
        <?php
        $php = 9;
        $businessEssentials = 11;
        $english2 = 16;

        $scoresJeff = compact('php', 'businessEssentials', 'english2');
        ?>

        <h3>var_dump</h3>
        <?php
        ini_set('xdebug.overload_var_dump', 0);
        var_dump($scoresJeff);
        ?>

        <h3>print_r</h3>
        <?php
        print_r($scoresJeff);
        ?>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

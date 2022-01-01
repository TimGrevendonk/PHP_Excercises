<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Indexed arrays</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Indexed arrays</h1>

    <h2>Initialize array elements with index</h2>
    <div class="margin-3">
        <?php
        $students[0] = 'John Doe';
        $students[1] = 'Jane Doe';
        $students[2] = 'Jeff Smith';

        for ($i = 0; $i < count($students); $i++) {
            echo "<p> Student $i = $students[$i] </p>\n";
        }
        ?>
    </div>

    <h2>Initialize array elements without index</h2>
    <div class="margin-3">
        <?php
        $teachers[] = 'Michaël Cloots';
        $teachers[] = 'Jan Janssen';
        $teachers[] = 'Patrick Verhaert';

        for ($i = 0; $i < count($teachers); $i++) {
            echo "<p> Teacher $i = $teachers[$i] </p>\n";
        }
        ?>
    </div>

    <h2>Initialize array with [ ] </h2>
    <div class="margin-3">
        <?php
        $teachers = ['Michaël Cloots', 'Jan Janssen', 'Patrick Verhaert'];

        for ($i = 0; $i < count($teachers); $i++) {
            echo "<p> Teacher $i = $teachers[$i] </p>\n";
        }
        // add items to an array
        array_push($teachers, 'end 1', 'end 3');
            for ($i = 0; $i < count($teachers); $i++) {
                echo "<p> Teacher $i = $teachers[$i]</p>\n"
                                ;
                            }
        ?>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>A second example: class Teacher</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>A second example: class Teacher</h1>
    <div class="margin-3">
        <?php
        include_once '../classes/employees/Teacher.php';  // include the class
        use classes\employees\Teacher; // use the namespace

        $teachers[0] = new Teacher('Michaël Cloots', 'M');
        $teachers[1] = new Teacher('Jan Janssen', 'M');
        $teachers[2] = new Teacher('Patrick Verhaert', 'M');

        foreach ($teachers as $i => $teacher) {
            echo "<p>Teacher $i = {$teacher->getName()} ({$teacher->getGender()})</p>\n";
        }
        ?>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

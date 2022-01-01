<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>The basics: class Student</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>The basics: class Student</h1>
    <div class="margin-3">
        <?php
        include_once '../classes/Student.php';  // include the class
        use classes\Student; // use the namespace

        $students[0] = new Student();
        $students[0]->setName('John Doe');
        $students[0]->setGender('M');

        $students[1] = new Student();
        $students[1]->setName('Jane Doe');
        $students[1]->setGender('F');

        foreach ($students as $i => $student) {
            echo "<p>Name of student $i = {$student->getName()}</p>\n";
            echo "<p>Gender of student $i = {$student->getGender()}</p>\n";
        }
        ?>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

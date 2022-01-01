<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Form with GET</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Form with GET</h1>
    <div class="margin-3">
        <p>Your inputs:</p>
        <ul>
            <li>Name: <span
                    class="text-primary"><b><?php echo !empty($_GET['name']) ? $_GET['name'] : 'Not specified' ?></b></span>
            </li>
            <li>Gender: <span class="text-primary"><b><?php echo $_GET['gender'] ?? 'Not specified' ?></b></span>
            </li>
        </ul>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

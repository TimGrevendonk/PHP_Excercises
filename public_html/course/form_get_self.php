<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Form with GET - Processing the inputs on the same page</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Form with GET - Processing the inputs on the same page</h1>
    <?php
    if ($_GET) {
        $name = !empty($_GET['name']) ? $_GET['name'] : 'Not specified';
        $gender = $_GET['gender'] ?? 'Not specified';
        echo <<<RESULTS
        <div class="margin-3">
            <p>Your inputs:</p>
            <ul> 
                <li>Name: <span class="text-primary"><b>$name</b></span></li>
                <li>Gender: <span class="text-primary"><b>$gender</b></span</li>
            </ul>
        </div>
        <p><a href="{$_SERVER['PHP_SELF']}">Back</a></p>
    RESULTS;
    } else {
        ?>
        <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div>
                <label for="name"><b>Name:</b></label>
                <input type="text" name="name" id="name" placeholder="Your name here">
            </div>
            <div>
                <label><b>Gender:</b></label>
                <input type="radio" name="gender" id="male" value="M">
                <label for="male">Male</label>

                <input type="radio" name="gender" id="female" value="F">
                <label for="female">Female</label>

                <input type="radio" name="gender" id="nonbinary" value="X">
                <label for="nonbinary">Non-binary</label>
            </div>

            <button type="submit" class="btn-primary"><b>Submit</b></button>
        </form>
        <?php
    }
    ?>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
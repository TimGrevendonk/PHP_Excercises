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
    <form method="get" action="form_get_process.php">
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
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

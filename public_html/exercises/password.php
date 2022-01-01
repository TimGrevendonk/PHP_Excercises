<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Password generator</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Password generator</h1>
    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
        <label for="characters">Password:</label>
        <select name="characters" id="characters">
            <?php
            $characters = $_POST['characters'] ?? 10;
            for ($i = 6; $i <= 15; $i++) {
                $selected = ($i == $characters) ? 'selected' : '';
                echo "<option value='$i' $selected>$i characters</option>";
            }
            ?>
        </select>
        <button class="btn-primary-key" type="submit">Generate password</button>
    </form>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Generate a <b>random password</b> with <b>n</b> characters</li>
            <li>A password consists of approximately the same number of digits as letters:
                <ul>
                    <li>8 characters = 4 letters + 4 digits</li>
                    <li>9 characters = 4 letters + 5 digits</li>
                </ul>
            </li>
            <li>Each <b>letter</b> may occur only once, each <b>digit</b> may occur only twice</li>
            <li>To avoid confusion, do not use the letters o, O, l and the digits 0 and 1</li>
            <li>Show a <code>table</code> with 10 different passwords</li>
            <li>Calculate for each password also a <a
                    href="https://www.php.net/manual/en/function.password-hash.php">Bcrypt
                    hash</a></li>
            <li>When the page is loaded, it generates 10 different passwords with 10 characters (the default). Use a
                GET or POST request (to the same page) when the form is submitted.
            </li>
        </ul>
    </blockquote>

</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Even or odd number</title>
</head>
<body>
<main>
    <?php include_once('../shared/nav.php') ?>
    <h1>Even or odd number</h1>
    <form method="get" action="<?= $_SERVER['PHP_SELF'] ?>">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required value="<?= $_GET['number'] ?? "" ?>">
        <button type="submit" class="btn-primary">Submit</button>
    </form>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Enter a number <b>n</b> and print <b>n is an EVEN/ODD number</b>
                <ul>
                    <li>on a <b>blue background</b> (use a <code>div</code> with class <code>box-primary</code>) if
                        n is
                        <b>EVEN</b></li>
                    <li>on an <b>orange background</b> (use a <code>div</code> with class <code>box-warning</code>)
                        if n is
                        <b>ODD</b></li>
                </ul>
            </li>
            <li>The <code>title</code> tag contains the same text as the <code>div</code> tag, i.e., <b>n is an
                    EVEN/ODD number</b></li>
            <li>The form is sent via <b>GET</b> and is <b>processed on the same page</b> (on which the form and the
                entered number should remain visible)
            </li>
        </ul>
    </blockquote>
            <?php
            $number = 0;
            if ($_GET) {
                if (is_numeric($_GET['number'])) {
                    $number = intval($_GET['number']);
                }
                echo "<div class='" . ($number % 2 == 0 ? 'box-primary' : 'box-warning') . "'>";
                echo "<p><b>$number</b> is an <b> ". ($number % 2 == 0 ? "EVEN" : "ODD") . " </b>value</p>    </div>";
            }
            ?>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

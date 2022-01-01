<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Welcome to PHP7 2ITF</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Welcome to PHP7 2ITF</h1>
    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Create a loop in which the text <b>Welcome to PHP7 2ITF</b> is printed within different <b>header
                    tags</b>
                <ul>
                    <li>From <code>h1</code> to <code>h6</code></li>
                    <li>Draw a horizontal rule</li>
                    <li>From <code>h6</code> to <code>h1</code></li>
                </ul>
            </li>
        </ul>
    </blockquote>
    <?php
        $messge = "Welcome to PHP7 2ITF";
        for ($i = 1; $i <= 6; $i++) {
          echo "<h$i>$messge</h$i>\n";
          }
      echo "<hr>\n";
      for ($i = 6; $i >= 1; $i--) {
            // can use a variable per iteration
          $header = "h" . $i;
            // single quotes can sometimes take a long time to write down, unclear code
          echo '<h' . $i . '>' . $messge . '</' . $header . '>' . "\n";
          }
    ?>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

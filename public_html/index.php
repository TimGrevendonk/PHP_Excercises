<!doctype html>
<html lang="en">
<head>
    <?php include_once('shared/meta.php') ?>
    <title>Home</title>
</head>
<body>
<?php include_once('shared/nav.php') ?>

<main>
    <h1>Homepage</h1>
    <p>Welcome to <b><i>PHP7 2ITF</i></b>, the project site containing all the course examples and exercises (with
        preview) used in the PHP
        part of the course
        <a href="https://itf-laravel.netlify.app/">Web Applications in PHP</a>.</p>

    <h2>PhpStorm settings</h2>
    <div class="row">
        <div>The following PhpStorm settings (<b>menu <u>F</u>ile > <u>S</u>ettings</b>) are recommended for an improved
            development experience.
        </div>
        <div class="col-6">
            <ul>
                <li>Go to <b>PHP</b>:
                    <ul>
                        <li>Set <b class="text-primary">PHP Language level</b> to <b class="text-primary">7.4</b>
                        </li>
                    </ul>
                </li>
            </ul>
            <img src="assets/PhpStorm/PHP7.4.png" alt="PHP 7.4">
        </div>
        <div class="col-6">
            <ul>
                <li>Go to <b>Languages &amp; Frameworks</b> &gt; <b>JavaScript</b>:
                    <ul>
                        <li>Set <b class="text-primary">JavaScript Language version</b> to <b class="text-primary">ECMAScript
                                6+</b></li>
                    </ul>
                </li>
            </ul>
            <img src="assets/PhpStorm/ES6.png" alt="ECMAScript 6">
        </div>
        <div class="col-6">
            <ul>
                <li>Go to <b>Directories</b>:
                    <ul>
                        <li>Set <b class="text-primary">public_html</b> as <b class="text-primary">Sources</b></li>
                        <li>Set <b class="text-primary">public_html</b> as <b class="text-primary">Resource Root</b>
                        </li>
                    </ul>
                </li>
            </ul>
            <img src="assets/PhpStorm/root.png" alt="Directories">
        </div>
        <div class="col-6">
            <ul>
                <li>Go to <b>Editor</b> &gt; <b>General</b> &gt; <b>Auto Import</b>:
                    <ul>
                        <li>Check <b class="text-primary">Enable auto-import in file scope</b></li>
                        <li>Change <b class="text-primary">Class</b> to <b class="text-primary">prefer import</b>
                        </li>
                    </ul>
                </li>
            </ul>
            <img src="assets/PhpStorm/import.png" alt="Import classes">
        </div>
    </div>
</main>
<?php include_once('shared/footer.php') ?>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Date - time</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Date - time</h1>
    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
        <label for="hours">Simulate server time +</label>
    </form>
    <div id="result">
    </div>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Add an extra <b>select list</b> to the form, with which you can add (0 to 24) hours to the current
                (server) time
            </li>
            <li>Show a message and image according to the (simulated) time, i.e. the current time with the selected
                number of hours added
                <ul>
                    <li><b>Between 6:00 and 10:00</b>
                        <ul>
                            <li><code>title</code> tag: <b>Good morning</b></li>
                            <li><code>body</code> tag: <b>black text</b> on a <b>light gray background</b></li>
                            <li><code>div#result</code>: a welcome message (<b>Good morning</b>), the date and time,
                                the server timezone
                                and an image <i>assets/dateTime/morning.png</i></li>
                        </ul>
                    </li>
                    <li><b>Between 10:00 and 22:00</b>
                        <ul>
                            <li><code>title</code> tag: <b>Good day</b></li>
                            <li><code>body</code> tag: <b>black text</b> on a <b>white background</b></li>
                            <li><code>div#result</code>: a welcome message (<b>Good day</b>), the date and time, the
                                server timezone
                                and an image <i>assets/dateTime/day.png</i></li>
                        </ul>
                    </li>
                    <li><b>Between 22:00 and 6:00</b>
                        <ul>
                            <li><code>title</code> tag: <b>Good night</b></li>
                            <li><code>body</code> tag: <b>white text</b> on a <b>black background</b></li>
                            <li><code>div#result</code>: a welcome message (<b>Good night</b>), the date and time,
                                the server timezone
                                and an image <i>assets/dateTime/night.png</i></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </blockquote>
    <blockquote class="bq-info-info-circle">
        <h3>Tips</h3>
        <ul>
            <li>Note that the simulated time can never be higher than 24 hours: 6h + 20h = 2h (not 26h)
            </li>
            <li>Add some <b>embedded css</b> to overwrite the
                default (<code>body</code>) colors of the framework and to style <code>div#result</code>
            </li>
            <li>If your (server) times are wrong, you probably forgot to adjust the <b>timezone</b> to
                'Europe/Brussels', as explained in <a
                    href="https://itf-laravel.netlify.com/php/functions.html#date-functions">our course</a></li>
            <li>Add some simple <b>jQuery-code</b> to submit the form when the select list is changed</li>
        </ul>
    </blockquote>

</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

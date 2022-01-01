<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>National registry number</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>National registry number</h1>
    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
        <label for="number">Number:</label>
        <input type="number" name="number" id="number" required value="">
        <button class="btn-primary-venus-mars" type="submit">Check</button>
    </form>
    <hr>
    <blockquote class="icon-gray-pen">
        <p>In <b>Belgium</b> every citizen has a <b>National registry number</b>, which is created by using the
            citizen's
            <b>date of birth</b> (encoded in six digits),
            followed by a <b>serial number</b> (three digits) and a <b>checksum</b> (two digits).
            The serial number is used so that men get the odd numbers, while women get the even numbers (thus, there
            can be only 500 men or women per day).
        </p>
        <ul>
            <li>Enter a number and check whether it meets the <b>specifications</b>:
                <ul>
                    <li>The length is exactly 11 digits</li>
                    <li>First 6 digits: birthday (yymmdd)</li>
                    <li>Next 3 digits: gender (even for female and odd for male)</li>
                    <li>Last 2 digits: checksum</li>
                </ul>
            </li>

            <li><b>Checksum verification</b>
                <ul>
                    <li>Divide the first 9 digits by 97</li>
                    <li>The remaining part of this division (modulus) + 2 digits checksum must be
                        97
                    </li>
                    <li>E.g. registry number <b>641016 123 35</b>
                        <ul>
                            <li><b>641016123 % 97</b> = 641016123 modulus 97 = <b>62</b></li>
                            <li><b>62 + 35 = 97</b></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>

        <h4>Messages</h4>
        <ul>
            <li>Number is not 11 digits<br>
                Show <b>A valid number contains 11 digits</b> inside a <code>div</code> tag with class
                <code>box-danger-venus-mars</code>
            </li>
            <li>Checksum doesn't match<br>
                Show <b>The number contains at least one faulty digit</b> inside a <code>div</code> tag
                with class <code>box-danger-venus-mars</code>
            </li>
            <li>Number match<br>
                <b>The number is correct. You are born on dd-mm-yy</b>
                <br>For <b>males</b>, show the message inside a <code>div</code> tag with class
                <code>box-primary-mars</code>
                <br>For <b>females</b>, show the message inside a <code>div</code> tag with class <code>box-primary-venus</code>
            </li>
        </ul>
    </blockquote>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

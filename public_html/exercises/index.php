<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <style>
        .exercise {
            display: inline-block;
            width: 200px;
        }

        .preview {
            color: grey;
            text-decoration: none;
            display: inline-block;
            width: 70px;
        }

        .stars {
            color: grey;
            cursor: help;
            text-decoration: none;
            display: inline-block;
        }

        .stars .bs {
            color: black;
        }
    </style>
    <title>Exercises</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Exercises</h1>
    <div class="box-info-info-circle">
        <ul>
            <li>Click on <b>preview</b> to show a "live" preview of the exercise</li>
            <li>Sometimes the <b>solutions</b> are available at: <a href="https://php7.z01.be/_showSolution.php">https://php7.z01.be/_showSolution.php</a>
            </li>
            <li>All classes you need for the exercises are already present in the framework</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-6 ex">
            <h2>Operators</h2>
            <ul>
                <li><a data-dif="1" href="fahrenheit.php">Celsius to Fahrenheit</a></li>
                <li><a data-dif="1" href="bill.php">The bill, please!</a></li>
            </ul>
            <h2>Control structures</h2>
            <ul>
                <li><a data-dif="1" href="smallest.php">Smallest number</a></li>
                <li><a data-dif="1" href="welcome.php">Welcome to PHP7 2ITF</a></li>
                <li><a data-dif="2" href="even.php">Table with even numbers</a></li>
                <li><a data-dif="2" href="checkerboard.php">Checkerboard</a></li>
            </ul>
            <h2>Arrays</h2>
            <ul>
                <li><a data-dif="1" href="comics.php">Comic book duos</a></li>
            </ul>
            <h2>Functions</h2>
            <ul>
                <li><a data-dif="2" href="lottery.php">Lottery numbers</a></li>
                <li><a data-dif="2" href="strings.php">Funny strings</a></li>
                <li><a data-dif="2" href="dates.php">Funny dates</a></li>
                <li><a data-dif="2" href="temperatures.php">Temperatures</a></li>
                <li><a data-dif="2" href="sort.php">Sort check</a></li>
            </ul>
            <h2>Forms</h2>
            <ul>
                <li><a data-dif="2" href="sum.php">Calculate sum of n</a></li>
                <li><a data-dif="2" href="even_odd.php">Even or odd number</a></li>
                <li><a data-dif="2" href="calculation.php">Calculation</a></li>
                <li><a data-dif="2" href="dice.php">Roll the dice</a></li>
                <li><a data-dif="3" href="dice_advanced.php">Roll the dice (advanced)</a></li>
                <li><a data-dif="3" href="password.php">Password generator</a></li>
                <li><a data-dif="3" href="registryNumber.php">National registry number</a></li>
                <li><a data-dif="3" href="geography.php">Countries and capitals</a></li>
                <li><a data-dif="3" href="dateTime.php">Date - time</a></li>
            </ul>
        </div>
        <div class="col-6">
            <h2>
                <img src="/assets/eat-sleep-code-repeat.jpg" alt="eat-sleep-code-repeat">
            </h2>
        </div>
    </div>
</main>
<?php include_once('../shared/footer.php') ?>
<script>
    $(function () {
        $('main .ex li').wrapInner('<span class="exercise">').each(function () {
            let url = $(this).find('a').attr('href');
            let txt = $(this).find('a').text();
            let difficulty = $(this).find('a').data('dif');
            let ster;
            $(this).append('<a class="preview" title="Show preview ' + txt + '" href="https://php7.z01.be/exercises/_solution_' + url + '" target="_blank">preview</a>');
            $(this).append('<span class="stars" title="Difficulty ' + difficulty + '"></span>');
            if (difficulty === 3) {
                ster = '<span class="bs">&#9733;&#9733;&#9733;</span>'
            } else if (difficulty === 2) {
                ster = '<span class="bs">&#9733;&#9733;</span>&#9734;'
            } else {
                ster = '<span class="bs">&#9733;</span>&#9734;&#9734;'
            }
            $(this).find('.stars').html(ster);
        });
    });
</script>
</body>
</html>
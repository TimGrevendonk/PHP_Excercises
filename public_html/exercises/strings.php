<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Funny strings</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Funny strings</h1>
    <?php
    $strings = array("one two three four five", "was it a car or a cat i saw", "a man a plan a canal panama", "madam I'm Adam");
    ?>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Given is an array <code>$strings</code> with 4 strings</li>
            <li>Print:
                <ul>
                    <li>The <b>original strings</b></li>
                    <li>The <b>strings, letters reversed</b>
                        <ul>
                            <li>Search on the internet for the PHP function you can use for this</li>
                        </ul>
                    </li>
                    <li>The <b>strings, words reversed</b>
                        <ul>
                            <li>Write a function <code>reverseWords($string)</code>, with returns a string with
                                the words of <code>$string</code> in reversed order
                            </li>
                        </ul>
                    </li>
                    <li>The <b>strings, words starting with capital letter</b>
                        <ul>
                            <li>Search on the internet for the PHP function you can use for this</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </blockquote>
    <h2>original strings</h2>
    <p>
    <?php
        foreach ($strings as $string) {
            echo "$string</br>";
        }
    ?>
    </p>
    <h2>the strings, letters reversed</h2>
    <p>
    <?php
        foreach ($strings as $string) {
            echo strrev("$string") . "</br>";
         }
    ?>
    </p>
    <h2>the strings, words reversed</h2>
    <p>
        <?php
//        this will reverse the letters and not the words.
//        mis made this one, but for keeps sake.
            function reverseLetters($string) {
                $reversed = "";
                $temp = "";
                for ($i = 0; $i < strlen($string); $i++) {
                    if ($string[$i] == " "){
                        $reversed .= $temp . " ";
                        $temp = "";
                    }
                    $temp = $string[$i] . $temp;
                }
                $reversed .= $temp;
                return $reversed;
            }

            function reverseWords($string) {
//                will count the words in a string,
//                the "1" is a format indicator: make an array of all individual words.
                $tempArray = str_word_count($string, 1);
//                reverse the newly made array
                $reverse = array_reverse($tempArray);
                $returnString = "";
//                put the spaces back between the words.
                foreach ($reverse as $reversed) {
                    $returnString .= $reversed . " ";
                }
                return substr($returnString, 0, strlen($returnString) - 1);
//                return $returnString; (will have space at end)
            }
            foreach ($strings as $string) {
                echo reverseWords("$string") . "</br>";
            }
        ?>
    </p>
    <h2>The strings, words starting with capital letter</h2>
    <p>
        <?php
        foreach ($strings as $string) {
//            will capitalize every individual word
            echo ucwords("$string") . "</br>";
        }
        ?>
    </p>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>

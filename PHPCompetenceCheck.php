<?php

echo '<h4>Multidimensional arrays:</h4><br>';
$arrays = array(array('Forename', 'Surname', 'Age'),array('Fritz', 'Phantom', 70),
                array('Lilo', 'Knickerbockers', 37), array('Thomas', 'Breziner', 58),
                array('Tom, Turbo', 27));
var_dump($arrays);

print '<br><br>';

for ($i = 0; $i < count($arrays); $i++) {
    print '<div >';
    for ($j = 0; $j < count($arrays[$i]); $j++) {
        print $arrays[$i][$j] . ' ';
    }
    print '</div>';
}

print '<br><br>';
echo '<h4>Multidimensional arrays</h4><br>';
function printArray(){
    $array = array('Fritz' => 'Purple', 'Lilo' => 'Pink', 'Thomas' => 'Yellow', 'Tom' => 'Red');
    foreach ($array as $x => $value) {
        echo "$x = $value<br>";
    }
}

printArray();

print '<br><h4>Arrange arrays & output the result (echo or print)</h4><br>';
echo '<h3>Sorting</h3>';

$tom_mag= array("Lubricating Oil", "DeBreziner", "Pickle Guy");
sort($tom_mag);
foreach ($tom_mag as $value) {
    echo "$value<br>";
}

$tricks= array(6, 89, 23, 1, 7, 8, 19);
sort($tricks);
foreach ($tricks as $value) {
    echo "$value<br>";
}
print '<br> <br>';
rsort($tricks);
foreach ($tricks as $value) {
    echo "$value<br>";
}

print '<br><br>';

echo '<br><p>Sort the array from Example 2 in ascending order, by the key</p></p><br>';

function sortArrayByKeyA(){
    $array = array('Fritz' => 'Purple', 'Lilo' => 'Pink', 'Thomas' => 'Yellow', 'Tom' => 'Red');
    ksort($array);
    foreach ($array as $x => $value) {
        echo "$x = $value<br>";
    }
}
sortArrayByKeyA();

echo '<br><p>Sort the array from Example 2 in descending order, based on the values</p><br>';

function sortArrayByValueD(){
    $array = array('Fritz' => 'Purple', 'Lilo' => 'Pink', 'Thomas' => 'Yellow', 'Tom' => 'Red');
    arsort($array);
    foreach ($array as $x => $value) {
        echo "$x = $value<br>";
    }
}

sortArrayByValueD();

echo '<br><h3>PHP Strings</h3><br>';

function checkTheLengthOfString(){
    $str = 'The Knickerbocker gang, that is us!';
    echo 'String: '.$str .'<br>';
    echo 'The length of the string is ' .strlen($str);
}
checkTheLengthOfString();

echo '<br><br>';

function searchForTheWord(){
    $word = 'Tom Turbo likes lubricating oil';
    echo $word .'<br>The first character position of (lubricating oil) is: ';
    echo strpos($word, 'lubricating oil');
}
searchForTheWord();

function reversTheString(){
    echo  "<br><br>Turbo Durchblick <br>";
    echo strrev( "Turbo Durchblick");
}

reversTheString();

function createFile(){
    $myFile = fopen("testFile.txt", "w");
    $text = 'Turbo Adhesive
Turbo Frying Pan Trick
Garlic Stink Bomb';
    fwrite($myFile, $text);
    fclose($myFile);
}

createFile();

$handle = fopen('beispiel.txt', 'w');
if($handle) {
    for($i = 0; $i < 10; $i++){
        fputs($handle, ($i+1) . "\n");
    }
    fclose($handle);
} else {
    print "Datei konnte nicht geöffnet werden.<br>\n";
}

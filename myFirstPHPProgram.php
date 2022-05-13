<?php
echo '<h1>Welcome to my first ever php programming page</h1>';
echo "<h2>First exercise </h2>";
$i = 8;
echo '<br><p>Output ' .$i .' with echo '.'</p>';
print ('<br><p>Output ' .$i .' with print' .'</p>');
var_dump('<p>'. $i .' with var_dump() function</p>');

$j = 9;
$k = 10;
print('<br> The numbers:<br>');
print($j);
print('<br>');
print($k);
$result = $j * $k;
print('<br> The result of: ' .$j .' * ' .$k .' = ' .$result .'<br>');

$line1 = '"The Danube has fallen into the water, ';
$line2 = 'the Rhine stream has burned, ';
$line3 = 'a joke happened in Frankfurt, ';
$line4 = 'the Geisbock has told"' .'<br>';

print($line1 .$line2 .$line3 .$line4);

$customers = array(array('A', 'B', 12), array('C', 'D', 22), array('E', 'F', 32));

print 'Customers: <br>';
for ($i = 0; $i < count($customers); $i++) {
    print 'Customer ' . ($i + 1) .': ' ;
    for ($j = 0; $j < count($customers); $j++) {
        print $customers[$i][$j].' ';
    }
    print '<br>';
}

echo "<h2>Second exercise </h2>";
function inventory($cup){
    $products = array(
        array('Cup', 30, 10),
        array('Plate', 30, 10),
        array('Bowl', 10, 0),
        array('Pot', 10, 4)
    );
    for ($i = 0; $i < count($products); $i++){
        for ($j = 0; $j < count($products[$i]); $j++) {
            $view = $products[$i][$j];
            print $view . ' ' ;
        }
        print '<p></p>';
    }
    for ($i = 0; $i < count($products); $i++){
        for ($j = 0; $j < count($products[$i]); $j++) {
            if ($products[$i][$j] === $cup && $products[$i][2] === 0){
                $view_variable = $products[$i][2];
                console_log($view_variable);
                print 'The product is not available';
            }elseif ($products[$i][$j] === $cup && $products[$i][1] >= 20 && $products[$i][2] >= 1){
                $view_variable = $products[$i][2];
                console_log($view_variable);
                print 'This product will be delivered free of charge because it costs more that 20 €.';
            } elseif ($products[$i][$j] === $cup && $products[$i][1] < 20){
                $view_variable = $products[$i][2];
                console_log($view_variable);
                print '<br>This product will be delivered 5€ because it costs more that 20 €<br>';
            }
        }
    }
}
inventory('Pot');

function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
echo 'hello';
<?php
echo "Hello world";
$textbaustein = "<br>Meine erste Variable ";
print $textbaustein;
$i = 0;
while($i < 10){
    print ('<br> hello');
    $i++;
}

$produkt = array();
$produkt['Artikelnummer'] = 1;
$produkt['Produktname'] = "Roggensemmel";
$produkt['Preis'] = 0.79;
$produkt['Beschreibung'] = "Bioweckerl vom feinsten";
$produkt['Anzahl'] = 50;

foreach($produkt as $i => $info) {
    print "<p>" . $i . ": " . $info . "</p>\n";
}

$ganzeZahl = 3;
$kommaZahl = 5.39281;
$boolean = true;
print "Ganze Zahl: " . $ganzeZahl . "<br>Kommazahl: " . $kommaZahl . "<br>Boolean: " . $boolean;

$bestand = 5;
print "<p>Verfügbare Artikel: " . $bestand . "</p>\n";
$bestand += 1;
print "<p>Verfügbare Artikel: " . $bestand . "</p>\n";

$produkt = array();
$produkt[0] = 1;
$produkt[1] = "Roggensemmel";
$produkt[2] = 0.79;
$produkt[3] = "Bioweckerl vom feinsten";
$produkt[4] = 50;

foreach($produkt as $i) {
    print "<p>" . $i . "</p>\n";
}


$produktAlternative = array(1, "Roggensemmel", 0.79, "Bioweckerl vom feinsten", 50);
foreach($produktAlternative as $info) {
    print "<p>" . $info . "</p>\n";
}
print "<p>" . $produkt[4] . "</p>\n";


$sortiment = array();
$sortiment[0]['Artikelnummer'] = 1;
$sortiment[0]['Produktname'] = "Roggensemmel";
$sortiment[0]['Preis'] = 0.79;
$sortiment[1]['Artikelnummer'] = 2;
$sortiment[1]['Produktname'] = "Kornspitz";
$sortiment[1]['Preis'] = 0.59;
$sortiment[2]['Artikelnummer'] = 3;
$sortiment[2]['Produktname'] = "Semmel";
$sortiment[2]['Preis'] = 0.99;

var_dump($sortiment);
print "<hr>";

print "<p>" . $sortiment[2]['Produktname'] . "</p>\n";
print "<hr>";

foreach($sortiment as $array) {
    foreach($array as $i => $entry) {
        print "<p>" . $i . ": " . $entry . "</p>\n";
    }
}


echo strpos("Hello world!", "bye");

?>
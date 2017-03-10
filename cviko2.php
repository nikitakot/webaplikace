<?php
$a = 1;
$b = 2;
echo $a.", ".$b;
echo "<br>";
echo $a + $b;
echo "<br>";

if($a>10)
{
    echo 2*$a +$b;
}

$pole = array(1,2,3);

foreach($_GET as $i => $value)
{
    echo $i.'='.$value.'<br/>';
}

echo substr("Lorem ipsum...",5);

//du na gitu priklad na procviceni, ukladat data do formatu xml, includovat ten soubor, filputcontents na konec, upravit prava 666

?>

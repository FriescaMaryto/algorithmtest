<?php

$price='1,345,679';

echo $price = (int)str_replace(",","",$price);
echo '<br>';

$prices = str_split($price);
$unit=sizeof($prices)-1;

for($i=0;$i<sizeof($prices);$i++){
    echo "$prices[$i]";
    for($j=0;$j<$unit;$j++)
    {
        echo "0";
    }
    echo "<br/>";
    $unit--;
}

?>

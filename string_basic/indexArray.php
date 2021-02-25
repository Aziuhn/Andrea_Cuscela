<?php
$colors = array("red", "blue", "green");

print_r($colors);
var_dump($colors);
echo $colors[0]."\n\n";

for($i=0;$i<count($colors);$i++){
    echo $colors[$i]."\n";
}

for($i=0;$i<count($colors);$i++){
    echo "Index $i is corresponding to: ".$colors[$i]."\n";
}

$colors[] = "rebeccapurple";

foreach($colors as $key => $color){
    echo "La chiave $key contiene $color\n";
}

?>
<?php

$weight = 4;
$distance = 110;

if ($weight <= 5 && $distance <= 100){
    echo "Total Shipping Cost: $" . "$distance" * 5;

}elseif ( $weight <= 5 && $distance > 100) {
    echo "Total Shipping Cost: $" . "$distance" * 4;
}

elseif ($weight > 6  && $distance <= 100) {
    echo "Total Shipping Cost: $" . "$distance" * 6;
    
}elseif ( $weight > 5 && $distance > 100) {
    echo  "Total Shipping Cost: $" . "  $distance" * 6;
}

?>
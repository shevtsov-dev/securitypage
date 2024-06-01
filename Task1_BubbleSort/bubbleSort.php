<?php

$array = [60, 50, 30, 70, 20, 10];
print_r($array);
echo "<br>";
for ($j = 0; $j < count($array) - 1; $j++) {
    for ($i = 0; $i < count($array) - 1; $i++) {
        if ($array[$i] > $array[$i + 1]) {
            $old = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $old;
        }
    }
}

print_r($array);
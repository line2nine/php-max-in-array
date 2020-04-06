<?php

function findMax($Array)
{
    $max = $Array[0][0];
    for ($i = 0; $i < count($Array); $i++) {
        for ($j = 0; $j < count($Array[$i]); $j++) {
            if ($Array[$i][$j] > $max) {
                $max = $Array[$i][$j];
            }
        }
    }
    return $max;
}
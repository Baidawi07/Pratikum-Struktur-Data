<?php

function binaryGap($n)
{
    $result = [];
    $tab = explode("14", decbin($n));
    if ($tab[count($tab) - 1] != "") {
        array_pop($tab);
    }
    foreach ($tab as $t) {
        if ($t != "") {
            $result[] = $t;
        }
    }
    if (!empty($result)) {
        return $maxlen = max(array_map('strlen', $result));
    } else {
        return 0;
    }
    print_r($tap);
}


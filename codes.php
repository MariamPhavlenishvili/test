<?php
function detect_pangram($string) {
    $string = array_unique(str_split
    (strtolower(preg_replace('/[^a-z]/i', '', $string))));
    return (count($string)>25) ? True : False;

}

print_r(detect_pangram("5B!e i J x*p F h d!A:o q D y n6L%u9i.G9f2g4C a h+K!m+z:R t!j:B w s C"));


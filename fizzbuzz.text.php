<?php

function fizzbuzz($total)
{
    for ($i = 1; $i <= $total; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0){
        echo "<br/> fizz Buzz";
    } elseif ($i % 3 == 0) {
        echo "<br/> Fizz";
    } elseif ($i % 5 == 0) {
        echo "<br/> Buzz";
    } else {
        echo "<br/> . $i";
    }
}
}
echo fizzbuzz(100);
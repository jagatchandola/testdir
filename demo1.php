<?php

function star($num) {
    for($i=$num; $i>=1; $i--) {
        for($j=1; $j<=$i; $j++) {
            echo '* ';
        }
        echo PHP_EOL;
    }
}

star(5);

<?php

/**
 * program to print the pattern for a given number rows
 * 
 * 1
 * 12
 * 123
 * 1234
 * 123
 * 12
 * 1
 * 
 */

// $rows = 20;
$rows = (int)readline('Enter the number of rows you need to print: ');

for ($i = 1; $i <= $rows; $i++) {
    if ($i <= ($rows/2)) {
        for($j = 0; $j <= ($i - 1); $j++) {
            printf("%d", $j+1);
        }
    } else {
        for($j = 0; $j <= ($rows % $i); $j++) {
            printf("%d", $j + 1);
        }
    }

    printf("\n"); 
}
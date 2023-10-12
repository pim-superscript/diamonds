<?php
declare(strict_types=1);
/**
 * The trick is to identify how to turn a quarter diamond into a full diamond
 * The $x function in index.php flips, turning a quarter into half and a half into full
 * I then shaved off as much as I could, replacing constants with values,
 * and relying on the old working of implode
 */
$number = $argv[1];
$upperDiamond = [];
foreach (range(1, $number) as $i) {
    $countingUp = range(1, $i);
    $countingDown = array_slice(array_reverse($countingUp), 1);
    $allNumbers = array_merge($countingUp, $countingDown);
    $line = implode("", $allNumbers);
    $upperDiamond[] = str_pad($line, $number*2-1, ' ', STR_PAD_BOTH);
}
$lowerDiamond = array_slice(array_reverse($upperDiamond), 1);
$diamond = array_merge($upperDiamond, $lowerDiamond);
echo implode("\n", $diamond);
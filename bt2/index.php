<?php
include 'stopwatch.php';
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

$time_start = microtime_float(true);

// Sleep for a while
usleep(100);

$time_end = microtime_float(true);
$time = $time_end - $time_start;

echo "Did nothing in $time seconds\n";
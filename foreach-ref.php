<?php


//With References

$largeArray = range(1, 1_000_000);
$startTime = microtime(true);
$startMemory = memory_get_usage();

$out = [];

foreach ($largeArray as &$value) {
    $value = $value * 2;
}

$endTime = microtime(true);
$endMemory = memory_get_usage();

echo "Time taken: " . ($endTime - $startTime) . " seconds\n";
echo "Memory used: " . (($endMemory - $startMemory) / 1024 / 1024) . " MBs\n";

// With Values

$largeArray = range(1, 1_000_000);
$startTime = microtime(true);
$startMemory = memory_get_usage();

$out = [];

foreach ($largeArray as $value) {
    $out[] = $value * 2;
}

$endTime = microtime(true);
$endMemory = memory_get_usage();

echo "Time taken: " . ($endTime - $startTime) . " seconds\n";
echo "Memory used: " . (($endMemory - $startMemory) / 1024 / 1024) . " MBs\n";

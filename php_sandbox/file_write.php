<?php

$filepath = __DIR__ . '/sample_file.txt';

$handle = fopen($filepath, 'w'); // overwrite

if ($handle)
{
    fwrite($handle, 'leonardo');
    fwrite($handle, '1234567890');
    fclose($handle);
}
else
{
    echo 'Could not open file.';
}

$filepath = __DIR__ . '/sample_file2.txt';
$data = "A page of data\n111\n222\n333\n";

file_put_contents($filepath, $data);
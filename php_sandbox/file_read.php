<?php

$filepath = __DIR__ . '/assets/lorem_ipsum.txt';

$handle = fopen($filepath, 'r');
$bytes = filesize($filepath);

if ($handle)
{
    $data = fread($handle, $bytes);
    fclose($handle);
}
else
{
    echo 'Could not open file.';
}

// echo nl2br($data);

$data = file_get_contents($filepath);
echo nl2br($data);
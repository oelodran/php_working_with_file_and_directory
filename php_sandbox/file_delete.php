<?php

$filepath = __DIR__ . '/delete_me.txt';

file_put_contents($filepath, 'Delete me');

echo file_exists($filepath) ? 'exist' : 'none';
echo "<br />";

unlink($filepath);

echo file_exists($filepath) ? 'exist' : 'none';
echo "<br />";
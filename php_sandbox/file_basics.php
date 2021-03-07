<?php

$filepath = 'C:\xampp\htdocs\php_working_with_file_and_directory\php_sandbox\file_basics.php';
$dirpath = 'C:\xampp\htdocs\php_working_with_file_and_directory\php_sandbox';

echo file_exists($filepath) ? 'exists' : 'none';
echo '<br />';

echo file_exists($dirpath) ? 'exists' : 'none';
echo '<br />';

echo is_file($filepath) ? 'file' : 'not file';
echo '<br />';

echo is_file($dirpath) ? 'file' : 'not file';
echo '<br />';

echo is_dir($filepath) ? 'dir' : 'not dir';
echo '<br />';

echo is_dir($dirpath) ? 'dir' : 'not dir';
echo '<br />';

?>
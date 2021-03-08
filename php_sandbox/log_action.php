<?php

function log_action($action, $message="") {
    $filepath = __DIR__ . '/log.txt';

    $handle = fopen($filepath, 'a');
    if ($handle) {
        $time_string = strftime("%Y-%m-%d %H:%M:%S");
        fwrite($handle, $time_string);
        fwrite($handle, ' - ');
        fwrite($handle, ucwords($action));
        if ($message != "") {
            fwrite($handle, ': ' . $message);
        }
        fwrite($handle, "\n");
        fclose($handle);
    } else {
        echo "Could not open file.";
    }
}

log_action('test');
log_action('Login', 'Smith logged in');
log_action('Logout', 'Smith logged out');
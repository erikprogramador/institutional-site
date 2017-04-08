<?php

if (!function_exists('dd')) {
    // Make this with symfony dumper
    function dd($expression) {
        echo "<pre>";
        var_dump($expression);
        echo "</pre>";
        die();
    }
}

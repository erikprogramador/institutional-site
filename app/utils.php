<?php

if (!function_exists('dd')) {
    function dd($expression) {
        dump($expression); die();
    }
}

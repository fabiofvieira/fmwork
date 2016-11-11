<?php

function debug($data, $die = false) {
    echo "<pre class='debug'>";
    var_dump($data);
    echo "</pre>";
    if($die)
        die;
}
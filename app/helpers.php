<?php

function extract_fileName($path) {
    $path = explode('/', $path);
    return array_pop($path);
}
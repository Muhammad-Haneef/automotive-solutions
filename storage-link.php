<?php

$target = __DIR__ . '/xstoreo/storage/app/public';
$link = __DIR__ . '/storage';

if (file_exists($link)) {
    die('Storage link already exists.');
}

if (symlink($target, $link)) {
    echo 'Storage link created successfully.';
} else {
    echo 'Failed to create storage link.';
}
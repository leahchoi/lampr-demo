<?php

$data = [
    [
        'title' => 'Do stuff',
        'details' => 'Do all the things'
],
    [
        'title' => 'Go to store',
        'details' => 'Eggs, Milk, rice'
    ]
];

$output = json_encode($data);

print $output;


<?php

namespace App\Building;

const GRANARY = 'granary';
const HOUSE = 'house';
const PALACE = 'palace';

const BUILDING_TYPES = [
    GRANARY,
    HOUSE,
    PALACE,
];

const STATUS_CONSTRUCTING = 'constructing';
const STATUS_OPERATIONAL = 'operational';

function init(string $type)
{
    return [
        'type' => $type,
        'status' => STATUS_OPERATIONAL,
    ];
}

function build(string $type)
{
    if (!is_valid_building($type)) {

    }
}

function is_valid_building(string $type): bool
{
    return in_array($type, BUILDING_TYPES);
}
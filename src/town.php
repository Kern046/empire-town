<?php

namespace App\Town;

function init(array $roles, array $buildings, int $wallet): array
{
    return [
        'people' => init_people($roles),
        'buildings' => init_buildings($buildings),
        'wallet' => $wallet,
    ];
}

function init_people(array $roles): array
{
    return convert_data($roles, 'App\Person\spawn_from_role');
}

function init_buildings(array $buildings): array
{
    return convert_data($buildings,'App\Building\init');
}

function convert_data(array $data, callable $convert): array
{
    return array_reduce(
        array_keys($data),
        function (array $acc, string $item) use ($data, $convert) {
            array_push($acc, ...array_map(
                $convert,
                array_fill(
                    0,
                    $data[$item],
                    $item
                )
            ));
            return $acc;
        },
        []
    );
}
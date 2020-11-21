<?php

namespace App\Person;

const AGE_BABY = 0;
const AGE_CHILD = 1;
const AGE_YOUNG = 2;
const AGE_ADULT = 3;
const AGE_OLD = 4;

const AGE_CATEGORIES = [
    AGE_BABY,
    AGE_CHILD,
    AGE_YOUNG,
    AGE_ADULT,
    AGE_OLD,
];

const GENDER_MALE = 'male';
const GENDER_FEMALE = 'female';

const ROLE_GOVERNOR = 'governor';
const ROLE_MERCHANT = 'merchant';
const ROLE_PEASANT = 'peasant';

const ROLES = [
    ROLE_GOVERNOR,
    ROLE_MERCHANT,
    ROLE_PEASANT,
];

function eat()
{

}

function work(callable $work)
{
    $work();
}

function can_work(int $ageCategory): bool
{
    return $ageCategory >= AGE_YOUNG && $ageCategory < AGE_OLD;
}

function spawn(string $role, string $ageCategory): array
{
    if (!is_valid_role($role)) {

    }
    if (!is_valid_age($ageCategory)) {

    }
    return [
        'name' => 'Joe',
        'gender' => GENDER_MALE,
        'age_category' => $ageCategory,
        'role' => $role,
    ];
}

function spawn_from_role(string $role): array
{
    return spawn($role, AGE_ADULT);
}

function is_valid_role(string $role): bool
{
    return in_array($role, ROLES);
}

function is_valid_age(string $ageCategory): bool
{
    return in_array($ageCategory, AGE_CATEGORIES);
}

function move()
{

}

function breed()
{

}

function pass_away()
{

}
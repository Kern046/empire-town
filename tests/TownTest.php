<?php

namespace Tests;

use App\Town;
use const App\Building\GRANARY;
use const App\Building\HOUSE;
use const App\Building\PALACE;
use const App\Person\ROLE_GOVERNOR;
use const App\Person\ROLE_MERCHANT;
use const App\Person\ROLE_PEASANT;

/**
 * @covers
 */
class TownTest extends \PHPUnit\Framework\TestCase
{
    public function testInit(): void
    {
        $town = Town\init(
            [ROLE_PEASANT => 5],
            [PALACE => 1, HOUSE => 5, GRANARY => 1],
            500
        );

        $this->assertEquals(500, $town['wallet']);
        $this->assertCount(5, $town['people']);
        $this->assertCount(7, $town['buildings']);
    }

    /**
     * @dataProvider peopleProvider
     */
    public function testInitPeople(array $roles, int $expectedCount): void
    {
        $people = Town\init_people($roles);

        $this->assertCount($expectedCount, $people);
    }

    public function peopleProvider(): array
    {
        return [
            [
                [
                    ROLE_GOVERNOR => 1,
                    ROLE_PEASANT => 10,
                ],
                11,
            ],
            [
                [
                    ROLE_GOVERNOR => 1,
                    ROLE_MERCHANT => 5,
                    ROLE_PEASANT => 20,
                ],
                26,
            ],
        ];
    }
}
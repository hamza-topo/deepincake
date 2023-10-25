<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'adress' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-10-25 21:20:55',
                'updated' => '2023-10-25 21:20:55',
            ],
        ];
        parent::init();
    }
}

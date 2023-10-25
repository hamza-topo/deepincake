<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUser extends AbstractMigration
{
    /**
     * Up Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-up-method
     * @return void
     */
    public function up(): void
    {
        $table = $this->table('users');
        $table->addColumn('name', 'string', ['default' => null, 'limit' => 255, 'null' => true])
            ->addColumn('email', 'string', ['limit' => 100])
            ->addColumn('adress', 'string', ['limit' => 255])
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime', ['null' => true])
            ->addIndex(
                ['email', 'name'],
                [
                    'unique' => true,
                    'name' => 'idx_users_email',
                    'order' => ['email' => 'DESC', 'name' => 'ASC']
                ]
            )
            ->save();
    }

    public function down(): void
    {
        $table = $this->table('users')->drop()->save();
    }
}

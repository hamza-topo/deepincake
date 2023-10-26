<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\Entity\User as EntityUser;
use App\Model\Table\UsersTable;
use Cake\Datasource\EntityInterface;
use Cake\ORM\Table;
use Cake\Log\Log;

class User implements RepositoryInterface
{
    protected $usersTable;

    public function __construct()
    {
        $this->usersTable = new UsersTable();
    }

    /**
     * all
     *
     * @param  mixed $table
     * @param  mixed $options
     * @return UsersTable
     */
    public function all(?Table $table = null, array $options = []): UsersTable //TODO::use collection
    {
        return $this->usersTable;
    }

    /**
     * create
     *
     * @param  mixed $newEmptyEntity
     * @param  mixed $request
     * @return EntityUser
     */
    public function create(EntityInterface $newEmptyEntity, array $request = []): EntityUser
    {
        $user = $this->usersTable->patchEntity($newEmptyEntity, $request);
        
        return $this->usersTable->save($user);
    }

    /**
     * findById
     *
     * @param  mixed $primaryKey
     * @param  mixed $options
     * @return EntityUser
     */
    public function findById(string $primaryKey, array $options = []): EntityUser
    {
        return $this->usersTable->get($primaryKey, $options);
    }

    public function show()
    {
        return 'im show method';
    }
}

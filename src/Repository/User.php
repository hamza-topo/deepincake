<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\Table\UsersTable;
use Cake\Datasource\EntityInterface;
use Cake\ORM\Table;
use Cake\Datasource\ResultSetInterface;
use Exception;

class User implements RepositoryInterface
{
    protected $usersTable;

    public function __construct()
    {
        $this->usersTable = new UsersTable();
    }

    public function all(?Table $table = null, array $options = []): UsersTable
    {
        return $this->usersTable;
    }

    public function create(EntityInterface $entity, array $options = [])
    {
        throw new Exception("Method Not Allowed", 405);
    }

    public function findById(string $primaryKey, array $options = [])
    {
        return $this->usersTable->get($primaryKey, $options);
    }

    public function show()
    {
        return 'im show method';
    }
}

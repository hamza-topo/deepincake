<?php

namespace App\Repository;

use Cake\Datasource\EntityInterface;
use Cake\Datasource\ResultSetInterface;
use Cake\ORM\Table;

interface RepositoryInterface
{
    public function create(EntityInterface $entity, array $options = []);
    public function findById(string $primaryKey, array $options = []);
    public function all(Table $table = null, array $options = []);
}

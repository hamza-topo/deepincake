<?php

namespace App\Traits;

use App\Repository\User as RepositoryUser;

trait User
{


    protected $userRepository;


    public function __construct()
    {
        $this->userRepository = new RepositoryUser();
    }
}

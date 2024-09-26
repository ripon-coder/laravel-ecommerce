<?php

namespace App\Repository;

interface UserRepositoryInterface
{
    public function AllUser();
    public function find($id);
    public function UpdateUser($id,array $data);
    public function DeleteUser();
}

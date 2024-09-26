<?php

namespace App\Repository;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function AllUser()
    {
        return User::get();
    }
    public function find($id){
        return User::findOrFail($id);
    }
    public function UpdateUser($id,$data) {
        $user = $this->find($id);

        return $user->update($data);
    }
    public function DeleteUser() {}
}

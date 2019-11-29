<?php


namespace App\Services;
use App\User;

class UserService
{
    public function __construct()
    {
    }

    public function getUserList()
    {
        return User::all();
    }

    public function save(array $data)
    {
        $response = User::create($data);
        return;
    }

    public function delete($id)
    {
        return User::destroy($id);
    }

    public function getDetail($id)
    {
        return User::where('id','=',$id)->first();
    }

    public function makeAdmin($id)
    {
        $user = User::where('id','=',$id)->first();
        return $user->syncRoles(['admin']);
    }

    public function makeUser($id)
    {
        $user = User::where('id','=',$id)->first();
        return $user->syncRoles([]);
    }

}

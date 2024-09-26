<?php

namespace App\Http\Controllers;

use App\Http\Requests\SimpleRequest;
use App\Repository\UserRepositoryInterface;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    public function Test(UserRepositoryInterface $user)
    {
        //return $user->AllUser();
        // $data = [
        //     "name"=>"Bangladesh"
        // ];
        // return $user->UpdateUser(5,$data);
        //return view("form");
        Redis::set("anotherKey","I love you");
    }

    public function Test1(SimpleRequest $request){
        return $request->all();
    }
}

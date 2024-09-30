<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
{
    $count = UserModel::where('level_id', 2)->count();
    //dd($count);
    $user = UserModel::where('level_id', 2)->first();

    return view('user', ['data' => $user, 'count' => $count]);
}
}

// public function index($user_id) {
//     $id = $user_id;
//     $user = UserModel::findOrFail(['id' => 1]);
//     return view('user', ['data' => $user]);
// }


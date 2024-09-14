<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        //tambah data user dengan eloquent model
        // $data = [
        //     'username' => 'kasir-1',
        //     'nama' => 'kasir satu',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 3
        // ];
        // UserModel::insert($data);

        //Update
        $data = [
            'nama' => 'Pelanggan Pertama',
        ];
        UserModel::where('username', 'customer-1')->update($data);

        $user = UserModel::all();
        return view('user',['data' => $user]);
    }
}

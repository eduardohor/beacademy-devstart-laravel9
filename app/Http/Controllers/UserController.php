<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'nomes' => [
                'Eduardo',
                'Henrique'
            ]
        ];

        dd($users);
    }

    public function show($id)
    {
        dd("O id do usuário é " . $id);
    }
}
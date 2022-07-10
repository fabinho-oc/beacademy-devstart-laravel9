<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'nome'=> [
                'Jose Lira',
                'João Lira'
            ]
        ];

        dd($users);
    }


    public function show($id)
    {
        dd('id do usuário é :' . $id);
    }
}
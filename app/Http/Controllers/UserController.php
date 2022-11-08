<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexGuru()
    {
        return view("dashboard.guru", [
            'title'     => 'Data Guru',
            'data'      =>  User::role("GURU")->with('dataUser')->get()
        ]);
    }
}

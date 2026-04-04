<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function index()
    {
        $users = User::all();

        // get() untuk multiple record
        // first() untuk single record
        dd($users[0]->department_id);
        // dd($users[0]->fullName);
        // dd($users[0]->fullname);
        // dd($users[0]->full_name);
    }
}

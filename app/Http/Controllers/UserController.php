<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function store()
    {
        dd('csrf protected');
    }
}

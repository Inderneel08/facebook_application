<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginController extends Model
{
    public function login()
    {
        return(view('login'));
    }
}

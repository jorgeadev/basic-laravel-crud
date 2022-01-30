<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($name) {
        return "Usuario " . $name;
    }
    public function user1($id) {
        return 'User: ' . $id;
    }
    public function user2($id, $name) {
        return "Usuario " . $id . ' y el nombre es: ' . $name;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    public function userParameter($name='Guest') {
        return 'User: ' . $name;
    }

    public function userParameters($name, $comment) {
        return "User: " . $name . " and the comment is: " . $comment;
    }
}












<?php

namespace App\Http\Controllers\eb;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index(int $doctorId)
    {
        $patients = User::where('doctor_id', $doctorId)->get();

        return view('users.index', compact('users'));
    }

    public function info(int $id)
    {
        $user = User::find($id);

        return view('users.info', compact('user'));
    }
}

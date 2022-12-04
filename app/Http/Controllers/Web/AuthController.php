<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\UpdateUserRequest;
use App\Http\Requests\Web\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        Auth::guard('web')->logout();

        return redirect('/login');
    }

    public function signin(LoginRequest $request)
    {
        $data = $request->validated();
        $user = User::where('email', $data['email'])->first();
        if (is_null($user)) {
            return redirect()->back()->with('error', 'Неверные имя пользователя или пароль');
        }

        if (!Hash::check($data['password'], $user->password)) {
            return redirect()->back()->with('error', 'Неверные имя пользователя или пароль');
        }

        $remember = false;
        if (isset($data['remember'])) {
            $remember = true;
        }

        Auth::guard('web')->login($user, $remember);

        if ($user->role == User::ROLE_PATIENT) {
            return redirect('/patient/records');
        }
        else if ($user->role == User::ROLE_DOCTOR) {
            return redirect('/doctor/records');
        }
        else {
            return redirect('/record');
        }
    }

    public function edit()
    {
        $user = Auth::user();

        return view('user.profile', compact('user'));
    }

    public function update(UpdateUserRequest $request)
    {
        $user = Auth::user();

        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        $user = User::find($user->id);
        $user->update($data);

        return redirect()->back()->with('message', 'Данные успешно изменены');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();

        if ($data['email'] == User::where('email', $data['email'])->first()) {
            return $this->errNotAcceptable('Данный email уже занят');
        }

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        if (isset($data['photo'])) {
            $this->storeImage($data['photo'], $user->id);
        }

        return redirect('/login');
    }

    public function store(UpdateUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect()->back()->with('message', 'Данные успешно изменены');
    }

    private function storeImage($image, $userId)
    {
        $this->imageRepository->store($image, $userId);
    }
}

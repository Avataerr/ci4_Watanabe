<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function authenticate()
    {
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $user = (new UserModel())
            ->where('username', $this->request->getPost('username'))
            ->first();

        if (!$user || !password_verify($this->request->getPost('password'), $user['password'])) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Invalid username or password.');
        }

        session()->regenerate(true);
        session()->set([
            'user_id'    => $user['id'],
            'username'   => $user['username'],
            'isLoggedIn' => true,
        ]);

        return redirect()->to('/customers');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}

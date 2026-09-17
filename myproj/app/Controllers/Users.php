<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin_1',
                'full_name' => 'Dokja Admin',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier_1',
                'full_name' => 'Biyoong',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier_2',
                'full_name' => 'Uriel',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager_1',
                'full_name' => 'Sun Wukong',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff_1',
                'full_name' => 'Lee Jooyeok',
                'role' => 'Staff'
            ]
        ];

        return view('users', [
            'users' => $users
        ]);
    }
}
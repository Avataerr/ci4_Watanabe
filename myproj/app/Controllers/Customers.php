<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Maverrick Watanabe',
                'email' => 'mbwatanabe@fit.edu.ph',
                'phone' => '09569765476'
            ],
            [
                'full_name' => 'Althea Gay Bajada',
                'email' => 'agbajada@fit.edu.ph',
                'phone' => '09214567685'
            ],
            [
                'full_name' => 'Janella Ricca Valdez',
                'email' => 'jrvaldez@fit.edu.ph',
                'phone' => '09452136675'
            ],
            [
                'full_name' => 'Christen Joy Sargento',
                'email' => 'cjsargento@fit.edu.ph',
                'phone' => '09114651123'
            ],
            [
                'full_name' => 'Giulia Villaneuva',
                'email' => 'gmvillanueva@fit.edu.ph',
                'phone' => '09896114565'
            ]
        ];

        return view('customers', [
            'customers' => $customers
        ]);
    }
}
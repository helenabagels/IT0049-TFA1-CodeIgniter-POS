<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'full_name' => 'Dabes',
                'email' => 'dabes@example.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'dabes1',
                'email' => 'dabes1@example.com',
                'phone' => '09181234567',
            ],
            [
                'full_name' => 'Dabes2',
                'email' => 'dabes2@example.com',
                'phone' => '09192345678',
            ],
            [
                'full_name' => 'Dabes3',
                'email' => 'dabes3@example.com',
                'phone' => '09203456789',
            ],
            [
                'full_name' => 'Dabes4',
                'email' => 'dabes4@example.com',
                'phone' => '09214567890',
            ],
        ];

        return view('customers', $data);
    }
}
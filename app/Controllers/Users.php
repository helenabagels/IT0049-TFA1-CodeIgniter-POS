<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'dagreat1',
                'full_name' => 'Dagreat 1',
                'role' => 'Cashier',
            ],
            [
                'username' => 'dagreat2',
                'full_name' => 'Dagreat 2',
                'role' => 'Manager',
            ],
            [
                'username' => 'dagreat3',
                'full_name' => 'Dagreat 3',
                'role' => 'Sales Staff',
            ],
            [
                'username' => 'dagreat4',
                'full_name' => 'Dagreat 4',
                'role' => 'Inventory Clerk',
            ],
            [
                'username' => 'dagreat5',
                'full_name' => 'Dagreat 5',
                'role' => 'Administrator',
            ],
        ];

        return view('users', $data);
    }
}
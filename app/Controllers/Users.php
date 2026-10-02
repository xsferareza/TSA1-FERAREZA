<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['title'] = 'User Accounts';
        $data['users'] = [
            ['username' => 'admin_xielef', 'name' => 'Xielef Ferareza', 'role' => 'Administrator'],
            ['username' => 'cashier_cly', 'name' => 'Cly Duran', 'role' => 'Cashier'],
            ['username' => 'mgr_ibarra', 'name' => 'Crisostomo Ibarra', 'role' => 'Manager'],
            ['username' => 'inventory_elias', 'name' => 'Elias Salanga', 'role' => 'Inventory Clerk'],
            ['username' => 'cashier_sisa', 'name' => 'Sisa Rizal', 'role' => 'Cashier'],
        ];

        return view('users/index', $data);
    }
}
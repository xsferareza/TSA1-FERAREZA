<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['title'] = 'Customer Accounts';
        $data['customers'] = [
            ['name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '09171234567'],
            ['name' => 'Maria Clara', 'email' => 'maria@example.com', 'phone' => '09182345678'],
            ['name' => 'Crisostomo Ibarra', 'email' => 'ibarra@example.com', 'phone' => '09193456789'],
            ['name' => 'Elias Salanga', 'email' => 'elias@example.com', 'phone' => '09204567890'],
            ['name' => 'Sisa Rizal', 'email' => 'sisa@example.com', 'phone' => '09215678901'],
        ];

        return view('customers/index', $data);
    }
}
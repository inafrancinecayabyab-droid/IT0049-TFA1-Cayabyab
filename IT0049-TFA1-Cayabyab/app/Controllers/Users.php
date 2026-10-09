<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin', 'full_name' => 'Frances Cayabyab', 'role' => 'Administrator'],
            ['username' => 'maria.sales', 'full_name' => 'Maria Dela Cruz', 'role' => 'Cashier'],
            ['username' => 'jose.sales', 'full_name' => 'Jose Mendoza', 'role' => 'Cashier'],
            ['username' => 'liza.manager', 'full_name' => 'Liza Navarro', 'role' => 'Manager'],
            ['username' => 'paolo.inventory', 'full_name' => 'Paolo Aquino', 'role' => 'Inventory Staff'],
        ];

        return view('users/index', ['title' => 'User Accounts', 'users' => $users]);
    }
}

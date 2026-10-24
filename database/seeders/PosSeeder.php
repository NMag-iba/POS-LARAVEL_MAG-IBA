<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        Customer::create([
            'full_name' => 'Nathan Cruz',
            'email' => 'nathancruz@gmail.com',
            'phone' => '09171234567',
        ]);

        Customer::create([
            'full_name' => 'Caleb Dela Cruz',
            'email' => 'calebdcruz@gmail.com',
            'phone' => '09181234567',
        ]);

        Customer::create([
            'full_name' => 'Agnes Robles',
            'email' => 'arobles@gmail.com',
            'phone' => '09191234567',
        ]);

        Customer::create([
            'full_name' => 'Maria Castillo',
            'email' => 'mcastillo@gmail.com',
            'phone' => '09201234567',
        ]);

        Customer::create([
            'full_name' => 'Alex Angeles',
            'email' => 'alexangeles@gmail.com',
            'phone' => '09211234567',
        ]);

        User::create([
            'username' => 'marithesantos',
            'full_name' => 'Marithe Santos',
            'role' => 'Cashier',
        ]);

        User::create([
            'username' => 'limbuan_d',
            'full_name' => 'Dorothy Limbuan',
            'role' => 'Manager',
        ]);

        User::create([
            'username' => 'aliyah_salva',
            'full_name' => 'Aliyah Salvador',
            'role' => 'Cashier',
        ]);

        User::create([
            'username' => 'kdela_paz',
            'full_name' => 'Kirsten Dela Paz',
            'role' => 'Admin',
        ]);

        User::create([
            'username' => 'yanversoza',
            'full_name' => 'Maryan Versoza',
            'role' => 'Cashier',
        ]);
    }
}
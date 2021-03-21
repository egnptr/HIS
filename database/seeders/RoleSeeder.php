<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'id'             => 1,
                'name'           => 'Administrator',
            ],
            [
                'id'             => 2,
                'name'           => 'Doctor',
            ],
            [
                'id'             => 3,
                'name'           => 'Nurse',
            ],
            [
                'id'             => 4,
                'name'           => 'Staff',
            ],
        ];

        Role::insert($role);
    }
}

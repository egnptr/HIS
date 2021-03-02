<?php

namespace Database\Seeders;

use App\Models\ConsultingRoom;
use Illuminate\Database\Seeder;

class ConsultingRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            [
                'id'                => 1,
                'doctor_in_charge'  => 'Test',
                'status'            => 'Available',
                'created_at'        => '2021-01-24 14:00:11',
                'updated_at'        => '2021-01-24 14:00:11',
            ],
            [
                'id'                => 2,
                'doctor_in_charge'  => 'Test',
                'status'            => 'Available',
                'created_at'        => '2021-01-24 14:00:11',
                'updated_at'        => '2021-01-24 14:00:11',
            ],
            [
                'id'                => 3,
                'doctor_in_charge'  => 'Test',
                'status'            => 'Not Available',
                'created_at'        => '2021-01-24 14:00:11',
                'updated_at'        => '2021-01-24 14:00:11',
            ],
            [
                'id'                => 4,
                'doctor_in_charge'  => 'Test',
                'status'            => 'Available',
                'created_at'        => '2021-01-24 14:00:11',
                'updated_at'        => '2021-01-24 14:00:11',
            ],
            [
                'id'                => 5,
                'doctor_in_charge'  => 'Test',
                'status'            => 'Available',
                'created_at'        => '2021-01-24 14:00:11',
                'updated_at'        => '2021-01-24 14:00:11',
            ],
        ];

        ConsultingRoom::insert($rooms);
    }
}

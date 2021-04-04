<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
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
                'id'             => 1,
                'room_name'      => 'VIP Room',
                'total_bed'      => '2',
                'cost'           => 10000000,
                'created_at'     => '2021-01-24 14:00:11',
                'updated_at'     => '2021-01-24 14:00:11',
            ],
            [
                'id'             => 2,
                'room_name'      => 'Platinum Room',
                'total_bed'      => '2',
                'cost'           => 8000000,
                'created_at'     => '2021-01-24 14:00:11',
                'updated_at'     => '2021-01-24 14:00:11',
            ],
            [
                'id'             => 3,
                'room_name'      => 'Gold Room',
                'total_bed'      => '2',
                'cost'           => 5000000,
                'created_at'     => '2021-01-24 14:00:11',
                'updated_at'     => '2021-01-24 14:00:11',
            ],
            [
                'id'             => 4,
                'room_name'      => 'Silver Room',
                'total_bed'      => '2',
                'cost'           => 3000000,
                'created_at'     => '2021-01-24 14:00:11',
                'updated_at'     => '2021-01-24 14:00:11',
            ],
            [
                'id'             => 5,
                'room_name'      => 'Regular Room',
                'total_bed'      => '2',
                'cost'           => 1000000,
                'created_at'     => '2021-01-24 14:00:11',
                'updated_at'     => '2021-01-24 14:00:11',
            ],
        ];

        Room::insert($rooms);
    }
}

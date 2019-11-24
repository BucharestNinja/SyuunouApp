<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClosetInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('closet_info')->insert([
      'user_name' => 'MAKITO',
      'closet_name' => str_random(10),
    ],
      [
        'user_name' => 'MAKITO',
        'closet_name' => str_random(10),
    ]);
    }
}

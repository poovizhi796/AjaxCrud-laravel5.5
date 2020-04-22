<?php

use Illuminate\Database\Seeder;

class CutomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'customer_key' => '12345',
            'name' => str_random(10),
            'mobile' => str_random(10),
            'address' => str_random(10),
            'gender' => str_random(10),
            'type' => str_random(10),
            'image' => str_random(10),
            'customer_status' => 'active',
        ]);
    }
}

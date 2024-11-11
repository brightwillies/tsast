<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        
        DB::table('users')->insert([
            'first_name' => 'LandsarFm',
            'last_name' => 'Admin',
            'email' => 'admin@admin.com',
            'telephone_number' => '0241849088',
            'role_id' => 1,
            'status' => 1,
            'mask' => \generate_mask(),
            'password' => Hash::make('Landsarfm@20223'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
    }
}

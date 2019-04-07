<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('roles')->insert([
            'name' => 'ROLE_ADMIN',
            'description' => 'This is the administrator of the whole system',
        ]);

        DB::table('roles')->insert([
            'name' => 'ROLE_RENTACAR',
            'description' => 'This is the administrator of the Rent-A-Car',
        ]);

        DB::table('roles')->insert([
            'name' => 'ROLE_HOTEL',
            'description' => 'This is the administrator of the Hotel',
        ]);

        DB::table('roles')->insert([
            'name' => 'ROLE_AVIO',
            'description' => 'This is the administrator of the Avio Company',
        ]);
    }
}

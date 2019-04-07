<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Dejan',
            'email' => 'dejangacevic24@gmail.com',
            'password' => 'bcrypt('nightbuzz123')',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\Table;

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

            'id' => 'user1',
            'password' => app('hash')->make('system3298'),
        ]);
        DB::table('users')->insert([

            'id' => 'user2',
            'password' => app('hash')->make('system3298'),
        ]);
    }
}

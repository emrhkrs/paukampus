<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'       => 'Mustafa',
                'surname'       => 'Özgün',
                'email'      => 'mozgun@posta.pau.edu.tr',
                'password'   => '$2y$10$liSkMQfEsAYKVa0DZAZMcuJEehcBMDFrxSZGVeACwcsIt8.jVdfHG', // Encrypted password is: 123123
                'active'     => 1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],

        ];

        DB::table('users')->insert($users);
    }
}

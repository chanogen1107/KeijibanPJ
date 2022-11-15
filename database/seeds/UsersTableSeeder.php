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
        \DB::table('users')->insert([
            [
                'id' => '1',
                'username' => 'chano',
                'email' => 'chano@aaa.com',
                'password' => 'chanochano',
                'admin_role' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],
            [
                'id' => '2',
                'username' => 'hoge',
                'email' => 'hoge@aaa.com',
                'password' => 'hogehoge',
                'admin_role' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '3',
                'username' => 'huga',
                'email' => 'huga@aaa.com',
                'password' => 'hugahuga',
                'admin_role' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('posts')->insert([
            [
                'id' => '1',
                'user_id' => '1',
                'post_sub_category_id' => '',
                'title' => '',
                'post' => '',
                'event_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s'),
             ],
            [
                'id' => '2',
                'username' => 'hoge',
                'email' => 'hoge@aaa.com',
                'password' => bcrypt('hogehoge'),
                'admin_role' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}

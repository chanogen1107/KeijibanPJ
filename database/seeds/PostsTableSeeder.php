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
            // [
            //     'id' => '1',
            //     'user_id' => '1',
            //     'post_sub_category_id' => '2',
            //     'title' => 'flexはとても便利',
            //     'post' => 'display:flexにするとブロック要素が横並びに！これまじで基礎',
            //     'event_at' => date('Y-m-d H:i:s'),
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at'=> date('Y-m-d H:i:s'),
            //  ],
             [
                'id' => '2',
                'user_id' => '1',
                'post_sub_category_id' => '4',
                'title' => '1日1絵',
                'post' => '最近のマイブームは1日一枚絵を描くことです。',
                'event_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s'),
             ],
        ]);
    }
}

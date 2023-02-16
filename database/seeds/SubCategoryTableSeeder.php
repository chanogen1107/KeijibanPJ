<?php

use Illuminate\Database\Seeder;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('post_sub_categories')->insert([
            [
                'id' => '1',
                'post_main_category_id' => '1',
                'sub_category' => 'html',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s'),
             ],
             [
                'id' => '2',
                'post_main_category_id' => '1',
                'sub_category' => 'css',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s'),
             ],
             [
                'id' => '3',
                'post_main_category_id' => '1',
                'sub_category' => 'php',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s'),
             ],
             [
                'id' => '4',
                'post_main_category_id' => '2',
                'sub_category' => 'マイブーム',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s'),
             ],
        ]);
    }
}

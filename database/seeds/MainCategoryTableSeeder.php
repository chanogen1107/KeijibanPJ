<?php

use Illuminate\Database\Seeder;

class MainCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('post_main_categories')->insert([
            [
                'id' => '1',
                'main_category' => 'IT技術',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s'),
             ],
             [
                'id' => '2',
                'main_category' => '雑談',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s'),
             ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HokubuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hokubus')->insert([
            [
              'name' => '佐藤',
              'body' => '内容1',
              'user_id' => '1',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
              'name' => '加藤',
              'body' => '内容2',
              'user_id' => '2',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
            
            ],
            [
              'name' => 'quynh',
              'body' => '内容3',
              'user_id' => '3',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
            
            ],
          ]);
        
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('post_crud')->insert([
            'title' => 'test',
            'content' => 'test content',
            'keyword' => 'test',
            'user_id' => '2'
        ]);
    }
}

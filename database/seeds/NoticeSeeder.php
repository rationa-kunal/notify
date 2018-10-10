<?php

use Illuminate\Database\Seeder;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notices')->insert([
            'head' => str_random(10),
            'body' => str_random(100),
            'from' => str_random(10),
        ]);
        
    }
}

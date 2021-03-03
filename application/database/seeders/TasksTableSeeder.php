<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->truncate();

        for ($i=0; $i<=9; $i++) {
            DB::table('tasks')->insert([
                'title' => Str::random(15),
                'ready' => rand(0,1)
            ]);
        }
    }
}

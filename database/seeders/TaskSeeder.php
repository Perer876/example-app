<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'user' => Str::random(10),
            'priority' => rand(0, 2),
            'description' => Str::random(30),
            'deadline' => Carbon::now(),
        ]);
    }
}

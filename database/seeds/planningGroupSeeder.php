<?php

use Illuminate\Database\Seeder;

class planningGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planning_group')->insert([
            'groupname'=>Str::random(10),
        ]);
        DB::table('planning_group')->insert([
            'groupname'=>Str::random(10),
        ]);
        DB::table('planning_group')->insert([
            'groupname'=>Str::random(10),
        ]);
        DB::table('planning_group')->insert([
            'groupname'=>Str::random(10),
        ]);
        DB::table('planning_group')->insert([
            'groupname'=>Str::random(10),
        ]);
        DB::table('planning_group')->insert([
            'groupname'=>Str::random(10),
        ]);
        DB::table('planning_group')->insert([
            'groupname'=>Str::random(10),
        ]);
        DB::table('planning_group')->insert([
            'groupname'=>Str::random(10),
        ]);
        DB::table('planning_group')->insert([
            'groupname'=>Str::random(10),
        ]);
        DB::table('planning_group')->insert([
            'groupname'=>Str::random(10),
        ]);
    }
}

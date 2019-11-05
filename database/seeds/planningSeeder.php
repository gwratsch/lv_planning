<?php

use Illuminate\Database\Seeder;

class planningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('plannings')->insert([
           'name'=>Str::random(10),
            'description'=>Str::random(10),
            'userid'=> 1,
            'groupid'=> random_int(1, 10),
            'start_date'=>now(),
       ]);
       DB::table('plannings')->insert([
           'name'=>Str::random(10),
            'description'=>Str::random(10),
            'userid'=> 1,
            'groupid'=> random_int(1, 10),
            'start_date'=>now(),
       ]);
       DB::table('plannings')->insert([
           'name'=>Str::random(10),
            'description'=>Str::random(10),
            'userid'=> 1,
            'groupid'=> random_int(1, 10),
            'start_date'=>now(),
       ]);
       DB::table('plannings')->insert([
           'name'=>Str::random(10),
            'description'=>Str::random(10),
            'userid'=> 1,
            'groupid'=> random_int(1, 10),
            'start_date'=>now(),
       ]);
       DB::table('plannings')->insert([
           'name'=>Str::random(10),
            'description'=>Str::random(10),
            'userid'=> 1,
            'groupid'=> random_int(1, 10),
            'start_date'=>now(),
       ]);
       DB::table('plannings')->insert([
           'name'=>Str::random(10),
            'description'=>Str::random(10),
            'userid'=> 1,
            'groupid'=> random_int(1, 10),
            'start_date'=>now(),
       ]);
       DB::table('plannings')->insert([
           'name'=>Str::random(10),
            'description'=>Str::random(10),
            'userid'=> 1,
            'groupid'=> random_int(1, 10),
            'start_date'=>now(),
       ]);
       DB::table('plannings')->insert([
           'name'=>Str::random(10),
            'description'=>Str::random(10),
            'userid'=> 1,
            'groupid'=> random_int(1, 10),
            'start_date'=>now(),
       ]);
       DB::table('plannings')->insert([
           'name'=>Str::random(10),
            'description'=>Str::random(10),
            'userid'=> 1,
            'groupid'=> random_int(1, 10),
            'start_date'=>now(),
       ]);
       DB::table('plannings')->insert([
           'name'=>Str::random(10),
            'description'=>Str::random(10),
            'userid'=> 1,
            'groupid'=> random_int(1, 10),
            'start_date'=>now(),
       ]);
    }
}

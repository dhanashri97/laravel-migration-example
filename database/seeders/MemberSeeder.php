<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('dbblogs')->insert([
            
            'firstName'=>Str::random(10),
            'lastName' =>Str::random(20),
            'mobileNumber' =>Str::random(20),


        ]);
    }
}

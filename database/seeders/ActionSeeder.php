<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('master_action')->insert([
            'name' => 'some action',
            'email_templates_id' => '1',
            'created_at' => now()
        ]);

        DB::table('master_action')->insert([
            'name' => 'other action',
            'email_templates_id' => '3',
            'created_at' => now()
        ]);
    }
}

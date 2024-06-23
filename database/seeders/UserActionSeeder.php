<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('user_actions')->insert([
        //     'name' => 'some action',
        //     'email_templates_id' => '1',
        //     'master_action_id' => '1',
        //     'users_id' => '4',
        //     'created_at' => now()
        // ]);

        DB::table('user_actions')->insert([
            'name' => 'some action',
            'email_templates_id' => '3',
            'user_templates_id' => '2',
            'master_action_id' => '3',
            'users_id' => '4',
            'created_at' => now()
        ]);
    }
}

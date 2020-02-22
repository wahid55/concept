<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        DB::table('roles')->insert([
            [
                'name'          => 'Administrator',
                "created_at"    => now(),
                "updated_at"    => now()
            ],
            [
                'name'          => 'Author',
                "created_at"    => now(),
                "updated_at"    => now()
            ],
            [
                'name'          => 'Subscriber',
                "created_at"    => now(),
                "updated_at"    => now()
            ]
        ]);
    }
}

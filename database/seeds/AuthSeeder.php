<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = DB::table('users')->count();
        if($count == 0){
            DB::table('users')->insert([
                'email' => 'admin@studio.nv',
                'password' => bcrypt('1234567'),
                'name' => 'Huong Pham'
            ]);
        }
    }
}

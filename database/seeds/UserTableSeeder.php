<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('users')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // create user
        App\Models\User::create([
            'name'     => 'IRCBO ADMIN',
            'email'    => 'admin@ircbo.com',
            'password' => bcrypt('admin@ircbo')
        ]);
    }
}

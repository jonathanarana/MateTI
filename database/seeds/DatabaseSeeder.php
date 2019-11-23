<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@primermaster.net',
            'password' => bcrypt('secret'),
            'email_verified_at' => date('Y-m-d H:i:s')
        ]);
        for ($i=1; $i < 11; $i++) {
          DB::table('users')->insert([
              'name' => 'user'.$i,
              'email' => 'user'.$i.'@primermaster.net',
              'password' => bcrypt('password'),
          ]);
        }

    }
}

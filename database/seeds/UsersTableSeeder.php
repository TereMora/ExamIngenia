<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'id' => (string)Uuid::uuid4(),
          'name' => 'Teresita',
          'email' => 'teresita.mora05@hotmail.com',
          'password' => bcrypt('TereMora05'),
          'created_at' => \Carbon\Carbon::now(),
      ]);
    }
}

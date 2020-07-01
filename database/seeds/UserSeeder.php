<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        // Array of users (colors)
        $users = ['green', 'red', 'blue'];

        // Loop through the array and create a user
        // The for loop is the fastest way in this situation
        for ($i = 0; $i < count($users); $i++) {
            User::create([
                'color' => $users[$i]
            ]);
        }
        //
    }
}

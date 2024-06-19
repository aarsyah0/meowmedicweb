<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Sutan Arsyah N',
            'username' => 'arsyah',
            'email' => 'arsasaja2@gmail.com',
            'password' => bcrypt('Jember2004'),
        ]);
    }
}

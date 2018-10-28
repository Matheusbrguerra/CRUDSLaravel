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
        User::create([
            'name'=>'Matheus',
            'email'=>'matheus@admin.com',
            'password'=>bcrypt('123456')
        ]);
    }
}

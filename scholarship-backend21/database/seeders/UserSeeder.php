<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */






use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class, 200 )->create();
    }
}
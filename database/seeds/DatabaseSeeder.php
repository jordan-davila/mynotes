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
        $user = factory(App\User::class, 30)->create();

        $user->each(function ($user) {
            factory(App\Note::class, rand(5, 13))->create(['user_id' => $user->id]);
        });

    }
}

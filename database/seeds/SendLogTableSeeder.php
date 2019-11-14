<?php

use Illuminate\Database\Seeder;

class SendLogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SendLog::class, 10000)->create();
    }
}

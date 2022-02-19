<?php

namespace Database\Seeders;

use App\Models\ForumThread;
use Illuminate\Database\Seeder;

class ForumThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ForumThread::factory()->count(100)->create();
    }
}

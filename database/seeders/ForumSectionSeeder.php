<?php

namespace Database\Seeders;

use App\Models\ForumSection;
use Illuminate\Database\Seeder;

class ForumSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ForumSection::factory()->count(10)->create();
    }
}

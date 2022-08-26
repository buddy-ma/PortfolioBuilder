<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
use App\Models\Template;
use App\Models\Experience;
use App\Models\Hero;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Template::factory(2)->create(
        [
            'title' => 'Template 01',
            'blade' => 'index',
        ]);  

        $user = User::factory()->create([
            'name' => 'buddy',
            'email' => 'info@buddy.ma'
        ]);

        Experience::factory(10)->create([
            'profile_id' => $user->profile->id
        ]);

        Link::factory(3)->create([
            'profile_id' => $user->profile->id
        ]);

        ProjectCategory::factory(4)->create([
            'profile_id' => $user->profile->id
        ]);

        Project::factory(9)->create([
            'profile_id' => $user->profile->id
        ]);

        Hero::create(
        [
            'profile_id' => $user->profile->id,
            'title' => 'Hi, I am buddy!',
            'description' => 'Full stack web devlopper!',
            'button' => 'Get Started',
        ]);  
    }
}

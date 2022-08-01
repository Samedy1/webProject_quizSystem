<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            [
                'name' => 'Algorithm',
                'img' => 'img-1.png',
                'description' => 'C, C++'
            ],
            [
                'name' => 'Web Design',
                'img' => 'web_design.jpg',
                'description' => 'html, css, java script'
            ],
            [
                'name' => 'Mobile Application',
                'img' => 'Mobile-App.webp',
                'description' => 'Flutter'
            ],
            [
                'name' => 'Software Engineering',
                'img' => 'software_en.jpg',
                'description' => 'Software Engineering Ethics, Flow'
            ],
            [
                'name' => 'Networking',
                'img' => 'Networking.jpg',
                'description' => 'Computer Network'
            ],

        ];
        foreach($subjects as $key=>$value) {
            Subject::create($value);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = collect([
            [
                'name' => 'John Doe',
                'activity' => [
                    "last_active_at" => "2023-11-10",
                    "activity_score" => 82,
                    "student_interaction_rating" => 4.5,
                    "subjects_taught" => ["Mathematics", "Physics"]
                ]
            ],

            ['name' => 'Jane Smith',
                'activity' => [
                    "last_active_at" => "2023-11-09",
                    "activity_score" => 76,
                    "student_interaction_rating" => 4.7,
                    "subjects_taught" => ["Biology", "Chemistry"]
                ]
            ],
            ['name' => 'Alice Johnson',
                'activity' => [
                    "last_active_at" => "2023-11-11",
                    "activity_score" => 89,
                    "student_interaction_rating" => 4.8,
                    "subjects_taught" => ["History", "English"]
                ]
            ],
            ['name' => 'Mark Brown',
                'activity' => [
                    "last_active_at" => "2023-11-08",
                    "activity_score" => 79,
                    "student_interaction_rating" => 4.4,
                    "subjects_taught" => ["Art", "Social Studies"]
                ]
            ],
        ]);


        $teachers->each(function ($teacher) {
            Teacher::create(['name' => $teacher['name']])
                ->teacherActivity()->create($teacher['activity']);
        });
    }
}

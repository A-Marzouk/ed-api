<?php

namespace Database\Seeders;

use App\Models\EducationClass;
use App\Models\Student;
use App\Models\Teacher;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Student::factory(10)->create();

        $educationClasses = collect([
            [
                'subject' => 'Mathematics',
                'class_progress' => [
                    "average_score_improvement" => 12,
                    "homework_completion_rate" => 95,
                    "attendance_rate" => 98
                ]
            ],
            [
                'subject' => 'Science',
                'class_progress' => [
                    "average_score_improvement" => 9,
                    "homework_completion_rate" => 90,
                    "attendance_rate" => 92
                ]
            ],
            [
                'subject' => 'English',
                'class_progress' => [
                    "average_score_improvement" => 15,
                    "homework_completion_rate" => 97,
                    "attendance_rate" => 96
                ]
            ],
            [
                'subject' => 'History',
                'class_progress' => [
                    "average_score_improvement" => 7,
                    "homework_completion_rate" => 88,
                    "attendance_rate" => 90
                ]
            ]
        ]);


        $educationClasses->each(function ($class) use ($students) {
            $newClass = EducationClass::create(['subject' => $class['subject']]);

            $newClass->classProgress()->create($class['class_progress']);

            $newClass->students()->attach($students->pluck('id'), ['joined_at' => Carbon::now()]);
        });
    }
}

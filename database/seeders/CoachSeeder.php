<?php

namespace Database\Seeders;

use App\Models\Coach;
use App\Models\Resource;
use App\Models\Teacher;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coaches = collect([
            [
                'name' => 'Emily Turner',
                'coach_details' => [
                    'specialization' => 'Student Engagement',
                    'years_of_experience' => 5,
                ],
                'teacher_interactions' => [
                    [
                        'teacher_id' => Teacher::factory()->create()->id,
                        'last_meeting_date' => '2023-11-08',
                        'meeting_notes' => 'Discussed student engagement strategies.'
                    ],
                    [
                        'teacher_id' =>Teacher::factory()->create()->id,
                        'last_meeting_date' => '2023-11-07',
                        'meeting_notes' => 'Reviewed upcoming curriculum changes.'
                    ]
                ]
            ],
            [
                'name' => 'Michael Rodriguez',
                'coach_details' => [
                    'specialization' => 'Curriculum Development',
                    'years_of_experience' => 8,
                ],
                'teacher_interactions' => [
                    [
                        'teacher_id' => Teacher::factory()->create()->id,
                        'last_meeting_date' => '2023-11-10',
                        'meeting_notes' => 'Planned history project outline.'
                    ],
                    [
                        'teacher_id' => Teacher::factory()->create()->id,
                        'last_meeting_date' => '2023-11-09',
                        'meeting_notes' => 'Analyzed challenges in student\'s art engagement'
                    ]
                ]
            ]
        ]);

        $coaches->each(function ($coach) {
            $newCoach = Coach::create(['name' => $coach['name']]);

            $newCoach->coachDetails()->create($coach['coach_details']);
            $newCoach->teacherInteractions()->createMany($coach['teacher_interactions']);
        });
    }
}

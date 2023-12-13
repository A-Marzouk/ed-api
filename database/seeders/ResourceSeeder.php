<?php

namespace Database\Seeders;

use App\Models\Resource;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $resources = collect([
            [
                'name' => 'Interactive Geometry Software',
                'type' => 'software',
                'resource_management' => [
                    'allocated_teachers' => [Teacher::factory(), Teacher::factory()],
                    'utilization_rate' => 87,
                ]
            ],
            [
                'name' => 'Online Chemistry Lab',
                'type' => 'lab',
                'resource_management' => [
                    'allocated_teachers' => [Teacher::factory()],
                    'utilization_rate' => 75,
                ]
            ],
            [
                'name' => 'Historical Documentaries Archive',
                'type' => 'Archive',
                'resource_management' => [
                    'allocated_teachers' => [Teacher::factory()],
                    'utilization_rate' => 65,
                ]
            ],
            [
                'name' => 'Grammar and Composition Platform',
                'type' => 'Platform',
                'resource_management' => [
                    'allocated_teachers' => [Teacher::factory()],
                    'utilization_rate' => 82,
                ]
            ],
        ]);

        $resources->each(function ($resource) {
            Resource::create(['name' => $resource['name'], 'type' => $resource['type']])
                ->resourceManagement()->create($resource['resource_management']);
        });
    }
}

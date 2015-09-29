<?php

use Illuminate\Database\Seeder;

use App\Assignment;
use Carbon\Carbon;

use Faker\Factory as Faker;

class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker  = Faker::create('en_US');

        Assignment::create([
            'name' => 'Assignment One',
            'description' => $faker->paragraph(4),
            'module_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Assignment::create([
            'name' => 'Assignment Two',
            'description' => $faker->paragraph(4),
            'module_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Assignment::create([
            'name' => 'Assignment Three',
            'description' => $faker->paragraph(4),
            'module_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}

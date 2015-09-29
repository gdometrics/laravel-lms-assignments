<?php

use Illuminate\Database\Seeder;

use App\Module;
use Carbon\Carbon;


class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Module::create([
            'name' => 'Project Management',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Module::create([
            'name' => 'Web Development',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}

<?php

use App\Constants\DepartmentsConstant;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $departments = (new DepartmentsConstant)->returnArray();
        foreach ($departments as $department) {
            factory(Department::class)->create([
                'name' => $department
            ]);    
        }
        
    }
}

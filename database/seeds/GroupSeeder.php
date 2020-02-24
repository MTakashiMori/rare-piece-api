<?php

use App\GroupConstants\GroupChildrenConstant;
use App\GroupConstants\GroupFemaleConstants;
use App\GroupConstants\GroupMaleConstants;
use App\Models\Department;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $maleDepartment = Department::where('name', 'Male')->first();
        $maleGroups = (new GroupMaleConstants)->returnArray();
        foreach($maleGroups as $maleGroup) {
            factory(Group::class)->create([
                'name' => $maleGroup,
                'department_id' => $maleDepartment->id
            ]);
        }

        $femaleDepartment = Department::where('name', 'Female')->first();
        $femaleGroups = (new GroupFemaleConstants)->returnArray();
        foreach($femaleGroups as $femaleGroup) {
            factory(Group::class)->create([
                'name' => $femaleGroup,
                'department_id' => $femaleDepartment->id
            ]);
        }

        $childDepartment = Department::where('name', 'Child')->first();
        $childrenGroups = (new GroupChildrenConstant)->returnArray();
        foreach($childrenGroups as $childrenGroup) {
            factory(Group::class)->create([
                'name' => $childrenGroup,
                'department_id' => $childDepartment->id
            ]);
        }
    }
}

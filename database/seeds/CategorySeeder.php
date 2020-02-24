<?php

use App\Models\Group;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $beltsCategory = ['Calvin Klein', 'Hering', 'Gucci', 'Lois Vuitton'];
        $maleGroup = Group::where('name', 'Belts')->first();

        foreach($beltsCategory as $category) {
            factory(Category::class)->create([
                'name' => $category,
                'department_id' => $maleGroup->id,
                'description' => ('A belt from ' . $category)
            ]);
        }

        $makeupCategory = ['Avon', 'Natura', 'Pink', 'Jequiti', 'Forever 21'];
        $makeupGroup = Group::where('name', 'Make up')->first();

        foreach($makeupCategory as $category) {
            factory(Category::class)->create([
                'name' => $category,
                'department_id' => $makeupGroup->id,
                'description' => ('A makeup from ' . $category)
            ]);
        }
    

        $bathItensCategory = ['Rubber duck', 'Submarine', 'Floater', 'Bath salts', 'Rubber dinosaur'];
        $bathItensGroup = Group::where('name', 'Bath itens')->first();

        foreach($bathItensCategory as $category) {
            factory(Category::class)->create([
                'name' => $category,
                'department_id' => $bathItensGroup->id,
                'description' => ('A bath item')
            ]);
        }

    }
} 

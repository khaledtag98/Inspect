<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    public function definition()
    {
        $name = $this->faker->unique()->name;
        $truncated = Str::limit($name, 10, ' ...');
        if (strlen($name)>=10){
            $imgUrl = 'https://via.placeholder.com/600x400.png/d9fbff/85afff?text='.$truncated;
        }else $imgUrl = 'https://via.placeholder.com/600x400.png/d9fbff/85afff?text='.$name;


        return [
            'company_id'=> Company::factory(),
            'name' =>$name,
            'slug' => Str::slug($name),
            'picture' => $imgUrl,
            'description' => $this->faker->unique()->paragraph(3),
            'address' => $this->faker->unique()->address,
        ];
    }
}

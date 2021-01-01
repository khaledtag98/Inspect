<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\estate;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EstateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = estate::class;

    public function definition()
    {
        $name = $this->faker->unique()->name;
        $truncated = Str::limit($name, 10, ' ...');
        if (strlen($name)>=10){
            $imgUrl = 'https://via.placeholder.com/600x400.png/d9fbff/85afff?text='.$truncated;
        }else $imgUrl = 'https://via.placeholder.com/600x400.png/d9fbff/85afff?text='.$name;
        $catygory = ["Land", "Apartment", "Chalet"];
        return [
            'project_id'=> Project::factory(),
            'name' =>$name,
            'type' =>$catygory[rand(0, 2)],
            'price' =>$this->faker->numberBetween(250,3000),
            'block' =>$this->faker->numberBetween(1,20),
            'floor' =>$this->faker->numberBetween(1,10),
            'description' => $this->faker->paragraph(3),
            'available' =>$this->faker->boolean,
            'picture' => $imgUrl,
        ];
    }
}

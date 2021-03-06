<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->name;
        $truncated = Str::limit($name, 10, ' ...');
        if (strlen($name)>=10){
            $imgUrl = 'https://via.placeholder.com/600x400.png/d9fbff/85afff?text='.$truncated;
        }else $imgUrl = 'https://via.placeholder.com/600x400.png/d9fbff/85afff?text='.$name;
        return [
            'user_id'=> user::factory(),
            'name' =>$name,
            'slug' => Str::slug($name),
            'picture' => $imgUrl,
            'description' => $this->faker->paragraph(3),
        ];
    }
}

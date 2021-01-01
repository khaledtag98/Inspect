<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;
    public function definition()
    {
        $name = $this->faker->unique()->name;
        $truncated = Str::limit($name, 10, ' ...');
        if (strlen($name)>=10){
            $imgUrl = 'https://via.placeholder.com/600x400.png/d9fbff/85afff?text='.$truncated;
        }else $imgUrl = 'https://via.placeholder.com/600x400.png/d9fbff/85afff?text='.$name;
        return [
            'name' => $this->faker->unique()->name,
            'email' => $this->faker->unique()->safeEmail,
            'picture' => $imgUrl,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
